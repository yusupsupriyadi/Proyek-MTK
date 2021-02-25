<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <title>KELOMPOK-X</title>
  </head>
  <body class="bg-yellow-400">
    <nav class="navbar navbar-expand-lg navbar-dark bg-yellow-600 border-black border-b-2">
  <div class="container-fluid">
    <a class="navbar-brand font-bold text-black" href="/">Back</a>
</nav>

<div class="container mx-auto px-4 py-4">
    <div class="bg-white rounded-xl border-black border-2 border-b-8">
      <div class="p-5">
        <form action="/hafiz_proses" method="POST">
      @csrf

      <h1 class="font-bold text-2xl">Menentukan persamaan lingkaran dengan pusat (a,b) dan Jari-jari</h1>
      <div class="form-row">
      </div>
      <div class="form-group">
      </div>
      <div class="form-group">
      </div>
      <div class="form-row">
        <div class="form-group col-md-2">
          <input type="number" class="form-control border-black border-2 border-b-4 rounded-lg" id="inputCity" name="a" placeholder="a" >
        </div>
        <div class="form-group col-md-0">
          <h4> + </h4>
        </div>
        <div class="form-group col-md-2">
          <input type="number" class="form-control border-black border-2 border-b-4 rounded-lg" id="inputCity" name="b" placeholder="b">
        </div>
        <div class="form-group col-md-0">
          <h4> = </h4>
        </div>
        <div class="form-group col-md-2">
          <input type="number" class="form-control border-black border-2 border-b-4 rounded-lg" id="inputZip" name="r2" placeholder="Jari-Jari" Required>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
        </div>
      </div>
      <button type="submit" class="btn btn-primary border-black border-2 border-b-4 font-bold rounded-2xl">Proses</button>
    </form>
    <div class="pt-3">
    <div class="md-3">
        @if(session('info_hafiz'))
        <div class="alert alert-info border-black border-2 border-b-8 font-bold">
          {{ session('info_hafiz')}}
        </div>
        @endif
      </div>
    </div>
    </div>
    </div>
    </div>

    <div class="pt-4">

    </div>

{{-- -------------------------------------------------------------------------------------------------------------------------------------------------------------------- --}}
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>