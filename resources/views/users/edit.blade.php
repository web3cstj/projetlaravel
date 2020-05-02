@extends("techno.index")
@section("contenu")
<h2>Modifier un usager</h2>
{{Form::model($user)}}
@include("users.form")
<div>{{Form::submit("Ajouter")}} - {{Form::submit("Annuler", ["name" => "annuler"])}}</div>
{{Form::close()}}
@endsection
