<!doctype html>
<html lang="en">
  <head>
    <title>Aplikasi Keuangan</title>
    @include('Template.head')
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Bulan</title>
  </head>
    <body class="hold-transition sidebar-mini">
        <div class="wrapper">
            @include('Template.navbar')
            @include('Template.left-sidebar')
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <div class="content-header">
                  <div class="container-fluid">
                    <div class="row mb-2">
           <!-- <h1 class="text-center mb-4">Daftar Data Siswa</h1> -->
        </div>
<div class="d-flex flex-wrap">
    @foreach ($bulan as $b)
<div class="col-3">
    <div class="card" style="width: 18rem;">
        {{-- <img src="..." class="card-img-top" alt="..."> --}}
        <div class="card-body " style="background-color: rgb(11, 224, 224)">
          <h3 class="card-title">{{$b->bulan}}</h3>
          <p class="card-text">Rp.{{$b->total1 + $b->total2 + $b->total3 +$b->total4  }}</p>
          <a href="/bulan/{{$b->id}}" class="btn btn-dark">Go somewhere</a>
        </div>
      </div>

</div>
    @endforeach
</div>
          </div>
        </div>


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
    @include('Template.script')
  </body>
</html>
