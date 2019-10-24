@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                @forelse($books as $book)
                    <div class="card">
                        <div class="card-header">{{$book->title}}</div>

                        <div class="card-body">
                            <div>{{$book->author}}</div>
                           {{$book->annotation}}
                            <div>{{$book->published_at}}</div>
                        </div>
                    </div>
                @empty
                    <div class="card">
                        <div class="card-header">Books</div>

                        <div class="card-body">
                           TEST
                        </div>
                    </div>
                @endforelse
            </div>
        </div>
    </div>
@endsection
