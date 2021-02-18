<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Veterinary Practice</title>
    </head>
    <body>
        <header>
            @yield("page_title")
            @include("_partials/nav")
        </header>

        <main>
            @yield("content")
        </main>

        <footer>
            @include("_partials/footer")
        <footer>
    </body>
</html>