<!DOCTYPE html>
<html lang="fr" data-bs-theme="dark">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title') | Larahikes </title>
    @vite(['resources/css/bootstrap.min.css', 'resources/js/bootstrap.bundle.min.js', 'resources/js/color-modes.js'])
    <link href="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/css/tom-select.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/tom-select@2.2.2/dist/js/tom-select.complete.min.js"></script>
    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }

        .b-example-divider {
            width: 100%;
            height: 3rem;
            background-color: rgba(0, 0, 0, .1);
            border: solid rgba(0, 0, 0, .15);
            border-width: 1px 0;
            box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
        }

        .b-example-vr {
            flex-shrink: 0;
            width: 1.5rem;
            height: 100vh;
        }

        .bi {
            vertical-align: -.125em;
            fill: currentColor;
        }

        .nav-scroller {
            position: relative;
            z-index: 2;
            height: 2.75rem;
            overflow-y: hidden;
        }

        .nav-scroller .nav {
            display: flex;
            flex-wrap: nowrap;
            padding-bottom: 1rem;
            margin-top: -1px;
            overflow-x: auto;
            text-align: center;
            white-space: nowrap;
            -webkit-overflow-scrolling: touch;
        }

        .btn-bd-primary {
            --bd-violet-bg: #712cf9;
            --bd-violet-rgb: 112.520718, 44.062154, 249.437846;

            --bs-btn-font-weight: 600;
            --bs-btn-color: var(--bs-white);
            --bs-btn-bg: var(--bd-violet-bg);
            --bs-btn-border-color: var(--bd-violet-bg);
            --bs-btn-hover-color: var(--bs-white);
            --bs-btn-hover-bg: #6528e0;
            --bs-btn-hover-border-color: #6528e0;
            --bs-btn-focus-shadow-rgb: var(--bd-violet-rgb);
            --bs-btn-active-color: var(--bs-btn-hover-color);
            --bs-btn-active-bg: #5a23c8;
            --bs-btn-active-border-color: #5a23c8;
        }

        .bd-mode-toggle {
            z-index: 1500;
        }

        .bd-mode-toggle .dropdown-menu .active .bi {
            display: block !important;
        }

        .bg-image {
            background-image: url('../resources/images/home-background.jpg');
            background-size: cover;
            background-position: center;

        }

        .mask {
            background-color: rgba(0, 0, 0, 0.6);

        }

        .scroll-top {
            display: grid;
            place-items: center;
            width: 40px;
            height: 40px;
            position: fixed;
            right: 15px;
            bottom: 15px;
            border-radius: 4px;
            background-color: rgba(0, 0, 0, .3);
            opacity: 1;
            cursor: pointer;
            z-index: 2;
            transition: opacity .5s, background .3s;
        }

        .scroll-top:hover {
            background-color: var(--main-color);
        }

        .scroll-top svg {
            width: 14px;
            height: 14px
        }

        .scroll-top[hidden] {
            pointer-events: none;
            opacity: 0
        }

        body {
            background-color: #121212;
            /* Couleur de fond pour le mode sombre */
            color: #e0e0e0;
            /* Couleur du texte pour le mode sombre */
            min-height: 100vh;
        }

        .full-page {
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 40px;
            /* Augmentation de la marge intérieure */
            height: calc(100vh - 100px);
            /* Ajustement de la hauteur de la partie principale */
        }

        .hike-image {
            width: 100%;
            height: auto;
            max-width: 600px;
            /* Augmentation supplémentaire de la taille de l'image */
            border-radius: 10px;
            transition: transform 0.3s;
        }


        .hike-image:hover {
            transform: scale(1.05);
        }

        .tag {
            margin-right: 10px;
            margin-bottom: 5px;
            transition: background-color 0.3s;
        }

        .tag:hover {
            background-color: #343a40;
        }

        .back-button {
            margin-bottom: 20px;
            background-color: #1e1e1e;
            color: #e0e0e0;
            transition: background-color 0.3s, transform 0.3s;
        }

        .back-button:hover {
            background-color: #333333;
            transform: scale(1.05);
        }

        .card.detail {
            border: none;
            border-radius: 15px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
            background-color: #1e1e1e;
        }

        .card-body {
            padding: 2rem;
        }

        .card-title {
            font-weight: 700;
        }

        .card-text {
            margin-bottom: 20px;
            /* Ajout d'espace entre la description et les tags */
        }

        @layer demo {
            button {
                all: unset;
            }
        }
    </style>
</head>

