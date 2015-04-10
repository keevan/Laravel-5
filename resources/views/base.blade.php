<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Learning Laravel</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    @include('navigation.nav')

    @include('flash::message')
    <div class="container">
        @yield('content')
    </div>
</body>


<!-- Scripts -->
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.1/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery.js"></script>

@include('scripts.flash')


</html>