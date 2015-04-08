<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css">
</head>
<body>
    @include('flash::message')
    <div class="container">
        @yield('content')
    </div>
</body>

<script src="//code.jquery.com/jquery.js"></script>
<script src="//maxcdn.bootstrap.cdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<script>
    @include('scripts.flash')
</script>

</html>