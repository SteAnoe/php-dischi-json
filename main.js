const { createApp } = Vue

createApp({
    data(){
        return{
            apiUrl: 'server.php',
            data: '',
            currentDisco: '',
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
            document.querySelector('.overlay').classList.add('active')
        },
        closeOverlay(){
            document.querySelector('.overlay').classList.remove('active')
        }
    },
    mounted(){
        this.chiamataApi();
    }
}).mount('#app')