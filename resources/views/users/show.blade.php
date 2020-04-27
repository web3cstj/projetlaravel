@extends("techno.index")
@section("contenu")
    @component("techno.post")
        @slot('titre')
            {{$user->prenom}} <em>{{$user->nom}}</em>
        @endslot
        @slot('contenu')
            <div>{{$user->email}}</div>
            <div>{{$user->tel}}</div>
            <address>
                <div>{{$user->adresse}}</div>
                <div>{{$user->ville}} {{$user->province}}</div>
                <div>{{$user->codepostal}}</div>
            </address>
            <p>{{$user->citation}}</p>
            <h3>Ses articles</h3>
            <ul>
            @foreach($user->posts as $post)
                <li><a href="{{action('PostController@show', $post)}}">{{$post->titre}}</a></li>
            @endforeach
            </ul>
        @endslot
    @endcomponent
@endsection
