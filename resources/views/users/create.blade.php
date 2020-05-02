@extends("techno.index")
@section("contenu")
<h2>Ajouter un usager</h2>
{{Form::model($user)}}
@include("users.form")
<div>{{Form::submit("Ajouter")}}</div>
{{Form::close()}}
@endsection
