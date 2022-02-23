
@extends('layout.create')
  
  @section('content')
  <div class="row">
      <div class="col-lg-12 margin-tb">
          <div class="pull-left">
              <h2>Cafe Bisa Ngopi</h2>
              <h4>Halaman Create Transaksi</h4>
          </div>
          <div class="pull-right">
              <a class="btn btn-primary" > Back</a>
          </div>
      </div>
  </div>
       
  
       
  <form  method="POST" enctype="multipart/form-data"> 
      @csrf
  
      @method('PUT')
      
       <div class="row">
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Nama Pelanggan:</strong>
                  <input type="text" name="nis" class="form-control" placeholder="Nama Pelanggan" value="">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Menu:</strong>
                  <input type="text" name="nama" class="form-control" placeholder="Menu" value="">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Total Harga:</strong>
                  <input type="text" name="rombel" class="form-control" placeholder="Total Harga" value="">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              <div class="form-group">
                  <strong>Nama Pegawai:</strong>
                  <input type="text" name="rayon" class="form-control" placeholder="Nama Pegawai" value="">
              </div>
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12">
              
          </div>
          <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                  <button type="submit" class="btn btn-primary">Submit</button>
          </div>
      </div>
       
  </form>
  @endsection