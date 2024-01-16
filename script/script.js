const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: 'server.php',
            diskArray: [],

        }
    },

    methods: {
        /* getApiList() {
            axios.get(this.apiUrl).then((response) => {
                this.diskArray = response.data;

                console.log(response.data);
            });
        }, */


    },

    created() {
        /* this.getApiList(); */
    }

}).mount('#app')