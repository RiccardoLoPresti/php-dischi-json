const { createApp } = Vue;

createApp({

    data(){
        return{
            apiUrl:'server.php',
            isClicked:false,
            addNewShow:true,
            albums:[],
            singleAlbum:[],
            title:'',
            author:'',
            year:'',
            poster:'',
            genre:''
        }
    },
    methods:{
        getAlbums(){
            axios.get(this.apiUrl)
            .then(result => {
                this.albums = result.data;
            })
        },
        addAlbum(){
            const data = new FormData();
            data.append('albumTitle',this.title);
            data.append('albumAuthor',this.author);
            data.append('albumYear',this.year);
            data.append('albumPoster',this.poster);
            data.append('albumGenre',this.genre);
            axios.post(this.apiUrl, data)
            .then(result => {
                this.title = '';
                this.author = '';
                this.year = '';
                this.poster = '';
                this.genre = '';
                this.albums = result.data;
            })
        },
        moreInfo(index){
            axios.get(this.apiUrl)
            .then(result => {
                this.singleAlbum = result.data[index];
                console.log(this.singleAlbum);
            })
        },
        addAlbumToggle(){
            this.addNewShow = !this.addNewShow;
        }
    },
    mounted(){
        this.getAlbums();
    }
}).mount('#app');