@extends('layouts.main')

@section('content')
<div class="container-fluid">
    <div class="row">
      <!-- left column -->
      <div class="col-md-12">
        <!-- general form elements -->
        <div class="card card-primary">
          <div class="card-header">
            <h3 class="card-title">Data Paket</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="POST" action="{{ url("/addPaketprocess")}}">
          @csrf
            <div class="card-body">
              <div class="form-group">
                <label>Nama Paket</label>
                <input type="text" name="nama_paket" class="form-control"  placeholder="Enter Name">
              </div>
              <div class="form-group">
                <label>Textarea</label>
                <textarea name="detail" class="form-control" rows="3" placeholder="Enter ..."></textarea>
              </div>
              <div class="form-group">
                <label>Harga</label>
                <input type="number" name="harga" class="form-control" placeholder="Rp. ">
              </div>
            
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
          </form>
        </div>
      </div>
    </div>
</div>
@endsection