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
            <div class="card-header center">Edition d'un produit</div>
            <div class="card-body">
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message')}}
                </div>  
    
                @endif
                <form action="/modifier/save" method="post">
                    @csrf
                    <input type="text" name="id" style="display:none" value="{{$projet->id}}">
                    <div class="form-group">
                        <label for="">Code</label>
                        <input class="form-control" type="text" name="code" value="{{$projet->code}}">
                    </div>
                    <div class="form-group">
                        <label for="">Nom</label>
                        <input class="form-control" type="text" name="nom" value="{{$projet->nom}}">
                    </div>
                    <div class="form-group">
                        <label for="">Description</label>
                        <input class="form-control" type="text" name="description" value="{{$projet->description}}">
                    </div>
                    <div class="form-group">
                        <label for="">Budget </label>
                        <input class="form-control" type="number" name="budget" value="{{$projet->budget}}">
                    </div>
                    <div class="form-group">
                        <label for="">Date-Debut </label>
                        <input class="form-control" type="date" name="date_debut" value="{{$projet->date_debut}}">
                    </div>
                    <div class="form-group">
                        <label for="">Date-Fim </label>
                        <input class="form-control" type="date" name="date_fin" value="{{$projet->date_fin}}">
                    </div>
                    <div class="form-check">
                        <label class="form-check-label" for="flexCheckChecked">
                            statut
                          </label>
                        <input class="form-check-input" type="checkbox" name="statut" id="flexCheckChecked" value="{{$projet->statut}}" checked>
                      </div>
                        <br>
                    <div class="form-group center">
                        <input class="btn btn-primary" type="submit" name="editer" value="Modifier">
                        <input class="btn btn-danger" type="reset" name="annuler" value="Annuler">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>