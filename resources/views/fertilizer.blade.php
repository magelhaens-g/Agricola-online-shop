@extends('layout/main')

@section('title', 'Agricola - Seed Category')

@section('content')
    @include('layout/header')

    <section class="new_arrivals_area clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Fertilizer Category</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">    
                    <!-- STORE -->
                    <div id="store" class="col-md-12">  
                        <!-- store products -->
                        <div class="row">
                            <!-- product -->
                            @foreach ($product as $prod)
                            <a href="{{ url('/product', [$prod->id]) }}">
                                <div class="col-md-3 col-xs-4">
                                    <div class="product">
                                        <div class="product-img">
                                            <img src="{{ $prod->pict1 }}" alt="">
                                        </div>
                                        <div class="product-body">
                                            <h3 class="product-name"><a href="#">{{ $prod->title }}</a></h3>
                                            <h4 class="product-price">Rp. {{ number_format($prod->price) }}</h4>
                                        </div>
                                    </div>
                                </div>
                            </a>
                            @endforeach
                            <!-- /product -->
                        </div>
                        <!-- /store products -->
                    </div>
                    <!-- /STORE -->
                
                </div>
                <!-- /row -->
                {{ $product->appends(request()->input())->links('layout/pagination') }}
            </div>
            <!-- /container -->
        </section>
        <div class="section-heading"></div>
@endsection