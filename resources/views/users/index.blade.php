<h1>{{$user->prenom}} {{$user->nom}}</h1>
<div>{{$user->email}}</div>
<div>{{$user->tel}}</div>
<address>
    <div>{{$user->adresse}}</div>
    <div>{{$user->ville}} {{$user->province}}</div>
    <div>{{$user->codepostal}}</div>
</address>
<p>{{$user->citation}}</p>
