<!DOCTYPE html>
<html>
<head>
    <title>
        @yield("title", "Project 4")
    </title>

    <meta charset='utf-8'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
    <link href="css/index.css" type='text/css' rel='stylesheet'>
    @yield('head')
</head>

<body>
    <header>
        <img
        src='images/banner.JPG' id='logo' alt='Logo'>
        @yield('header')
    </header>

    <section>
        @yield('content')
    </section>
    <br><br>
    {{ Html::link('/', 'Home', array('id'=>'home_button'))}}
    <footer>
        <p>&copy; Caito {{ date('Y') }}</p>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
</body>
</html>