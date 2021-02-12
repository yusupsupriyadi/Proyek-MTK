<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

  <title>Bintang</title>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="/">PROYEK MTK</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/yusup">Yusup</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/hafiz">Hafiz</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="/bintang">Bintang</a>
          </li>

        </ul>

      </div>
    </div>
  </nav>

  <!-- ---------------------------------------- -->
  <div class="container py-5">
    <form action="/bintang_proses" method="POST">
      @csrf

      <h1>Garis Singgung Lingkaran</h1>
      <div class="form-row">
      </div>
      <div class="form-group">
      </div>
      <div class="form-group">
      </div>
      <div class="form-row">
        <div class="form-group col-md-2">
          <input type="text" class="form-control" id="inputCity" name="a" placeholder="a">
        </div>
        <div class="form-group col-md-0">
          <h4> + </h4>
        </div>
        <div class="form-group col-md-2">
          <input type="text" class="form-control" id="inputCity" name="b" placeholder="b">
        </div>
        <div class="form-group col-md-0">
          <h4> = </h4>
        </div>
        <div class="form-group col-md-2">
          <input type="text" class="form-control" id="inputZip" name="r2" placeholder="r2" Required>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
        </div>
      </div>
      <button type="submit" class="btn btn-primary">Proses</button>
    </form>

    <div class="pt-3">
      <div class="md-3">
      </div>
      <div class="md-3">
        @if(session('info'))
        <div class="alert alert-info">
          {{ session('info')}}
        </div>
        @endif
      </div>
      <div class="md-3">
        @if(session('info2'))
        <div class="alert alert-info">
          {{ session('info2')}}
        </div>
        @endif
      </div>
    </div>
  </div>


  </div>


  <!-- --------------------------------------------- -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>