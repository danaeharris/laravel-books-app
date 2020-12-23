@extends("layouts.app")

@section("content")

<div class="card" style="margin-top: 100px">

    <div class="row no-gutters">

        @if (array_key_exists("covers", $book))
        <div class="col-md-4">
            <img class="card-img" src="https://covers.openlibrary.org/b/id/{{$book["covers"][0]}}-L.jpg" alt="Card image cap"/>
        </div>
    @endif
        <div class="col-md-8">
            <div class="card-body">
            <h5 class="card-title">{{$book["title"]}}</h5>
            @if (array_key_exists("description", $book) && is_array($book["description"]))
            <p class="card-text">{{html_entity_decode( $book["description"]["value"])}}</p>
            @elseif (array_key_exists("description", $book))
            <p class="card-text">{{$book["description"]}}</p>
            @endif
            <a href="https://openlibrary.org/works/OL14868646W/{{$book["key"]}}" class="btn btn-primary">
                <p>View on Open Library</p>
            </a>
            </div>
        </div>
     </div>
  </div>
@endsection