@extends('layouts.admin')
 
@section('content')

<div class="content-wrapper">
    <!-- Content Header (Page header) -->
          <div class="content-header">
            <div class="container-fluid">
              <div class="row mb-2">
                <div class="col-sm-6">
                  <h1 class="m-0">Paket Laundry</h1>
                  <script type="text/javascript">
                    </script>
                </div><!-- /.col -->
                <div class="col-sm-6">
                  <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#"></a></li>
                    <li class="breadcrumb-item active">Dashboard v2</li>
                  </ol>
                </div><!-- /.col -->
              </div><!-- /.row -->
            </div><!-- /.container-fluid -->
          </div>
 
<div class="row">
    <div class="col-md-12">
        <h4></h4>
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    
                    <a href="{{ route('paket1.add') }}" class="btn btn-sm btn-flat btn-primary"><i class="fa fa-plus"></i> Tambah data</a>
                </p>
            </div>
            <div class="box-body">
            
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>N0</th>
                            <th>Nama</th>
                            <th>Harga</th>
                            <th></th>

</tr>
</thead>
<tbody>
  @php
  $no = 1;     
  @endphp
                    @foreach($paket1 as $p)
                   <tr>           
                            <td>{{ $no++ }}</td>
                            <td>{{ $p->name }}</td>
                            <td>{{ $p->harga }}</td>
          <td>
             
              <a href="{{ route('paket1.edd',$p->id) }}"class="btn btn-warning btn-xs">edit</a>        
             <a href="{{ route('paket1.Delete',$p->id) }}" class="btn btn-danger btn-xs" id="Delete">hapus</i></a>
        
    </td>
</tr>
</td>         
</tbody>
@endforeach
</table>
            </div>
        </div>
    </div>
</div>
 
@endsection
 

 

 
