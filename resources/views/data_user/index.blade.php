@extends('master')

@section('konten')
    <div class="container">
        <div class="row">
            <div class="col-sm-8">
                <p class="h2"> Data User </p>
            </div>
            <div class="col-sm-4">
                <a href="#"><button type="button" class="btn btn-success">Tambah User</button></a>
            </div>
        </div>
    </div>

    <table class="table mt-3" id="dataTableExample">
        <thead class="thead-dark">
            <tr>
                <th scope="col"> Nama </th>
                <th scope="col"> Email </th>
                <th scope="col"> Alamat </th>
                <th scope="col"> No Telepon</th>
                <th scope="col"> Aksi </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($user as $u )
                <tr>
                    <td> {{ $u->name }}</td>
                    <td> {{ $u->email }}</td>
                    <td> {{ $u->alamat }}</td>
                    <td> {{ $u->no_telepon }}</td>
                    <td>
                        <button type="button" class="btn btn-info"><a href="#"> Detail </a></button>
                        <button type="button" class="btn btn-danger"><a href="#"> Hapus </a></button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection