@extends('layouts.frontend')

@section('title')
    Resep
@endsection

@section('content')
<br>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card shadow">
                <div class="card-header">
                    <h1>Resep Obat</h1>
                </div>
                    <!--<a class="d-grid gap-2 d-md-flex justify-content-md-end">
                            <button type="button" class="btn btn-primary" href="{{ url('insert-resep') }}">Tambah</button>
                    </a>-->
                <div class="card-body">
                    <table class="table table-hover">
                        <thead class="table-dark">
                            <tr>
                                <th>No</th>
                                <th>Nama Tumbuhan</th>
                                <th>Penyakit</th>
                                <th>Deskripsi</th>
                                <th>Gambar</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($resep as $key=>$item)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $item->Nama_Tumbuhan }}</td>
                                <td>{{ $item->Penyakit }}</td>
                                <td>{{ $item->Deskripsi }}</td>
                                <td>
                                    <img class="img" src="{{ asset('assets/uploads/resep/'.$item->Image) }}" alt="image here..">    
                                </td>
                                <td>
                                    <a href="{{ url('edit-resep/'.$item->id) }}" class="btn btn-outline-primary shadow">Edit</a>
                                    <a href="{{ url('delete-resep/'.$item->id) }}" onclick="return confirm('Yakin hapus data?')" class="btn btn-outline-danger shadow">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
    
@endsection