@extends('admin.templates.default')

@section('content')
    <div class="box">
        <div class="box-header">
            <h3 class="box-title">Tambah Data Buku</h3>
        </div>

        <div class="box-body">
            <form action="{{ route('admin.book.update', $book) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PUT")

                <div class="form-group @error('title') has-error @enderror">
                    <label for="">Judul</label>
                    <input type="text" name="title" class="form-control" placeholder="Masukkan judul buku" value="{{ $book->title ?? old('title') }}">
                    @error('title')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group @error('description') has-error @enderror">
                    <label for="">Deskripsi</label>
                    <textarea name="description" id="" rows="3" class="form-control" placeholder="Tuliskan deskripsi buku">{{ $book->description ?? old('description') }}</textarea>
                    @error('description')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group @error('author_id') has-error @enderror">
                    <label for="">Penulis</label>
                    <select name="author_id" id="" class="form-control select2">
                        @foreach ($authors as $author)
                            <option
                                value="{{ $author->id }}"
                                @if ($author->id === $book->author_id)
                                    selected
                                @endif
                            >
                                {{ $author->name }}
                            </option>
                        @endforeach
                    </select>
                    @error('author_id')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group @error('cover') has-error @enderror">
                    <label for="">Sampul</label>
                    <input type="file" name="cover" class="form-control">
                    @error('cover')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group @error('qty') has-error @enderror">
                    <label for="">Jumlah</label>
                    <input type="text" name="qty" class="form-control" placeholder="Masukkan jumlah buku" value="{{ $book->qty ?? old('qty') }}">
                    @error('qty')
                        <span class="help-block">{{ $message }}</span>
                    @enderror
                </div>

                <div class="form-group">
                    <input type="submit" value="Simpan" class="btn btn-primary">
                </div>

            </form>
        </div>
    </div>
@endsection

@push('select2css')
    <link rel="stylesheet" href="{{ asset('assets/bower_components/select2/dist/css/select2.min.css') }}">
@endpush

@push('scripts')
    <script src="{{ asset('assets/bower_components/select2/dist/js/select2.full.min.js') }}"></script>

    <script>
        $('.select2').select2();
    </script>
@endpush
