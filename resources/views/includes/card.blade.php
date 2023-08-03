    <!-- Cards injected -->

    @foreach ($comics as $comic)
        <div class="col single-card">
            <img src="{{ $comic['thumb'] }}" alt="{{ $comic['type'] }}">
            <p>{{ $comic['title'] }}</p>
        </div>
    @endforeach
