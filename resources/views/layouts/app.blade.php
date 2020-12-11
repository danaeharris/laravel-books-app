<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Sample Laravel App</title>
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,900;1,700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./app.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <!-- CSS And JavaScript -->
    </head>
    <body>
        <div class="container">
            <div class="page">
                @yield("content")
             </div>
        <footer>
            <div style="display: flex, flex-direction: row, align-items: baseline, justify-content: space-between">
                <div>
                </div>
                <div style="display: flex; flex-direction: row, align-items: baseline, justify-content: center">
                    <p style="margin-right: 5px">Check out my website at</p>
                    <a href="https://danaeharris.com/">
                        <p>danaeharris.com</p>
                    </a>
                </div>
            </div>
        </footer>
        </div>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

        <script>

        $( ".search" ).on("input", function() {
        console.log($(this).val());
        $('.search-link').attr("href", "/search?q=" + $(this).val());
        });

        </script>
    </body>
</html>