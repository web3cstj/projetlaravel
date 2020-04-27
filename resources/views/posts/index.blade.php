@extends("techno.index")
@section("contenu")
    <h2>Liste des articles</h2>
    <ul>
    @foreach($posts as $post)
        <li>
            <a href="{{action('PostController@show', $post)}}">{{$post->titre}}</a>
            par <a href="{{action('UserController@show', $post->user)}}">{{$post->user->nomComplet}}</a>
        </li>
    @endforeach
    </ul>
@endsection
