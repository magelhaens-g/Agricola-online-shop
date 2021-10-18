@extends('layout/main')

@section('title')
    Agricola - {{ $product->title }}
@endsection
    
@section('content')
    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                

                <!-- Product thumb imgs -->
                <div class="col-md-2  col-md-pull-5">
                    <div id="product-imgs">
                        <div class="product-preview">
                            <img src="{{ $product->pict1 }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{ $product->pict2 }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{ $product->pict3 }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product thumb imgs -->

                <!-- Product main img -->
                <div class="col-md-5 col-md-push-2">
                    <div id="product-main-img">
                        <div class="product-preview">
                            <img src="{{ $product->pict1 }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{ $product->pict2 }}" alt="">
                        </div>

                        <div class="product-preview">
                            <img src="{{ $product->pict3 }}" alt="">
                        </div>
                    </div>
                </div>
                <!-- /Product main img -->

                <!-- Product details -->
                <div class="col-md-5">
                    <div class="product-details">
                        <h2 class="product-name">{{ $product->title }}</h2>
                        <ul class="product-links">
                            <li>Category:</li>
                            <li><a>{{ $product->category }}</a></li>
                        </ul>
                        <div>
                            <h3 class="product-price">Rp. {{ number_format($product->price) }}</h3>
                        </div>
                        <p>{{ $product->desc }}</p>

                        <form method="POST" action="{{ route('checkout', $product) }}">
                            {{ csrf_field() }}
                            <div class="add-to-cart">
                                <div class="qty-label">
                                    <h6>Stock</h6>
                                    <div class="stock">
                                        <div class="product-stock">
                                            <input class="input" name="stock" type="number" readonly value="{{ $product->stock }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="qty-label">
                                    <h6>Quantity</h6>
                                    <div class="quantity">
                                        <div class="product-quantity">
                                            <input class="input" name="quantity" type="number" value="1" min="1" max="{{ $product->stock }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="product-buy">
                                    <a href="{{ URL::previous() }}"><input type="button" value="Cancel" class="back-btn"></a>
                                    @if ( $product->stock > 0 )
                                        <input type="submit" value="Buy" class="buy-btn">
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!-- /Product details -->
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /SECTION -->
@endsection