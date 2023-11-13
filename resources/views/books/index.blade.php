@extends('layouts.main')

@section('container')
<div class="row justify-content-center">
    @foreach($books as $index => $book)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="card-header">
                    {{$book['title']}}
                </div>
                <div class="card-body">
                    <h5 class="card-title mb-3"> 
                        @if($book->categories)
                            {{$book->categories->name}}
                        @else
                            No Category
                        @endif
                    </h5>
                    <p class="card-text mb-3"> 
                        @if($book->authors)
                            {{$book->authors->name}}
                        @else
                            No Author
                        @endif
                    </p>
                    <a href="/books/detail/{book}" class="btn btn-primary">Show More</a>
                </div>
            </div>
        </div>
        @if(($index + 1) % 3 === 0)
            </div><div class="row justify-content-center">
        @endif
    @endforeach
</div>
@endsection
