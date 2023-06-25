<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        @vite ('resources/js/app.js')
</head>
<body>
    <header>
        <div class="sub_cont">
            <nav>
                <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="logo">
                <ul>
                    <li>CHARACTCERS</li>
                    <li>COMICS</li>
                    <li>MOVIE</li>
                    <li>GAMES</li>
                    <li>COLLECTIBLES</li>
                    <li>VIDEO</li>
                    <li>FANS</li>
                    <li>NEWS</li>
                    <li>SHOP</li>
                </ul>
                <input type="text">
            </nav>
        </div>
        <img class="jumbo" src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="">
    </header>
    <main>
        <div class="sub_cont">
            <div class="card_cont">
                <div class="card">
                    <img src="" alt="card-img">
                    <h4></h4>
                </div>
                <div class="card">
                    <img src="" alt="card-img">
                    <h4></h4>
                </div>
                <div class="card">
                    <img src="" alt="card-img">
                    <h4></h4>
                </div>
                <div class="card">
                    <img src="" alt="card-img">
                    <h4></h4>
                </div>
                <div class="card">
                    <img src="" alt="card-img">
                    <h4></h4>
                </div>
                <div class="card">
                    <img src="" alt="card-img">
                    <h4></h4>
                </div>
                <div class="card">
                    <img src="" alt="card-img">
                    <h4></h4>
                </div>
            </div>
            <button>LOAD MORE</button>
        </div>
    </main>
    <footer>
        <div class="top-foot">
            <div class="max-w">
                <div class="features-ft"
                v-for="obj in ftarr" 
                >
                    <img src="" alt="">
                    <span>titlte</span>
                </div>
            </div>
        </div>
        <div class="main-foot">
            <div class="max-w">
                <div class="sub-cont">
                    <div >
                        <ul>
                            <li>DC COMICS</li>
                            <li>Comics</li>
                            <li>Comics</li>
                            <li>Comics</li>
                            <li>Comics</li>
                            <li>Comics</li>
                            <li>Comics</li>
                        </ul>
                        <ul>
                            <li>DC COMICS</li>
                            <li>Comics</li>
                            <li>Comics</li>
                        </ul>
                    </div>
                    <div >
                        <ul>
                            <li>DC COMICS</li>
                            <li>Comics</li>
                            <li>Comics</li>
                            <li>Comics</li>
                            <li>Comics</li>
                            <li>Comics</li>
                            <li>Comics</li>
                            <li>Comics</li>
                            <li>Comics</li>
                        </ul>
                    </div>
                    <div >
                        <ul>
                            <li>DC COMICS</li>
                            <li>Comics</li>
                            <li>Comics</li>
                            <li>Comics</li>
                            <li>Comics</li>
                        </ul>
                    </div>
                </div>
                <img src="{{ Vite::asset('resources/img/dc-logo-bg.png') }}" alt="">
            </div>
        </div>
        <div class="bottom-foot">
            <div class="max-w"></div>
        </div>
    </footer>
</body>
</html>