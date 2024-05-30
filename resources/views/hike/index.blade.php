@extends('base')

@section('title', 'Tous les hikes')


@section('content')


    <div class="bg-light p-5 mb-5 text-center">
        <form action="" method="get" class="container d-flex gap-2">

            <input type="number" placeholder="distance" class="form-control" name="distance"
                value="{{ $input['distance'] ?? '' }}">

            <input type="number" placeholder="duration" class="form-control" name="duration"
                value="{{ $input['duration'] ?? '' }}">

            <input placeholder="Mot clef" class="form-control" name="name" value="{{ $input['name'] ?? '' }}">

            <select name="tags[]" multiple class="form-control" size="3">
                @foreach ($tags as $tagId => $tagName)
                    {{-- <option value="{{ $tagId }}" {{ in_array($tagId, $input['tags']) ? 'selected' : '' }}> --}}
                    <option value="{{ $tagId }}" {{ in_array($tagId, $input['tags'] ?? []) ? 'selected' : '' }}>

                        {{ $tagName }}
                    </option>
                @endforeach
            </select>
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
                    Aucun hike ne correspond à votre recherche
                </div>
            @endforelse
        </div>
        <div class="my-4">
        </div>
    </div>


@endsection
