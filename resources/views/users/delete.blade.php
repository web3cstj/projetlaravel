@extends("techno.index")
@section("contenu")
<h2>Modifier un usager</h2>
{{Form::model($user)}}
<div>Voulez-vous vraiment supprimer l'usager "{{$user->prenom}} {{$user->nom}}"</div>
<div>{{Form::submit("Oui")}} - {{Form::submit("Non", ["name" => "annuler"])}}</div>
{{Form::close()}}
@endsection
