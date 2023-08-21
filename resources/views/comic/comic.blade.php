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

        {{-- Info section --}}
        <div class="info">
            <div class="container">


                {{-- Writers & Artists table --}}
                <table>
                    <tr>
                        <th colspan="2" align="left">Talent</th>
                    </tr>
                    <tr>
                        <td class="title">Art by:</td>
                        <td>
                            @foreach ($comic['artists'] as $artist)
                                <a href="#"> {{ $artist }} </a>
                            @endforeach
                        </td>
                    </tr>
                    <tr>
                        <td class="title">Written by:</td>
                        <td>
                            @foreach ($comic['writers'] as $writer)
                                <a href="#"> {{ $writer }} </a>
                            @endforeach
                        </td>
                    </tr>
                </table>

                {{-- Info Table --}}
                <table>
                    <tr>
                        <th colspan="2" align="left">Specs</th>
                    </tr>
                    <tr>
                        <td class="title">Series:</td>
                        <td>{{ $comic['series'] }}</td>
                    </tr>
                    <tr>
                        <td class="title">U.S. Price:</td>
                        <td>{{ $comic['price'] }}</td>
                    </tr>
                    <tr>
                        <td class="title">On Sale Date:</td>
                        <td>{{ $comic['sale_date'] }}</td>
                    </tr>
                </table>

            </div>
        </div>
    @endsection
