
<table border="1">
   <tbody>
        <tr>
            <th>{{Form::label('nom', 'Nom')}}</th>
            <td>{{Form::text('nom')}}</td>
        </tr>
        <tr>
            <th>{{Form::label('prenom', 'Prénom')}}</th>
            <td>{{Form::text('prenom')}}</td>
        </tr>
        <tr>
            <th>{{Form::label('name', 'Nom d\'usager')}}</th>
            <td>{{Form::text('name')}}</td>
        </tr>
        <tr>
            <th>{{Form::label('password', 'Mot de passe')}}</th>
            <td>{{Form::password('password')}}</td>
        </tr>
        <tr>
            <th>{{Form::label('email', 'Courriel')}}</th>
            <td>{{Form::email('email')}}</td>
        </tr>
        <tr>
            <th>{{Form::label('tel', 'Téléphone')}}</th>
            <td>{{Form::text('tel')}}</td>
        </tr>
        <tr>
            <th>{{Form::label('adresse', 'Adresse')}}</th>
            <td>{{Form::text('adresse')}}</td>
        </tr>
        <tr>
            <th>{{Form::label('ville', 'Ville')}}</th>
            <td>{{Form::text('ville')}}</td>
        </tr>
        <tr>
            <th>{{Form::label('province', 'Province')}}</th>
            <td>{{Form::text('province')}}</td>
        </tr>
        <tr>
            <th>{{Form::label('codepostal', 'Code Postal')}}</th>
            <td>{{Form::text('codepostal')}}</td>
        </tr>
        <tr>
            <th>{{Form::label('citation', 'Citation')}}</th>
            <td>{{Form::textarea('citation')}}</td>
        </tr>
   </tbody>
</table>
