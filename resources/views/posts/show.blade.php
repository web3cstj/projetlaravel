@extends("techno.index")
@section("contenu")
    @component("techno.post")
        @slot('titre')
            {{$post->titre}}
            <div class="meta">
                by <strong><a href="{{action('UserController@show', $post->user)}}">{{$post->user->nomComplet}}</a></strong>
                on <strong{{$post->updated_at}}</strong>
                in <strong><a href="#">Coding</a>, <a href="#">HTML</a></strong>
                | <strong><a href="#">196 comments</a></strong>
            </div>
        @endslot
        @slot('contenu')
            <div>{{$post->contenu}}</div>
        @endslot
    @endcomponent
@endsection
