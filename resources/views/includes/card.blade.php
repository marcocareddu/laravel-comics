    <!-- Cards injected -->

    @foreach ($comics as $key => $comic)
        <div class="col single-card">

            {{--  Send GET array position --}}
            <a href="{{ route('comic') . '?comic_name=' . $key }}"><img src="{{ $comic['thumb'] }}"
                    alt="{{ $comic['type'] }}"></a>
            <p>{{ $comic['title'] }}</p>
        </div>
    @endforeach
