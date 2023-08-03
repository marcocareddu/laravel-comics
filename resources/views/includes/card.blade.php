    <!-- Cards injected -->

    @foreach ($comics as $comic)
        <div class="col single-card">
            <a href="#"><img src="{{ $comic['thumb'] }}" alt="{{ $comic['type'] }}"></a>
            <p>{{ $comic['title'] }}</p>
        </div>
    @endforeach
