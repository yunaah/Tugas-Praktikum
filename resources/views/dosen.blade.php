@extends('layouts.master')

@section('container')
    <h1 class="text-center">Data Dosen</h1>
    <div class="mb-4">
    <button type="button" class="btn btn-success ">Tambah Data</button>
    </div>
    <div class="row">
        <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">NIP</th>
                <th scope="col">Email</th>
                <th scope="col">Nama</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">No Hp</th>
                <th scope="col">Aksi</th>
              
              </tr>
            </thead>
            <tbody>
              @foreach($dosen as $dsn)
              <tr>
                <th scope="row">{{$dsn->id_dosen}}</th>
                <td>{{$dsn->nip}}</td>
                <td>{{$dsn->email}}</td>
                <td>{{$dsn->nama}}</td>
                <td>{{$dsn->tanggal_lahir}}</td>
                <td>{{$dsn->no_hp}}</td>
                <td>
                    <button type="button" class="btn btn-primary">Update</button>
                    <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
    </div>
@endsection