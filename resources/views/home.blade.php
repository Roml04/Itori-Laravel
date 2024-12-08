<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>

    <link rel="stylesheet" href="{{asset('css/global.css')}}">
    <link rel="stylesheet" href="{{asset('css/home.css')}}">
</head>
<body>

    {{-- HEADER --}}
    <x-header />

    {{-- BANNER --}}
    <section class="banner-section">
        <img class="banner-img" src="{{ asset('images/bn-coffee-img.jpg') }}" alt="">
        <div class="banner-container">
            <div class="headline-subheadline-container">
                <p class="headline">Itori</p>
                <p class="subheadline">“Where Every Sip Tells a Story”</p>
            </div>
            <hr>
            <p>Welcome to Itori, where every cup of coffee tells a story. Immerse yourself in the rich aromas and cozy ambiance of our shop, your new favorite spot to relax and unwind.</p>
            <x-button class="button"><p class="button-font">Order Now</p></x-button>
        </div>
    </section>

    {{-- FEATURED PRODUCTS --}}
    <section class="featured-sections">
        
    </section>

    {{-- GALLERY --}}
    <section class="gallery-section">

    </section>

    {{-- REVIEWS --}}
    <section class="reviews-section">

    </section>

    {{-- FOOTER --}}
    <x-footer />

</body>
</html>