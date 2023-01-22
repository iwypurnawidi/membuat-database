<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
  </head>
  <body>
    <div class="container mt-5">
      <h1 class="text-center mb-3">Transaksi laundry</h1>
      
      <div class="card">
        <div class="card-body">
      <form action="{{ route('transaksi1.update', $transaksi1->id) }}" method="POST">
        @csrf
  
   <div class="mb-3">
    <label for="name" class="form-label">Nama</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ $transaksi1->name}}">
   </div>
   <div class="mb-3">
    <label for="barang" class="form-label">Jenis Barang</label>
    <input type="text" class="form-control" name="barang" id="barang" value="{{ $transaksi1->barang}}">
   </div>
   <div class="mb-3">
    <label for="paket" class="form-label">Paket</label>
    <input type="number" class="form-control" name="harga" id="paket" value="{{ $transaksi1->harga}}">
   </div>
   <div class="mb-3">
    <label for="barat" class="form-label">Berat</label>
    <input type="number" class="form-control" name="berat" id="berat" value="{{ $transaksi1->berat}}">
   </div>

   <div class="mb-3">
    <label for="name_status" class="form-label">Status</label>
    <input type="text" class="form-control" name="status" id="name_status" value="{{ $transaksi1->status}}">
   </div>
  <button type="submit" class="btn btn-primary float-end">Submit</button>
</form>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>