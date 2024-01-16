<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <link rel="stylesheet" href="./style/style.css">
</head>
<body>

<div id="app">

<div class="container">
    <h1 class="text-center">Playlist</h1>
                <div class="row">
                    <div class="d-flex my_container">
                        <div class="card mb-2 mt-2 p-3 d-flex col-3 me-3"  v-for="(song, index) in songList">
                            <img :src= song.poster class="card-img-top" alt="">
                            <div class=" mt-3 text-center">
                              <h5> {{ song.title }}</h5>
                              <p> {{ song.author }} </p>
                              <p> {{ song.year }} </p>
                              
                            </div>
                        </div>
                    </div>
                </div>
            </div>
</div>

<script src="./js/script.js"></script>



<script src="./js/script.js"></script>
</body>
</html>