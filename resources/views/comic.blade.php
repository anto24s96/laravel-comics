<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    @include('partials/header')
    @include('/partials/hero')
    <main>
        <div class="bg-dark py-5">
            <main class="container d-flex flex-column">
                <div class="row py-3">
                    @foreach ($comics as $covers)
                        <div class="col-2 pb-3">
                            <div class="card border-0">
                                <div class="cover_container">
                                    <img src="{{ $covers['thumb'] }}" class="card-img-top" alt="covers">
                                </div>
                                <div class="card-body bg-dark text-white">
                                    <h5 class="card-title text-center text-uppercase fw-bolder">
                                        {{ $covers['series'] }}
                                    </h5>
                                    <p class="card-text"></p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <div class="row">
                    <div class="col-12 text-center">
                        <div class="button_container">
                            <span class="load_button text-white">LOAD MORE</span>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        @include('partials.submain')
    </main>
    @include('partials.footer')
</body>

</html>
