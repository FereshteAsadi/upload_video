<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ URL::asset('css/singup.css') }}" type="text/css">

    <title>Document</title>
</head>
<body>
    <header>
        @include('home');

    </header>
    <div class="container">
        <p class="heading"> Sing up  </p>
        <form action="">
            <div class="box">
                <p> username </p>
                <div>
                    <input type="email" name=" " id="" placeholder="Enter Your username">
                </div>
            </div>
            <div class="box">
                <p> phone number </p>
                <div>
                    <input type="email" name=" " id="" placeholder="Enter Your phone number ">
                </div>
            </div>
            <div class="box">
                <p> Email </p>
                <div>
                    <input type="email" name=" " id="" placeholder="Enter Your Email">
                </div>
            </div>
            <div class="box">
                <p>Password</p>
                <div>
                    <input type="password" name="" id="" placeholder="Enter Your Password">
                </div>
            </div>
            <!-- <input type="button" value="login" class="loginBtn"> -->
             <button class="loginBtn">login</button>
            <p class="text">Do Have an account? <a href="login.html">Login </a></p>
        </form>
    </div>
</body>
</html>
