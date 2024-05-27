<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="app" class="d-flex flex-column min-vh-100">
        @include('partials.header')

        <main class="flex-grow-1">
            MAIN
        </main>

        @include('partials.footer')
    </div>
    

    @vite('resources/js/app.js')

</body>
</html>