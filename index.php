<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>PHP Dischi Json</title>
</head>
<body>
    
    <div id="app">
        <div id="web-app">
            <header>
            </header>
            <main>
                <div class="overlay">
                    <button class="btn border rounded" @click="closeOverlay()">X</button>
                    <li class="text-center mb-3 p-2 text-white">
                        <div id="overlay-img"><img :src="this.currentDisco.poster" alt=""></div>
                        <div class="text-bold">{{ this.currentDisco.title }}</div>
                        <div class="text-bold">{{ this.currentDisco.author }}</div>
                        <div>{{ this.currentDisco.year }} , {{ this.currentDisco.genre }}</div>
                    </li>
                </div>
                <div class="container d-flex justify-content-center align-items-center">
                    <ul class="d-flex flex-wrap justify-content-between">
                        <li v-for="(elem, index) in data" :key=index class="card text-center mb-3 p-2 text-white" @click="overlayDisco(data[index])">
                            <div id="div-img"><img :src="elem.poster" alt=""></div>
                            <div class="text-bold">{{ elem.title }}</div>
                            <div class="text-bold">{{ elem.author }}</div>
                            <div>{{ elem.year }} , {{ elem.genre }}</div>
                        </li>
                    </ul>
                </div>
            </main>
            <footer>  
            </footer> 
        </div>
        
    </div>

    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="main.js"></script>
</body>
</html>