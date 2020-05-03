@if($errors->any())
<div style="color:red; font-weight:bold; font-size:larger;">
      Veuillez corriger les erreurs du formulaire
   </div>
@endif

<table border="1">
   <tbody>
        <tr>
            <th>{{Form::label('nom', 'Nom')}}</th>
            <td>{{Form::text('nom')}}
                @error('nom')
                <span style="color:red;">
                    {{$errors->first('nom')}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <th>{{Form::label('prenom', 'Prénom')}}</th>
            <td>{{Form::text('prenom')}}
                @error('prenom')
                <span style="color:red;">
                    {{$errors->first('prenom')}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <th>{{Form::label('name', 'Nom d\'usager')}}</th>
            <td>{{Form::text('name')}}
                @error('nom')
                <span style="color:red;">
                    {{$errors->first('nom')}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <th>{{Form::label('password', 'Mot de passe')}}</th>
            <td>{{Form::password('password')}}
                @error('password')
                <span style="color:red;">
                    {{$errors->first('password')}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <th>{{Form::label('email', 'Courriel')}}</th>
            <td>{{Form::email('email')}}
                @error('email')
                <span style="color:red;">
                    {{$errors->first('email')}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <th>{{Form::label('tel', 'Téléphone')}}</th>
            <td>{{Form::text('tel')}}
                @error('tel')
                <span style="color:red;">
                    {{$errors->first('tel')}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <th>{{Form::label('adresse', 'Adresse')}}</th>
            <td>{{Form::text('adresse')}}
                @error('adresse')
                <span style="color:red;">
                    {{$errors->first('adresse')}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <th>{{Form::label('ville', 'Ville')}}</th>
            <td>{{Form::text('ville')}}
                @error('adresse')
                <span style="color:red;">
                    {{$errors->first('adresse')}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <th>{{Form::label('province', 'Province')}}</th>
            <td>{{Form::text('province')}}
                @error('province')
                <span style="color:red;">
                    {{$errors->first('province')}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <th>{{Form::label('codepostal', 'Code Postal')}}</th>
            <td>{{Form::text('codepostal')}}
                @error('codepostal')
                <span style="color:red;">
                    {{$errors->first('codepostal')}}
                </span>
                @enderror
            </td>
        </tr>
        <tr>
            <th>{{Form::label('citation', 'Citation')}}</th>
            <td>{{Form::textarea('citation')}}
                @error('citation')
                <span style="color:red;">
                    {{$errors->first('citation')}}
                </span>
                @enderror
            </td>
        </tr>
   </tbody>
</table>
