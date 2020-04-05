@extends("techno.index")
@section("contenu")
    @foreach($users as $user)
        @component("techno.post");
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
            @endslot
        @endcomponent
    @endforeach
@endsection
