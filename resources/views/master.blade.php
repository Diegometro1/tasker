<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link href='/css/tasks.css' type='text/css' rel='stylesheet'>
    <title>Chores</title>
</head>
<body>



@if (Session::has('success'))


    <div class="alert alert-success" role="alert">

    {{ Session::get('success') }}

    </div>
    @endif


<div class="flex-center position-ref full-height">


    <div class="content">
        <div class="title m-b-md">

          @yield('content')

        </div>

    </div>
</div>



<footer>
    <div class="footer">
        <p>Only for personal and CSCIE use use &copy; {{ date('Y') }} </p>
    </div>
</footer>



</body>
</html>