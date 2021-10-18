@extends('layout/main')

@section('title', 'Agricola - Toko Pertanian Terlengkap')

@section('content')
    <div id="thanks">
        <div class="thanks">
            <div class="thanks-pic">
                <h1><span></span></h1>
            </div>
            <h2>Thanks for your order</h2>
            <p>Want to see some other products?</p>
            <a href="{{ url('/') }}">Buy Again</a>
        </div>
    </div>
@endsection