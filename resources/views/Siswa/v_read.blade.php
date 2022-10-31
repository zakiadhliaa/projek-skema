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

    <title>Data siswa</title>
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
          <h1 class="text-center mb-4">Daftar Data Siswa</h1>
          <div class="container">
               <a href="/tambahsiswa" class="btn btn-dark">Tambah Data(+)</a>
               <div class="row g-3 align-items-center mt-2">
              <div class="col-auto">
            <form action="/siswa" method="GET">
              <input type="search" id="inputPassword6" name="search" placeholder="Search..." class="form-control" aria-describedby="passwordHelpInline">
           </form>
            </div>
        </div>
          <div class="mt-8">
                @if ($message = Session::get('succes'))
                <div class="alert alert-warning" role="alert">
                  {{ $message }}
               </div>
                @endif
        <table class="table table-primary">
            <thead>
                <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nisn</th>
                    <th scope="col">Nama Siswa</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Jurusan</th>
                    <th scope="col">jenis Kelamin</th>
                    <th scope="col">No Tlp</th>
                    <th scope="col">Aksi</th>
               </tr>
  </thead>
        <tbody>
          @php
            $no = 1;
          @endphp
                   @foreach ($data as $row)
               <tr>
                    <th scope="row">{{ $no++ }}</th>
                      <td>00{{ $row->nisn }}</td>
                      <td>{{ $row->nama }}</td>
                      <td>{{ $row->kelas }}</td>
                      <td>{{ $row->jurusan }}</td>
                      <td>{{ $row->jeniskelamin }}</td>
                      <td>0{{ $row->telpon }}</td>
                <td>
                    <a href="/tampildata/{{ $row->id }}" class="btn btn-dark">Edit</a>
                    <a href="/delete/{{ $row->id }}" class="btn btn-danger">Delete</a>
               </td>
                </tr>
               @endforeach
        </tbody>
      </table>
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
