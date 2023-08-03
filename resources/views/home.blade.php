@extends('layouts.index')

@section('main-content')
    <div class="main-content">

        <!-- Jumbotron -->
        <div class="jumbotron"></div>

        <!-- Main content -->
        <section class="container">
            <div class="row">

                {{-- !TODO Card HERE --}}
                @include('includes.card')

            </div>
            <div class="btn-container">
                <button>LOAD MORE</button>
            </div>
        </section>
    </div>
@endsection
