<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php-dischi-json</title>
    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <!-- vue -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- axios -->
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>

<body>

    <div id="app">
        <div class="container p-5">
            <div class="row">
                <div v-for="album in albumArray" class="col-4">
                    <div class="card mb-3" style="width: 18rem;">
                        <img :src="`./img/${album.cover_image}`" class="card-img-top" alt="...">
                        <div class="card-body text-center">
                            <p class="card-text fw-bold">{{album.album_name}}</p>
                            <p class="card-text fw-bold">{{album.artist_name}}</p>
                            <p class="card-text">{{album.release_year}}</p>
                        </div>
                    </div>
                </div>

            </div>
        </div>


    </div>

    <script src="./script/script.js"></script>
</body>

</html>