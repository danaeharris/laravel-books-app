@extends("layouts.app")

@section("content")

<div style="margin: 100px 0px">
    <h4>Playing around with PHP and Laravel and fetching data from the Open Library API.</h4>
</div>
<div class="input-group mb-3">
    <input type="text" class="form-control search" placeholder="Search for a book's title e.g. Fellowship of the Ring" aria-label="Search for a book's title" aria-describedby="basic-addon2">
    <div class="input-group-append">
      <a class="btn btn-outline-secondary search-link" type="button">Search</a>
    </div>
</div>
  


@endsection