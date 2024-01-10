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
            Liste des produits
        </div>
        <div class="card-body">
            <table class="center table table-bordered table-striped">
                <tr>
                    <th>Code</th>
                    <th>Nom</th>
                    <th>Description</th>
                    <th>Budget</th>
                    <th>Date-Debut</th>
                    <th>Date-Fin</th> 
                    <th>Statut</th>
                    <th colspan="3">Action</th>
                </tr>
                @foreach ($nos_projets as $projet)
                <tr>
                    <td>{{ $projet->code }}</td>
                    <td>{{ $projet->nom }}</td>
                    <td>{{ $projet->description }}</td>
                    <td>{{ $projet->budget }}</td>
                    <td>{{ $projet->date_debut }}</td>
                    <td>{{ $projet->date_fin }}</td>
                    <td>{{ $projet->statut }}</td>
                    <td>
                        <a href="/modifier/{{ $projet->id }}" class="btn btn-outline-primary btn-sm">Modifier</a>
                        <a href="/supprimer/{{ $projet->id }}" class="btn btn-outline-danger btn-sm">Supprimer</a>
                    </td>
                </tr>
                @endforeach
            </table>
            <a href="{{url('/ajouter')}}" class="btn btn-success">Ajouter</a>
        </div>
    </div>
</div>
</body>
</html>