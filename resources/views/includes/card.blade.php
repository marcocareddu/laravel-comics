    <!-- Cards injected -->
    <div v-for="comic in dcComics" class="col blueband">
        <img :src="comic.thumb" :alt="comic.type">
        <p>{{ comic . series }}</p>
    </div>
