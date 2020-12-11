<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Sample Laravel App</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,900;1,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="./app.css">
    </head>
    <body>
        <div class="card">
            <h2>{{$book["title"]}}</h2>
            <p>{{$book["description"]}}</p>
            
            {{-- @foreach ($generatedUsers as $user)
                <div style="display: flex; justify-content: center; margin: 30px">
                    <img src="{{$user["picture"]["medium"]}}">
                    <p>{{$user["name"]["first"]}}</p>
                    <p>{{$user["name"]["last"]}}</p>
                </div>
              --}}

        {{-- @endforeach --}}

        </div>
    </body>
</html>
