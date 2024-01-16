const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl: './server.php',
            discoList : [],
        }
    },

    methods: {
        getDiscoList(){
            axios.get(this.apiUrl).then((response) =>{
                this.discoList = response.data;

                console.log(response.data);
            });
        }
    },

    created(){
        this.getDiscoList();
    }

}).mount('#app') 