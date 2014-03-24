<!doctype html>
<html lang="en">
<head>
	<!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <title>Laravel Blog</title>
    <style >
	    body{
	       background-image: url('/img/stardust.png');
	       color: #000;
	    }
    </style>
    @yield('topscript')
</head>
<body>
    @yield('content')

    @yield('bottomscript')
</body>
</html>