@extends('admin.admin')

@section('title', $tag->exists ? 'Editer un tag' : 'Créer un tag')


@section('content')

    <h1>@yield('title')</h1>

    <form class="vtstack gap-2" action="{{ route($tag->exists ? 'admin.tag.update' : 'admin.tag.store', $tag) }}"
        method="post">

        @csrf
        @method($tag->exists ? 'put' : 'post')

        <div class="row">
            @include('shared.input', [
                'class' => 'col',
                'label' => 'Name',
                'name' => 'name',
                'value' => $tag->name,
            ])


        </div>
        <div>
            <button class="btn btn-primary">
                @if ($tag->exists)
                    Modifier
                @else
                    Créer
                @endif
            </button>
        </div>
    </form>
@endsection
