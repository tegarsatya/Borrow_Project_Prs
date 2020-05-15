@extends('admin.templates.default')

@section('content')
<div class="box">
    <div class="box-header">
        <h3 class="box-title">Laporan User Aktif Meminjam<h3>
    </div>

    <div class="box-body">

        <table id="dataTable" class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Email</th>
                    <th> Jumlah Peminjaman</th>
                    <th>Bergabung</th>
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
                @foreach($users as $user)
                <tr>
                    <td>{{ $no++ }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->borrow_count }}</td>
                    <td>{{ $user->created_at->diffForHumans() }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <center>{{ $users->links() }}</center>
    </div>
</div>
@endsection




