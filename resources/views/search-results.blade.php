@extends('layout/main')

@section('title', 'Agricola - Toko Pertanian Terlengkap')

@section('content') 

    @if ($product->currentPage() > $product->lastPage())
        @include('layout/404')
    @elseif ($product->count() == 0)
        <div class="section">
            <section class="new_arrivals_area clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading text-center">
                                <h2>No items found</h2>
                                <img src="/images/core-img/sad.svg">
                                <p class="up">We can't to find any products that match your search for '{{ request()->input('search') }}'. </p>
                                <p class="down">You can try anything else</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    @else
        <div class="section">
            <section class="new_arrivals_area clearfix">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-heading text-center">
                                <h2>Search Results</h2>
                            </div>
                            <p>{{ $product->total() }} result(s) for {{ request()->input('search') }}</p>
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
        </div>
        <div class="section-heading"></div>
    @endif
    
@endsection