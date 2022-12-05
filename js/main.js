const { createApp } = Vue;

createApp({

    data(){
        return{
            apiUrl:'server.php',
            albums:[],
            title:'',
            prova:[]
        }
    },
    methods:{
        getAlbums(){
            axios.get(this.apiUrl)
            .then(result => {
                console.log(result.data); 

                this.albums = result.data;
            })
        },
        addAlbum(){
            const data = {
                albumTitle: this.title
            }
            axios.post(this.apiUrl, data, 
                {
                    headers: {'Content-Type': 'multipart/form-data'}
                })
            .then(result => {
                this.prova = result.data;
                console.log('questo',this.prova); 
            })
        }
    },
    mounted(){
        this.getAlbums();
    }
}).mount('#app');