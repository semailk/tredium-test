<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <title>Document</title>
</head>
<body>
<main>
    <div class="container">
        <div class="d-flex flex-column flex-md-row align-items-center pb-3 mb-4 border-bottom">
            <a href="/" class="d-flex align-items-center text-dark text-decoration-none">
                <span class="fs-4">Тредиум</span>
            </a>

            <nav class="d-inline-flex mt-2 mt-md-0 ms-md-auto">
                <a class="me-3 py-2 text-dark @if($url != '/') text-decoration-none @endif" href="{{ route('home') }}">На
                    главную</a>
                <a class="py-2 text-dark @if($url != 'articles')  text-decoration-none @endif"
                   href="{{ route('articles.index') }}">Каталог статей</a>
            </nav>
        </div>

        @yield('content')
        <footer>
            <div class="row">
                <div class="col-md-4">
                    <h1>Тредиум</h1>
                    <p>@3001-3020 Все правы защищены</p>
                </div>
                <div class="col-md-4">
                    <h1>Блог</h1>
                    @foreach($articlesSlug as $slug)
                        <a class="text-decoration-none" href="{{ route('articles.show', $slug->slug) }}">{{ $slug->slug }}</a>
                    @endforeach
                </div>
            </div>
        </footer>
    </div>
</main>
</body>
</html>
