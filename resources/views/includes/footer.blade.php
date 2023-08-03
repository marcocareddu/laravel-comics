<footer>

    <!-- Upper Footer -->
    <div class="upper-foot container">

        <!-- Menu link -->
        @foreach ($footermenu as $element)
            <div>
                @foreach ($element as $item)
                    <div>
                        <h1>{{ $item['title'] }}</h1>
                        <ul>
                            @foreach ($item['link'] as $link)
                                <li><a href="#">{{ $link['name'] }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        @endforeach

        <div class="big-logo">
        </div>
    </div>


    <!-- Lower Footer -->
    <div class="lower-foot">
        <div class="container">

            <!-- Sign-up -->
            <div>
                <button>SIGN-UP NOW!</button>
            </div>

            <!-- Social -->
            <div class="social-menu">
                <div class="signup">FOLLOW US</div>
                <div class="social-icons">

                    {{-- !TODO Foreach HERE --}}
                    <ul>
                        <li><a href="#"><img :src="social.picture" :alt="social.text"></a></li>
                    </ul>
                </div>
            </div>
        </div>

    </div>
</footer>
