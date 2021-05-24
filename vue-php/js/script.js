// oggetto vue #root
var app = new Vue(
    {
        el: "#root",
        data: {
            // filtro genere
            genereSelected: "",

            // array dischi
            disks: [],

            // array generi
            genres: []
        },

        // funzioni
        methods: {

            // funzione per ottenere l'array dei dischi e generi tramite chiamata API
            getDisksAndGenres() {

                // chiamata api per json array dischi
                axios
                .get("http://localhost:8888/php-ajax-dischi/vue-php/server.php", {
                    params: {
                        genre: this.genereSelected
                    }
                })
                .then((response) => {

                    // array dei dischi = array risposta api
                    this.disks = response.data;

                    // ciclo forEach per ciclare i disks ed ottenere i genrei
                    response.data.forEach(diskObj => {

                        // pusho i generi dei disks (se non già presenti)
                        if (!this.genres.includes(diskObj.genre)) {

                            this.genres.push(diskObj.genre);

                        }
                    })
                });
            }
        },

        mounted() {

            // richiamo la funzione getDisks in mounted
            this.getDisksAndGenres();
        }
    }
);