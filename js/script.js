const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: './server.php',
            songList : [],
        }
    },

    methods: {
        getPlayList(){
            axios.get(this.apiUrl).then((response) =>{
                this.songList = response.data;

                console.log(response.data);
            });
        }
    },

    created(){
        this.getPlayList();
    }

}).mount('#app') 