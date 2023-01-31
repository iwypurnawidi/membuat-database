
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
      <h1 class="text-center mb-3">Paket Laundry</h1>
      
      <div class="card">
        <div class="card-body">
      <form action="{{ route('paket1.update1', $paket1->id) }}" method="POST">
        @csrf
  <div class="mb-3">
    <label for="name" class="form-label">Nama Paket</label>
    <input type="text" class="form-control" name="name" id="name" value="{{ $paket1->name}}">
   </div>
   <div class="mb-3">
    <label for="harga" class="form-label">Harga Paket</label>
    <input type="text" class="form-control" name="harga" id="harga" value="{{ $paket1->harga}}">
   </div>

  <button type="submit" class="btn btn-primary float-end">Submit</button>
</form>
      </div>
    </div>
  </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
  </body>
</html>
