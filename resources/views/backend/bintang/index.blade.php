<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>bintang</title>
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

  <div class="container py-5">
    <h1>(tugas)</h1>
    <form action="/bintang_proses" method="POST">
      @csrf

      <h1>Menentukan persamaan lingkaran dengan pusat O(0,0)</h1>
      <h5 class="pt-5">Input Titik Pusat dan Jaring-Jaring Lingkaran</h5>
      <div class="form-row">
        <div class="form-group col-md-2">
          <input type="text" class="form-control" aria-describedby="emailHelp" name="x1" placeholder="x1" Required>
        </div>
        <div class="form-group col-md-2">
          <input type="text" class="form-control" name="y1" placeholder="y1" Required>
        </div>
      </div>
      <div class="form-group">
      </div>
      <div class="form-group">
      </div>
      <div class="form-row">
        <div class="form-group col-md-2">
          <input type="text" class="form-control" id="inputCity" placeholder="x2" required>
        </div>
        <div class="form-group col-md-0">
          <h4> + </h4>
        </div>
        <div class="form-group col-md-2">
          <input type="text" class="form-control" id="inputCity" placeholder="y2" required>
        </div>
        <div class="form-group col-md-0">
          <h4> = </h4>
        </div>
      </div>
      <div class="form-group">
        <div class="form-check">
        </div>
      </div>
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
    </div>

    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
</body>

</html>