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

    </main>
    <footer>

    </footer>
</body>
</html>