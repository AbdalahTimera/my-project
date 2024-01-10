
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
    @include('layouts/app')

</head>
<body> 
    <div class="container spacer">
       
        <div class="card">
            <div class="card-header center">
                Liste des activites
            </div>
            <div class="card-body">
                <table class="center table table-bordered table-striped">
                    <tr>
                        <th>Libelle</th>
                        <th>Budget</th>
                        <th>Date</th>
                        <th>Rapport</th>
                        <th>Statut</th>
                        <th colspan="3">Action</th>
                    </tr>
                    @foreach ($nos_activites as $activite)
                    <tr>
                        <td>{{$activite->libelle}}</td>
                        <td>{{$activite->budget}}</td>
                        <td>{{$activite->date}}</td>
                        <td>{{$activite->rapport}}</td>
                        <td>{{$activite->statut}}</td>
                        <td>
                            <a href="/modifieract/{{$activite->id}}" class="btn btn-outline-primary btn-sm">Modifier</a>
                            <a href="/supprimeract/{{$activite->id}}" class="btn btn-outline-danger btn-sm">Supprimer</a>
                        </td>
                    </tr>
                    @endforeach
                </table>
                <a href="/ajouteract" class="btn btn-success">Ajouter</a>
            </div>
        </div>
    </div>
</body>
</html>