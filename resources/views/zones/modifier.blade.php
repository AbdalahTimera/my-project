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
            <div class="card-header center">Edition d'une zone</div>
            <div class="card-body">
                @if (session('message'))
                <div class="alert alert-success">
                    {{ session('message')}}
                </div>  
    
                @endif
                <form action="/modifierzone/enregistrer" method="post">
                    @csrf
                    <input type="text" name="id" style="display:none" value="{{$zone->id}}">
                    <div class="form-group">
                        <label for="">Libelle</label>
                        <input class="form-control" type="text" name="libelle" value="{{$zone->libelle}}">
                    </div>
                        <br>
                    <div class="form-group center">
                        <input class="btn btn-primary" type="submit" name="editer" value="Modifier">
                        <a href="/liste-zones" class="btn btn-danger" type="reset" name="annuler">Annuler</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>