    <!-- Cards injected -->

    @foreach ($comics as $comic)
        <div class="col single-card">

            {{-- !TODO send GET comic name --}}
            <form action="">
                <a href="{{ route('comic') }}"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['type'] }}"></a>
                <p>{{ $comic['title'] }}</p>
            </form>
        </div>
    @endforeach
