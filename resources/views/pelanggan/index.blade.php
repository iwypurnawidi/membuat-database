@extends('layouts.admin')

@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Data Pelanggan</h1>
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

      <a href="{{ route('pelanggan.createy') }}"class="btn btn-primary mb-3"><i class="fa fa-plus"></i>Tambah Data</a>
      <div class="card">
        <div class="card-body">
        <table class="table">

          <thead>
            <th>NO</th>
            <th>NAMA</th>
            <th>ALAMAT</th>
            <th>TELEPON</th>
          </thead>
          @php
          $no = 1;     
          @endphp
        
          @foreach ($pelanggan as $p)
        
            <tbody>
             
            <td>{{ $no++ }}</td>
            <td>{{ $p->name }}</td>
            <td>{{ $p->alamat }}</td>
            <td>{{ $p->telepon }}</td>
          
            <td>
            <a href="{{ route('pelanggan.edity',$p->id) }}"class="btn btn-warning btn-xs">edit</i></a> 
            <a href="{{ route('pelanggan.delete',$p->id) }}" class="btn btn-danger btn-xs">hapus</i></div>
              
            </td>
            
          </tbody>
          @endforeach
        </table>
      </div>
    </div>

    </div>
   @endsection

























