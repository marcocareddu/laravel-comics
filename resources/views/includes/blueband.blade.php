    <!-- Blue band Section -->
    <div class="blue-section">
        <section class="container">
            <ul>

                @foreach ($bluemenu as $item)
                    <li>
                        <a href="#"><img src="{{ Vite::asset('resources/img/' . $item['picture']) }}"
                                alt="{{ $item['text'] }}"><span>{{ $item['text'] }}</span></a>
                    </li>
                @endforeach
            </ul>
        </section>
    </div>
