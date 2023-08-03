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

        <div class="container comic-content">
            <h1>{{ $comic['title'] }}</h1>
            <div>
                <div class="price">U.S. Price {{ $comic['price'] }}</div>
                <div>AVAILABLE</div>
            </div>
            <p>{{ $comic['description'] }}</p>


            </section>
        </div>
    @endsection
