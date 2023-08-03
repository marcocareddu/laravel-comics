    <!-- Blue band Section -->
    <div class="blue-section">
        <section class="container">
            <ul>

                <li v-for="item in blueMenu" :key="item.text">
                    <a href="#"><img :src="createImgUrl(item.picture)"
                            alt="item.text"><span>{{ item . text }}</span></a>
                </li>
            </ul>
        </section>
    </div>
