@extends('layouts.main')

@section('container')
    <h1 style="text-align: center; margin-bottom: 20px;">Book Details</h1>
    <div class="card" style="width: 18rem; margin: auto;">
        <div class="card-header">
            {{ $book->title }}
        </div>
        <div class="card-body">
            <h5 class="card-title">
                @if($book->categories)
                    <strong>Category:</strong> {{ $book->categories->name }}
                @else
                    <strong>No Category</strong>
                @endif
            </h5>
            <p class="card-text">
                @if($book->authors)
                    <strong>Author:</strong> {{ $book->authors->name }}
                @else
                    <strong>No Author</strong>
                @endif
            </p>
            <p class="card-text">
                <strong>Summary:</strong> {{ $book->summary ?? 'No summary available' }}
            </p>
            <a href="/books" class="btn btn-primary" style="background-color: #007bff; border-color: #007bff;">Back</a>
        </div>
    </div>
@endsection
