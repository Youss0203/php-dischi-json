<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>

    <link rel="stylesheet" href="./style/style.css">
</head>
<body>

<div id="app">

    <div class="container"> 
      <h1>Playlist</h1>
        <div class="my_flex" >
            <div class="card w-100"  v-for="(disco, index) in discoList">
                <img src="" class="card-img-top" alt="foto canzone">
                <div class="card-body">
                  <h5 class="card-title"> {{ disco.title }}</h5>
                  <p class="card-text"> {{ disco.author }} </p>
                  <p class="card-text"> {{ disco.year}} </p>
                </div>
            </div>
        </div>
      </div>
</div>

<script src="./js/script.js"></script>



<script src="./js/script.js"></script>
</body>
</html>