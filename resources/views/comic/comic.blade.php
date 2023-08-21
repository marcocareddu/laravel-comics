@php
    // GET comic position from home page
    $comic_position = $_GET['comic_name'];
    
    // Return comic_position of array
    $comic = $comics[$comic_position];
@endphp

@extends('layouts.index')

@section('main-content')
    <div class="main-content">

        <!-- Jumbotron -->
        <div class="jumbotron"></div>

        {{-- Blue string --}}
        <div class="separation">
            <div class="container">
                {{-- <img src="{{ $comic['thumb'] }}" alt=""> --}}
            </div>
        </div>


        <div class="comic-section container">
            <div class="comic-content">
                <h1>{{ $comic['title'] }}</h1>
                <div class="green-band">
                    <div class="price">U.S. Price <span>{{ $comic['price'] }}</span></div>
                    <div class="price">AVAILABLE</div>
                </div>
                <p>{{ $comic['description'] }}</p>
            </div>

            {{-- ADV Section --}}
            <div>
                <div class="adv">
                    <h3>ADVERTISEMENT</h3>
                    <img src=" {{ Vite::asset('resources/img/adv.jpg') }} " alt="">
                </div>
            </div>
        </div>
    @endsection
