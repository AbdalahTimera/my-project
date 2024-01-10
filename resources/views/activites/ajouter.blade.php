<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
    <div class="container col-md-6 spacer">
        <div class="card">
            <div class="card-header center">Ajout d'un produit</div>
            <div class="card-body">
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message')}}
                </div>  
    
                @endif
                <ul>
                    @foreach ($errors->all() as $error)
                    <div class="alert alert-danger">{{$error}}</div>
                        
                    @endforeach
                </ul>
                <form action="/ajouteract/enregistrer" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Libelle</label>
                        <input class="form-control" type="text" name="libelle">
                    </div>
                    <div class="form-group">
                        <label for="">Budget </label>
                        <input class="form-control" type="number" name="budget">
                    </div>
                    <div class="form-group">
                        <label for="">Date-debut</label>
                        <input class="form-control" type="date" name="date">
                    </div>
                    <div class="form-group">
                        <label for="">Rapport </label>
                        <input class="form-control" type="text" name="rapport">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="flexCheckChecked">
                            statut
                          </label>
                        <input class="form-check-input" type="checkbox" name="statut" id="flexCheckChecked">
                      </div>
                        <br>
                    <div class="form-group center">
                        <input class="btn btn-primary" type="submit" name="valider" value="Enregistrer">
                        <a href="/liste-activites" class="btn btn-danger" type="reset" name="annuler">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
    

