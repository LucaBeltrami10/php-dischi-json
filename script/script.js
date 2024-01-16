const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            albumArray: [],

        }
    },

    methods: {
        getApiList() {
            axios.get(this.apiUrl).then((response) => {
                this.albumArray = response.data.albums;

                console.log(response.data.albums);
            });
        },


    },

    created() {
        this.getApiList();
    }

}).mount('#app')