    <!-- Cards injected -->
    @foreach ($comics as $index => $comic)
        <div class="col single-card">

            {{--  Send GET array position --}}
            <a href="{{ url("comic/$index") }}"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['type'] }}"></a>
            <p>{{ $comic['title'] }}</p>
        </div>
    @endforeach
