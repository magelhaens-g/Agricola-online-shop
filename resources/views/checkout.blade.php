@extends('layout/main')

@section('title', 'Agricola - Checkout')

@section('content')

    <div class="section">
        <section class="new_arrivals_area clearfix">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="section-heading text-center">
                            <h2>Checkout</h2>
                        </div>
                    </div>
                </div>
            </div>
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row1">
                    <div class="col-md-7">
                        <!-- Billing Details -->
                        <div class="billing-details">
                            <div class="section-title">
                                <h3 class="title">Shipping Address</h3>
                            </div>
                            <form name="form-order" action="{{ route('buy', $product) }}" method="POST">
                                @csrf
                                Name
                                <div class="form-group">
                                    <input class="input" id="name" type="text" name="name" placeholder="Please insert your name" required>
                                </div>
                                Address
                                <div class="form-group">
                                    <input class="input" type="text" name="address" placeholder="Please insert your address" required>
                                </div>
                                Telephone
                                <div class="form-group">
                                    <input class="input" type="tel" name="tel" placeholder="Please insert your telephone" required>
                                </div>
                                Stock
                                <div class="form-group">
                                    <input class="input" type="number" name="quantity" value="{{ $quantity }}" readonly>
                                </div>
                                <div class="payment-method">
                                    <div class="input-radio">
                                        Direct Bank Transfer
                                        <p>Please transfer to the following account.</p>
                                        <h4>1234567890</h4>
                                    </div>
                                </div>
                                <div class="input-checkbox">
                                    <input type="checkbox" id="terms" name="agreement" required>
                                    <label for="terms">
                                        <span></span>
                                        I've read and accept the terms & conditions
                                        <p></p>
                                    </label>
                                </div>
                                <div class="product-order">
                                    <input type="submit" value="Place Order" class="order-btn">
                                    <a href="{{ URL::previous() }}"><input type="button" value="Cancel" class="cancel-btn"></a>
                                </div>
                            </form>
                        </div>
                        <!-- /Billing Details -->
                    </div>

                    <!-- Order Details -->
                    <div class="col-md-5 order-details">
                        <div class="section-title text-center">
                            <h3 class="title">Your Order</h3>
                        </div>
                        <p align="right">{{ $date }}</p>
                        <div class="order-summary">
                            <div class="order-col">
                                <div><strong>PRODUCT</strong></div>
                                <div><strong>TOTAL</strong></div>
                            </div>
                            <div class="order-products">
                                <div class="order-col">
                                    <div>{{ $quantity }} x {{ $product->title }}</div>
                                    <div>Rp. {{ number_format($product->price) }}</div>
                                </div>
                            </div>
                            <div class="order-col">
                                <div>Shiping</div>
                                <div><strong>FREE</strong></div>
                            </div>
                            <div class="order-col">
                                <div><strong>TOTAL</strong></div>
                                <div><strong class="order-total">Rp. {{ number_format(($quantity) * ($product->price)) }}</strong></div>
                            </div>
                        </div>
                    </div>
                    <!-- /Order Details -->
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </section>
    </div>
@endsection