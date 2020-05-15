@extends('admin.templates.default')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Report Peminjaman<h3>
    </div>

    <div class="box-body">

        <table id="dataTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Judul</th>
                    <th>Deskripsi</th>
                    <th> Jumlah Buku</th>
                    <th>Total Dipinjam</th>
                    <th>Penulis</th>
                    <th>Sampul</th>
                </tr>
            </thead>
            <tbody>
                @php
                    $page =1;
                    if(request()->has('page')){
                        $page = request('page');
                    }
                    $no = (10 * $page)- (10-1);
                @endphp
                @foreach($books as $book)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $book->title }}</td>
                    <td>{{ $book->description }}</td>
                    <td>{{ $book->qty }}</td>
                    <td>{{ $book->borrowed_count }}</td>
                    <td>{{ $book->author->name }}</td>
                    <td>
                        <img src="{{ $book->getCover() }}" height="150px" alt="{{ $book->title }}">
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <center>{{ $books->links() }}</center>
    </div>
</div>
@endsection




