@extends('base')

@section('title', 'Accueil')


@section('content')

    <section class="bg-image py-5 text-center container-fluid">
        <div class="mask">
            <div class="row py-lg-5">
                <div class="col-lg-6 col-md-8 mx-auto py-3 px-4">
                    <h1 class="fw-light text-white">Get the best hikes!</h1>
                    <p class="lead text-white">Welcome to our hiking directory, where adventure awaits at every
                        turn. Whether you're a seasoned trekker or a casual wanderer, our curated selection of
                        trails offers something for everyone. Explore breathtaking landscapes, from serene forest
                        paths to challenging mountain climbs.</p>
                    <p>
                        <a href="#" class="btn btn-primary my-2">Register now</a>
                    </p>
                </div>
            </div>
        </div>

    </section>
    <section class="album py-5 bg-body-tertiary">
        <div class="container">

            <div class="btn-group mb-3" role="group" aria-label="Basic radio toggle button group">
                <input type="radio" class="btn-check" name="btnradio" id="btnradioall" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradioall">All</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked>
                <label class="btn btn-outline-primary" for="btnradio1">Tag 1</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio2">Tag 2</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio3">Tag 3</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio1">Tag 4</label>

                <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off">
                <label class="btn btn-outline-primary" for="btnradio1">Tag 5</label>
            </div>

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach ($hikes as $hike)
                    <div class='col'>
                        @include('hike.card')
                    </div>
                @endforeach
            </div>
        </div>
    </section>

@endsection
