@extends('base')

@section('title', 'Tous nos biens')


@section('content')


    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">


            <button class="btn btn-primary btn-sm flex-grow-0">Rechercher</button>
        </form>
    </div>
    <div class="container mt-5">
        <div class="row">
            @forelse ($hikes as $hike)
                <div class='col-3 mb-4'>
                    @include('hike.card')
                </div>

            @empty
                <div class='col'>
                    Aucun bien ne correspond à votre recherche
                </div>
            @endforelse
        </div>
        <div class="my-4">
        </div>
    </div>


@endsection
