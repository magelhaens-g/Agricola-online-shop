@extends('layout/main')

@section('title', 'Agricola - Contact Us')

@section('content')

    <div class="section">
        <div class="contact-area d-flex align-items-center">

            <div class="google-map">
                <iframe style="padding-left : 90px" width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=500&amp;hl=en&amp;coord=2.385921, 99.148055&amp;q=Jl.%20P.I.%20Del%2C%20Sitoluama%2C%20Lagu%20Boti%2C%20Kabupaten%20Toba%20Samosir%2C%20Sumatera%20Utara+(Our%20Address)&amp;ie=UTF8&amp;t=&amp;z=13&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0">
                    <a href="https://www.maps.ie/coordinates.html">gps coordinates finder</a>
                </iframe>
            </div>
    
            <div class="contact-info">
                <h2>How to Find Us</h2>
                <p>If you have problems using the web or transaction, you can contact the number below or visit the following place.</p>
    
                <div class="contact-address mt-50">
                    <p><span>address:</span> Jl. P.I. Del, Laguboti, Indonesia</p>
                    <p><span>telephone:</span> +12 3456 7890</p>
                    <p><a href="mailto:contact@essence.com">contact@agricola.com</a></p>
                </div>
            </div>
    
        </div>
    </div>
    
@endsection