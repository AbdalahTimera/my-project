<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <a href="#" class="navbar-brand">CRUD</a>
            <div class="navbar-nav">
                <a class="nav-item nav-link" href="{{route('/liste-projets')}}">Gestion de Produit</a>
                <a class="nav-item nav-link" href="{{route('/liste-activites')}}">Gestion d'Activite</a>
                <a class="nav-item nav-link" href="{{route('/liste-zones')}}">Gestion de zone</a>
            </div>
        </nav>
        @yield('content')
    </div>
</head>
<body>
    
</body>
</html>