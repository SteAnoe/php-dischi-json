const { createApp } = Vue

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            data: '',
            currentDisco: 0,
        }
    },
    methods: {
        chiamataApi(){
            axios.get(this.apiUrl)
                .then( (res) => {
                    this.data = res.data;
                });
        },
        overlayDisco(index){
            this.currentDisco = index
        },
    },
    mounted(){
        this.chiamataApi();
    }
}).mount('#app')