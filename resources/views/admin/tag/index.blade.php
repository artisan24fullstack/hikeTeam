@extends('admin.admin')

@section('title', 'Tous les tags')


@section('content')
    <div class="d-flex justify-content-between align-items-center">
        <h1>@yield('title')</h1>
        <a class="btn btn-primary" href="{{ route('admin.tag.create') }}">Ajouter un tag</a>
    </div>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th class="text-end">Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($tags as $tag)
                <tr>

                    <td>{{ $tag->name }}</td>

                    <td>
                        <div class='d-flex gap-2 justify-content-end'>
                            <a class="btn btn-primary" href="{{ route('admin.tag.edit', $tag) }}">Editer</a>
                            <form action="{{ route('admin.tag.destroy', $tag) }}" method="post">

                                @csrf
                                @method('delete')
                                <button class="btn btn-danger">Supprimer</button>
                            </form>
                        </div>
                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>

    {{ $tags->links() }}
@endsection
