@extends('base')

@section('title', $hike->name)


@section('content')

    <div class="container full-page">
        <!-- Bouton pour retourner à la liste des randonnées -->
        <div class="d-flex justify-content-start w-100">
            <a href="{{ url('/') }}" class="btn back-button">← Retour à la liste des randonnées</a>
        </div>
        <div class="row w-100">
            <!-- Image de la randonnée -->
            <div class="col-md-6">
                <img src="{{ asset('../resources/images/hike1.jpg') }}" alt="Hike Image" class="img-fluid hike-image">
            </div>
            <!-- Détails de la randonnée -->
            <div class="col-md-6 d-flex flex-column justify-content-center">
                <div class="card detail">
                    <div class="card-body">
                        <h1 class="card-title text-white">{{ $hike->name }}</h1>
                        <p class="card-text text-white">{{ $hike->description }}
                        <h2>Caractéristiques</h2>
                        <table class="table table-striped">
                            <tr>
                                <td>Distance</td>
                                <td>{{ $hike->distance }} km</td>
                            </tr>
                            <tr>
                                <td>Duration</td>
                                <td>{{ $hike->duration }} min</td>
                            </tr>
                            <tr>
                                <td>Elevation gain</td>
                                <td>{{ $hike->elevation_gain }}</td>
                            </tr>
                        </table>
                        <div>
                            @foreach ($hike->tags as $tag)
                                <small class="text-muted tag">{{ $tag->name }}</small>
                            @endforeach
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{--
    <div class="container mt-5">

        <h1>{{ $hike->name }} </h1>

        <div>
            {{ $hike->description }}
        </div>

        <hr>
        <div class="mt-4">
            <div class="row">
                <div class="col-8">
                    <h2>Caractéristiques</h2>
                    <table class="table table-striped">
                        <tr>
                            <td>Distance</td>
                            <td>{{ $hike->distance }} km</td>
                        </tr>
                        <tr>
                            <td>Duration</td>
                            <td>{{ $hike->duration }} min</td>
                        </tr>
                        <tr>
                            <td>Elevation gain</td>
                            <td>{{ $hike->elevation_gain }}</td>
                        </tr>
                    </table>
                </div>
                <div class="col-4">
                    <h2>Tags</h2>
                    <ul class="list-group">
                        @foreach ($hike->tags as $tag)
                            <li class="list-group-item">{{ $tag->name }}</li>
                        @endforeach

                    </ul>
                </div>
            </div>
        </div>
    </div>
--}}
@endsection
