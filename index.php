<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.27.2/axios.min.js" integrity="sha512-odNmoc1XJy5x1TMVMdC7EMs3IVdItLPlCeL5vSUPN2llYKMJ2eByTTAIiiuqLg+GdNr9hF6z81p27DArRFKT7A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- MainScript -->
    <script defer src="./js/main.js"></script>

    <title>PHP Dischi JSON</title>
</head>
<body>
    <div class="wrapper">
        <div id="app">

            <header>

                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col h-100">

                            <div class="logo d-flex align-items-center h-100">
                                <i class="fa-brands fa-spotify"></i>
                                <h1 class="mx-3 text-uppercase fw-bold">Spotify Wrapped</h1>
                            </div>

                        </div>
                    </div>
                </div>

            </header>

            <main>

                <div class="container mt-4 h-100">
                    <div class="row h-100">
                        <div class="col h-100">

                            <div class="card-wrapper d-flex flex-wrap justify-content-center">

                                <div v-for="album,index in albums" :key="index" class="rl-card text-center">
                                    <div class="box-img">
                                        <img :src="album.poster" alt="poster">
                                    </div>
                                    <div class="text">
                                        <h3>{{album.title}}</h3>
                                        <p>{{album.author}}</p>
                                        <h3>{{album.year}}</h3>
                                    </div>
                                </div>
                                
                                
                        </div>
                    </div>

                    <div class="add-section p-4 mt-5">
                        <h2 class="text-uppercase fw-bold">Aggiungi un nuovo album:</h2>
                        <div class="row rl-row">

                            <div class="col-12 mt-4">
                                <div class="input-group">
                                    <label for="title" class="form-label col-12">Titolo Album</label>
                                    <input v-model="title" type="text" class="form-control" id="title" placeholder="Inserisci il titolo dell'album...">
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="input-group">
                                    <label for="exampleFormControlInput1" class="form-label col-12">Artista</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci l'artista...">
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="input-group">
                                    <label for="exampleFormControlInput1" class="form-label col-12">Anno</label>
                                    <input type="number" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci l'anno...">
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="input-group">
                                    <label for="exampleFormControlInput1" class="form-label col-12">URL immagine</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci l'url dell'immagine...">
                                </div>
                            </div>
                            <div class="col-12 mt-4">
                                <div class="input-group">
                                    <label for="exampleFormControlInput1" class="form-label col-12">Genere</label>
                                    <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Inserisci il genere...">
                                </div>
                            </div>
                    
                            <div class="col-1 mt-4">
                                <button @click="addAlbum()" class="btn btn-outline-warning" type="button" id="button-add">Inserisci</button>
                            </div>
                        </div>
                    </div>
                </div>

            </main>
            
        </div>
    </div>
    
    
</body>
</html>