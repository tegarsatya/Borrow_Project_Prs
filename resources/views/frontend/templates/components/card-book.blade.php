<div class="col s12 m6">
    <div class="card horizontal hoverable">
        <div class="card-image">
            <img src="{{ $book->getCover() }}" height="200px">
        </div>
        <div class="card-stacked">
            <div class="card-content">
            <h6>
                <a href="{{ route('book.show', $book) }}">{{ Str::limit($book->title, 30) }}</a>
            </h6>
            <p>{{ Str::limit($book->description, 100) }}</p>
            </div>
            <div class="card-action">
                <form action="{{ route('book.borrow', $book) }}" method="POST">
                    @csrf
                    <input type="submit" value="Pinjam Buku" class="btn red accent-1 right waves-effect waves-light">
                </form>
            </div>
        </div>
    </div>
</div>
