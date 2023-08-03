<footer>

    <!-- Upper Footer -->
    <div class="upper-foot container">

        <!-- Menu link -->

        {{-- !TODO Foreach HERE --}}
        <div>

            {{-- !TODO Foreach HERE --}}
            <div>

                {{-- !TODO Dynamic title --}}
                <h1>item.title</h1>
                <ul>

                    {{-- !TODO Dynamic name --}}
                    <li><a href="#">link . name</a></li>
                </ul>
            </div>
        </div>

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
