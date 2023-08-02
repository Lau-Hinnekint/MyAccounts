<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Opérations de Juillet 2023 - Mes Comptes</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>

<body>
    
<div class="container-fluid">
    <header class="row flex-wrap justify-content-between align-items-center p-3 mb-4 border-bottom">
        <a href="{{ @route ('transactionList') }}" class="col-1">
            <i class="bi bi-piggy-bank-fill text-primary fs-1"></i>
        </a>
        <nav class="col-11 col-md-7">
            <ul class="nav">
                <li class="nav-item">
                    <a href="{{ @route ('transactionList') }}" class="nav-link link-secondary" aria-current="page">Opérations</a>
                </li>
                <li class="nav-item">
                    <a href="summary.html" class="nav-link link-body-emphasis">Synthèses</a>
                </li>
                <li class="nav-item">
                    <a href="{{ @route ('categoryList') }}" class="nav-link link-body-emphasis">Catégories</a>
                </li>
                <li class="nav-item">
                    <a href="import.html" class="nav-link link-body-emphasis">Importer</a>
                </li>
            </ul>
        </nav>
        <form action="" class="col-12 col-md-4" role="search">
            <div class="input-group">
                <input type="text" class="form-control" placeholder="Rechercher..." aria-describedby="button-search">
                <button class="btn btn-primary" type="submit" id="button-search">
                    <i class="bi bi-search"></i>
                </button>
            </div>
        </form>
    </header>
</div>

    @section ('body')
    content
    @show

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../../resources/js/script.js"></script>

</body>

<footer class="py-3 mt-4 border-top">
    <p class="text-center text-body-secondary">© 2023 Mes comptes</p>
</footer>

</html>