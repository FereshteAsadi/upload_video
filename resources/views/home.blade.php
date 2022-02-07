<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=o, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/home.css') }}">
    <title>Document</title>
</head>
<body>
    <header>
        <div class="conteinerheader">
            <div class="tabs">
                <input type="radio" id="radio1" name="tabs">
                 <label for="radio1" class="tab"><a href="{{ url('/home') }}">home</a> </label>
                <input type="radio" id="radio2" name="tabs">
                <label for="radio2" class="tab" ><a href="{{ url('/login') }}">login</a></label>
                <input type="radio" id="radio3" name="tabs">
                <label for="radio3" class="tab"><a href="{{ url('/singup') }}">singup</a></label>
                <input type="radio" id="radio4" name="tabs">
                <label for="radio4" class="tab"><a href="checkvideo.html">video</a></label>
                <span class="glider"></span>
            </div>
        </div>
    </header>
</body>
</html>
