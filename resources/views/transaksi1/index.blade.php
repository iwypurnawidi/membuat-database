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
      <a href="{{ route('transaksi1.create') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah Data Laundry</a> 
      
      <div class="card">
        <div class="card-body">
        <table class="table">

          <thead>
            <th>No</th>
            <th>Nama</th>
            <th>jenis Barang</th>
            <th>harga</th>
            <th>berat</th>
            <th>Total Harga</th>
            <th>Status</th>
          </thead>
           @foreach ($transaksi1 as $t)
          
          <tbody>
            
            <td>{{ $t->id }}</td>
            <td>{{ $t->name }}</td>
            <td>{{ $t->barang }}</td>
            <td>{{ $t->harga }}</td>
            <td>{{ $t->berat }}</td>
            <td>
              @php
              $a = $t->harga;
              $b = $t->berat;
              echo $a  * $b;
  
          @endphp
            </td>
            <td>{{ $t->status }}</td>
          
            <td>
            <a href="{{ route('transaksi1.edit',$t->id) }}"class="btn btn-warning btn-xs">edit</i></a> 
            <a href="{{ route('transaksi1.Delete',$t->id) }}" class="btn btn-danger btn-xs">hapus</i></div>
            
            </td> 
           
            
          </tbody>
          @endforeach
        </table>
      </div>
    </div>

    </div>
   @endsection

























