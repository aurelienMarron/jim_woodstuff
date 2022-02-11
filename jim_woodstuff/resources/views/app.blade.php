<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Jim Woodstuff</title>

    <link href="/css/style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css">


</head>
<body>
<nav class="navbar" id="navBarre" >
<div class="container">
        <div class=" row" id="navbarNav" >
            <div class="col" >
                <img src="/img/logo.PNG" alt="" id="logo" >
            </div>
            <div class="col">
                <a class="nav-link lienNavbarre" href="/" >Accueil </a>
            </div>
            <div class="col">
                <a class="nav-link lienNavbarre" href="/catalogue">Catalogue</a>
            </div>
            <div class="col">
                <a class="nav-link lienNavbarre" href="#">Galerie</a>
            </div>
            <div class="col">
                <a class="nav-link lienNavbarre" href="#">Contact</a>
            </div>
        </div>
</div>
</nav>

<div>
@yield('content')
</div>

</body>
</html>
