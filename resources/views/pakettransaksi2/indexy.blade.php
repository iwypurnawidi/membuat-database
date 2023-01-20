@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Data laundry</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v2</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
          <div class="container mt-5">
      <h1 class="text-center mb-3"></h1>
      <a href="{{ route('pakettransaksi2.createy') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Data Laundry</a> 
      
      <div class="card">
        <div class="card-body">
        <table class="table">

          <thead>
            <th>No</th>
            <th>Nama</th>
            <th>jenis Barang</th>
            <th>Total Harga</th>
            <th>Status</th>
          </thead>
           @foreach ($pakettransaksi2 as $p)
          
          <tbody>
            
            <td>{{ $p->id }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->barang }}</td>
            <td>{{ $p->grand_total }}</td>
            <td>{{ $p->name_status }}</td>
          
            <td>
            <a href="{{ route('pakettransaksi2.edity',$p->id) }}"class="btn btn-warning btn-xs">edit</i></a> 
            <a href="{{ route('pakettransaksi2.Delete',$p->id) }}" class="btn btn-danger btn-xs">hapus</i></div>
            
            </td> 
           <!-- <td>
            <a href="{{ url('pakettransaksi2/'.$p->id.'/edit') }}"class="btn btn-warning btn-xs">edit</i></a> 
            <a href="{{ url('paketransaksi2/'.$p->id) }}" class="btn btn-danger btn-xs">hapus</i></div>
            </td>-->
            
          </tbody>
          @endforeach
        </table>
      </div>
    </div>

    </div>
   @endsection

























