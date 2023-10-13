<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HOME</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark text-white">
<nav class="navbar navbar-expand-lg bg-body-secondary" data-bs-theme="dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">Forum</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Переключатель навигации">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarColor01">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Рекомендуемые</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Цена</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">О нас</a>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Поиск" aria-label="Поиск">
                <button class="btn btn-outline-light" type="submit">Поиск</button>
            </form>
        </div>
    </div>
</nav>
{{--<header class="d-flex justify-content-center py-3 bg-dark">--}}
{{--    <ul class="nav nav-pills">--}}
{{--        <li class="nav-item"><a href="/" class="nav-link active " aria-current="page">Home</a></li>--}}
{{--        <li class="nav-item"><a href="/about" class="nav-link">About</a></li>--}}
{{--        <li class="nav-item"><a href="#" class="nav-link">Pricing</a></li>--}}
{{--        <li class="nav-item"><a href="#" class="nav-link">FAQs</a></li>--}}
{{--        <li class="nav-item"><a href="#" class="nav-link">About</a></li>--}}
{{--    </ul>--}}
{{--</header>--}}
<div class="container">
    @yield('main_content')
</div>

</body>
</html>
