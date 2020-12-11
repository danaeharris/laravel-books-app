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
                <div style="margin: 100px 0px">
                    <h4>Playing around with PHP and Laravel and fetching data from the Open Library API.</h4>
                </div>
                <div class="card" >
                    <div class="row no-gutters">
                        <div class="col-md-4">
                            <img class="card-img" src="https://covers.openlibrary.org/b/id/{{$book["covers"][0]}}-L.jpg" alt="Card image cap"/>
                        </div>
                        <div class="col-md-8">
                            <div class="card-body">
                            <h5 class="card-title">{{$book["title"]}}</h5>
                            <p class="card-text">{{html_entity_decode( $book["description"])}}</p>
                            <a href="https://openlibrary.org/works/OL14868646W/A_Christmas_Carol?edition=christmascarolil00dickuoft" class="btn btn-primary">
                                <p>View on Open Library</p>
                            </a>
                            </div>
                        </div>
                     </div>
                  </div>
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
    </body>
</html>