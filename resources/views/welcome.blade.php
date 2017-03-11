<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <script>
            window.Laravel = {
                'csrfToken' : '{{ csrf_token() }}'
            }
        </script>

    
    </head>
    <body>
        <div id="app">
            <navbar></navbar>
            <example></example>
        </div>
        
        <script type="text/javascript" src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
