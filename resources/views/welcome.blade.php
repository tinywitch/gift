<!DOCTYPE html>
<!--[if lt IE 9]><script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" >
    <title>sPhoton brings the Boys out</title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <link href='https://fonts.googleapis.com/css?family=Great+Vibes&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
    <link href="/css/animate.css" rel="stylesheet">
    <link href="/css/style.css" rel="stylesheet">
    <link href="/css/theme6.css" rel="stylesheet">
    <link rel="shortcut icon" href="/images/favicon.png">
</head>
<body class="dark">
<div class="stars"></div>
<div class="twinkling"></div>
<!--wrapper-->
<div class="">
    <!--header-->
    <header class="head">
        <!--logo-->
        <div class="logo"><a href="https://sphoton.com" title="sPhoton Greetings">
                <img src="/images/logo.svg" width="200" alt="sPhoton Greetings" /></a></div>
        <!--//logo-->
    </header>
    <!--//header-->

    <!--main-->
    <main class="main">
        <div class="text">
            <h1 data-in-effect="fadeIn">{{ $content }}</h1>
        </div>
    </main>
    <div class="rocket">
        <img src="/images/bgr/rocket.svg" width="50%">
    </div>
    <!--//main-->
</div>
<!--//wrapper-->


<script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
<script src="/js/jquery.lettering.js"></script>
<script src="/js/jquery.textillate.js"></script>
<script src="/js/scripts.js"></script>
<script>
    $(function () {
        $('.text h1').textillate();
    })
</script>
</body>
