<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Collego bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <title>Chi siamo</title>
</head>

<body>

    <!-- Inserisco il menu nell'header del body -->
    <header>
        <nav class="navbar bg-body-tertiary py-3 mb-5">
            <div class="container-fluid">
                <div>
                    <a class="navbar-brand" href="{{ route('home') }}">Homepage</a>
                    <a class="navbar-brand" href="{{ route('service-products') }}">Servizi e Prodotti</a>
                    <a class="navbar-brand" href="{{ route('about') }}">Chi siamo</a>
                    <a class="navbar-brand" href="{{ route('contacts') }}">Contatti</a>
                </div>
            </div>
        </nav>
    </header>

    <h1>Sei nella pagina:</h1>

    <p>{{$message}}</p>

</body>

</html>