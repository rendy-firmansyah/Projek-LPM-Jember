@extends("admin.data-user")

@section('title', 'Data Akun User |')

@section('content')
<h3 class="pt-4 ps-2 pb-2">Data Akun User</h3>
<div class="card-body border rounded shadow-sm justify-content-center">
    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Username</th>
                {{-- <th>Opsi</th> --}}
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $row)
                <tr>
                    <td>{{$loop->iteration}}</td>
                    <td>{{$row-> name}}</td>
                    <td>{{$row-> email}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

