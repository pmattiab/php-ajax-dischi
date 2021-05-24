<!-- INIZIO MAIN -->
<main>

    <!-- inizio select generi -->
    <div>
        <label for="genre_select">Selezione genere</label>
        <select id="genre_select" v-model="genereSelected" @change="getDisksAndGenres()">
            <option value="">All</option>
            <option v-for="genre in genres" :value="genre">{{genre}}</option>
        </select>
    </div>
    <!-- fine select generi -->

    <!-- inizio contenitore lista dischi -->
    <div class="disk_container">

        <!-- inizio singolo disco -->
        <div v-for="disk in disks" @change="getDisksAndGenres()" class="single_disk">

            <img :src="disk.poster" :alt="disk.title">
            <div class="title">{{disk.title}}</div>
            <div class="author">{{disk.author}}</div>
            <div class="year">{{disk.year}}</div>

        </div>
        <!-- fine singolo disco -->

    </div>
    <!-- fine contenitore lista dischi -->

</main>
<!-- FINE MAIN -->