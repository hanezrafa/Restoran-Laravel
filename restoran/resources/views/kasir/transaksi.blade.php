@extends('layout.transaksi')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Halaman Transaksi</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" > Create</a>
            </div>
        </div>
    </div>
    
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
     
    <table class="table table-bordered">
        <tr>
            <th>No</th>
            <th>Nama Pelanggan</th>
            <th>Menu</th>
            <th>Jumlah</th>
            <th>Total</th>
            <th>Nama Pegawai</th>
            <th width="280px">Action</th>
        </tr>
        
        <tr>
            <td>1</td>
            <td>Hanez</td>
            <td>Kopi Hitam</td>
            <td>1</td>
            <td>Rp. 50.000</td>
            <td>Surti</td>
            <td>
                <form  method="POST">
           
                    <a class="btn btn-primary" >Edit</a>
     
                    @csrf
                    @method('DELETE')
        
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        
    </table>
    
    
        
@endsection    