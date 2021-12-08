@extends('layouts.main')

@section('content')

<div class="container-fluid">
    <div class="row">
      <div class="col-12">
        <div class="card">
          <div class="card-header">
            <h3 class="card-title">Data Paket</h3>
          </div>
          <!-- /.card-header -->
          <div class="card-body">
            <a class="btn btn-success" href="{{ url("addPaket") }}">Tambah Data</a>
            <table id="example2" class="table table-bordered table-hover">
              <thead>
              <tr>
                <th>No.</th>
                <th>Nama Paket</th>
                <th>Harga</th>
                <th>Detail</th>
                <th>Aksi</th>
              </tr>
              </thead>
              <tbody>
                @php $no = 0 @endphp
                @foreach ($data_paket as $paket)
                <tr>
                  <td>{{ ++$no }}</td>
                  <td>{{ $paket->nama_paket }}</td>
                  <td>{{ $paket->harga }}</td>
                  <td>{{ $paket->detail }}</td>
                  <td>
                    <a class="btn btn-primary" href="{{ url("editPaket/$paket->id_paket")}}">Edit</a>
                    <a class="btn btn-danger" href="{{ url("/deletePaket/$paket->id_paket")}}">Hapus</a>
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