@extends('frontend.templates.default')

@section('content')
<div class="row">
    <h1>Buku yang sedang dipinjam</h1>
    @foreach ($books as $book)
    <div class="col s12 m12">
        <div class="card horizontal hoverable">
            {{-- <div class="card-image"> --}}
                <img src="{{ $book->getCover() }}">
            {{-- </div> --}}
            <div class="card-stacked">
                <div class="card-content">
                <h4 class="red-text accent-2">{{ $book->title }}</h4>
                <blockquote>
                    <p>{{ $book->description }}</p>
                </blockquote>
                <p>
                    <i class="material-icons">person</i> : {{ $book->author->name }}
                </p>
                </div>

            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
