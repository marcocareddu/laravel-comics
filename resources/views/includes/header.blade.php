<header>
    <div class="container">

        <!-- Logo -->
        <div class="logo">
            <a href="{{ route('home') }}"><img class="img-fluid" src="{{ Vite::asset('resources/img/dc-logo.png') }}"
                    alt="Logo DC Comics"></a>
        </div>

        <!-- Navbar -->
        <nav>
            <ul>

                {{-- Foreach HERE --}}
                @foreach ($navelements as $element)
                    <li><a href="{{ $element['url'] }}"> {{ $element['text'] }} </a></li>
                @endforeach
            </ul>
        </nav>

    </div>
</header>
