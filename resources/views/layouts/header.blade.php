<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{ asset('css/modal.css') }}">
    <link rel="stylesheet" href="{{ asset('css/miadreams.css')}}">
    <link rel="stylesheet" href="{{ asset('css/mprew.css')}}">
    <link rel="stylesheet" href="{{ asset('css/fashionprogram.css')}}">
    <link rel="stylesheet" href="{{ asset('css/impact.css')}}">

    <link rel="stylesheet" href="{{ asset('css/personal-branding.css') }}">
    <title>Accueil</title>

    <title>MIA DREAMS & CO</title>
</head>

<body>
    <section id="">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container-fluid">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>

                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mx-auto fw-bold">
                        <li class="ligne nav-item  mx-4">
                            <a class="nav-link active" aria-current="page" href={{ route('index') }}>HOME</a>
                        </li>
                        <li class="ligne nav-item dropdown mx-4 ">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                NOS MARQUES
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li><a class="dropdown-item" href={{ route('miaDreams') }}>MIA DREAMS</a></li>
                                <li><a class="dropdown-item" href="{{ route('mprew') }}">MA PETITE ROBE EN WAX</a></li>
                                <li><a class="dropdown-item" href="{{ route('personalBranding') }}">PERSONAL
                                        BRANDING</a></li>
                                <li><a class="dropdown-item" href={{ route('fashionProgram') }}>FASHION PROGRAMME</a>
                            </ul>

                        </li>
                        <li class="nav-item d-none d-md-none d-lg-block">
                            <a class="nav-link img-layout" href={{ route('index') }}>
                                <img src="{{ asset('img/logo_MIA.png') }}" class="logo img-fluid " alt="logo">
                            </a>
                        </li>
                        <li class="ligne nav-item dropdown mx-4 ">
                            <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button"
                                data-bs-toggle="dropdown" aria-expanded="false">
                                JOURNAL
                            </a>
                            <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <li class=""><a class="dropdown-item" href="{{ route('apropos') }}">A PROPOS</a>
                                </li>
                                <li><a class="dropdown-item" href="">BLOG</a></li>
                            </ul>

                        </li>
                        <li class="ligne nav-item mx-4">
                            <a class="nav-link" href={{ route('impact') }}>IMPACT</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </section>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
