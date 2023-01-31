
 <!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
<div class="row">
    <div class="col-md-12">
       
        <div class="box box-warning">
            <div class="box-header">
                <p>
                    <button class="btn btn-sm btn-flat btn-warning btn-refresh"><i class="fa fa-refresh"></i> Refresh</button>
                </p>
            </div>
            <div class="box-body">
               
            <form action="{{ route('paket1.store2') }}" method="POST">
                @csrf
            <form role="form">
              <div class="box-body">
                <div class="form-group">                
                  <label for="exampleInputEmail1">Nama paket</label>
                  <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Nama Paket">
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Harga Paket (KG)</label>
                  <input type="number" name="harga" class="form-control" id="exampleInputPassword1" placeholder="Harga">
                </div>
           
              </div>
              <!-- /.box-body -->
 
              <div class="box-footer">
                <button type="submit" class="btn btn-primary">Submit</button>
              </div>
            </form>

            </div>
        </div>
    </div>
</div>
