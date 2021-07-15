<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
         <style>
*{
    margin:0;
    padding:0;
} 

.area {
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: url('https://p4.wallpaperbetter.com/wallpaper/981/674/477/earth-neon-black-background-world-map-hd-wallpaper-preview.jpg');
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    z-index: 2;
    background-size: cover;
    background-position:center
}

h5 {
    font-family: 'Nunito';
    font-size: 30px;
    font-weight: 700;
    color: #fff;
}

p {
    font-family: 'Nunito';
    font-weight: 600;
    color: #fff;
    margin-bottom: 20px;
}

a {
    display: block;
    width: max-content;
    margin: auto;
    padding: 10px 30px;
    text-decoration: none;
    font-family: 'Nunito';
    background: #fff;
    border-radius: 3px;
    font-weight: 700;
    color: #000;
    transition: .3s;
}

a:hover {
    background: #252327;
    color: #fff;
}

.area:after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    background: #121729;
    opacity: .3;
    top: 0;
    left: 0;
    z-index: -1;
}
        </style>
    </head>
    <body>
        

        <div class="area">
            <div class="alltheContents">
                <h5>Hey! welcome you</h5>
                <p>This is a map poster making application if you want then you could try it</p>
                <a href="/editor">Create</a>
            </div>
        </div>

    </body>
</html>
