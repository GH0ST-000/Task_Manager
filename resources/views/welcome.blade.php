<!doctype html>
<html lang="en">
<head>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Board</title>
    <link rel="icon" href="https://stackoverflow.design/assets/img/logos/se/se-icon.svg" type="image/x-icon" />
    <link rel="shortcut icon" href="https://stackoverflow.design/assets/img/logos/se/se-icon.svg" type="image/x-icon" />
</head>
<body>
<div class="w-screen flex">
    <header class="px-6 border-b-2 w-full">
        <div class="flex justify-between items-center">
            <img class="mt-2 ml-3 w-16 h-16"
                 src="https://stackoverflow.design/assets/img/logos/se/se-icon.svg"
                 alt="Not Found">
            <div class="flex justify-between">
                <a href="/login" class="text-blue-900 font-semibold text-lg ml-4 rounded-md modal-open" >Log in</a>
                <a  href="/singup" class="text-white bg-blue-700 rounded-md font-semibold text-lg ml-4 modal-opens"> Sign Up </a>
            </div>
        </div>
    </header>
</div>
<div class="flex justify-between items-center">
    <div class="absolute top-44 ml-36">
        <h1 class="font-medium text-gray-600 " style="font-size: 40px;">Trello helps teams move work forward.</h1>
        <p class="ml-1 mt-3">Collaborate, manage projects, and reach new productivity peaks.<br>
            From high rises to the home office, the way your team works is<br> unique—accomplish
            it all with Trello.
        </p>
    </div>
    <div class="ml-32 mt-64">
        <input type="email" placeholder=" Email Adress"
               class="inset-y-2 text-sm ml-4 border-gray-800 border rounded-md w-64 h-10 placeholder-gray-900">
        <button class="border rounded-md h-10 text-white bg-blue-700 w-44">Sing-Up It's Free!</button>
    </div>
    <div class="mt-12" style="margin-right: 5%">
        <img class="flex justify-between" style="height:500px;"
             src="https://d2k1ftgv7pobq7.cloudfront.net/meta/p/res/images/spirit/hero/6a3ccd8e5c9a0e8ebea4235d12da6b24/hero.png">
    </div>
</div>
</body>
</html>