<body data-bs-theme="dark">
    @php
        $routeName = request()->route()->getName();
    @endphp
    <svg xmlns="http://www.w3.org/2000/svg" class="d-none">
        <symbol id="check2" viewBox="0 0 16 16">
            <path
                d="M13.854 3.646a.5.5 0 0 1 0 .708l-7 7a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L6.5 10.293l6.646-6.647a.5.5 0 0 1 .708 0z" />
        </symbol>
        <symbol id="circle-half" viewBox="0 0 16 16">
            <path d="M8 15A7 7 0 1 0 8 1v14zm0 1A8 8 0 1 1 8 0a8 8 0 0 1 0 16z" />
        </symbol>
        <symbol id="moon-stars-fill" viewBox="0 0 16 16">
            <path
                d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278z" />
            <path
                d="M10.794 3.148a.217.217 0 0 1 .412 0l.387 1.162c.173.518.579.924 1.097 1.097l1.162.387a.217.217 0 0 1 0 .412l-1.162.387a1.734 1.734 0 0 0-1.097 1.097l-.387 1.162a.217.217 0 0 1-.412 0l-.387-1.162A1.734 1.734 0 0 0 9.31 6.593l-1.162-.387a.217.217 0 0 1 0-.412l1.162-.387a1.734 1.734 0 0 0 1.097-1.097l.387-1.162zM13.863.099a.145.145 0 0 1 .274 0l.258.774c.115.346.386.617.732.732l.774.258a.145.145 0 0 1 0 .274l-.774.258a1.156 1.156 0 0 0-.732.732l-.258.774a.145.145 0 0 1-.274 0l-.258-.774a1.156 1.156 0 0 0-.732-.732l-.774-.258a.145.145 0 0 1 0-.274l.774-.258c.346-.115.617-.386.732-.732L13.863.1z" />
        </symbol>
        <symbol id="sun-fill" viewBox="0 0 16 16">
            <path
                d="M8 12a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
        </symbol>
    </svg>

    <header data-bs-theme="dark">
        <nav class="navbar navbar-dark shadow-sm navbar-expand-lg bg-body-tertiary"
            aria-label="Thirteenth navbar example">
            <div class="container-fluid">
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarsExample11" aria-controls="navbarsExample11" aria-expanded="false"
                    aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse d-lg-flex" id="navbarsExample11">
                    <a class="navbar-brand col-lg-3 me-0" href="{{ url('/') }}">Larahikes</a>
                    <ul class="navbar-nav col-lg-6 justify-content-lg-center">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="{{ route('hike.index') }}">
                                Search Hikes
                            </a>
                        </li>
                    </ul>
                    <div class="d-lg-flex col-lg-3 justify-content-lg-end">
                        {{-- --}}
                        <a href="{{ route('admin.hike.index') }}"><button class="btn btn-primary">Register | Sign
                                in</button></a>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <span class="fill" style="width: 0%;"></span>


    <main>

        @yield('content')

    </main>

    <footer class="text-body-secondary py-5">
        <div class="container">
            <p class="float-end mb-1">
                <!-- <a href="#">Back to top</a> -->
                <scroll-top class="scroll-top" style="display: grid;">
                    <svg width="100%" height="100%" viewBox="0 0 7 5" xmlns="http://www.w3.org/2000/svg"
                        style="stroke-linecap: round; stroke-linejoin: round; stroke-miterlimit: 1.5; fill: none;">
                        <path d="M1,4l2.5,-3l2.5,3" stroke="#FFF" stroke-width="1.4"></path>
                    </svg>
                </scroll-top>
            </p>
        </div>
    </footer>
    <script>
        const scrollToTop = document.querySelector(".scroll-top");
        const scrollfill = document.querySelector(".fill");
        const $rootElement = document.documentElement;
        const $body = document.body;

        window.onscroll = () => {
            // Filling
            // const scrollTop = ($rootElement.scrollTop - $body.scrollTop);
            const scrollTop = window.scrollY || window.pageYOffset;
            const clientHt = $rootElement.scrollHeight - $rootElement.clientHeight;
            scrollfill.style.width = `${Math.floor(
    (scrollTop / clientHt) * 100
  )}%`;

            // ScrollToTop Button
            // if($rootElement.scrollTop > 100 || $body.scrollTop > 100) {
            if (window.scrollY > 100) {
                scrollToTop.style.display = "grid";
            } else {
                scrollToTop.style.display = "none";
            }
        };

        scrollToTop.onclick = () => {
            // $rootElement.scrollTop = $body.scrollTop = 0;
            window.scrollTo(0, 0);
        };
    </script>
    <script>
        // Initialize Tom Select with multiple selections enabled
        let selectElement = document.querySelector('select[multiple]');
        let settings = {
            plugins: ['remove_button'], // Optional: Enable remove button plugin
            // Add any other settings you need
        };
        new TomSelect(selectElement, settings);
    </script>
</body>

</html>
