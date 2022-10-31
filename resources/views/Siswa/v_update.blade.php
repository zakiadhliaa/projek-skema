<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>siswa</title>
  </head>
  <body>
    <h1 class="text-center mb-4">Edit Data Siswa</h1>
    <div class="container">
        <div class="row justify-content-center">
            <diV class="col-8">
             <div class="card">
                <div class="card-body">
                    <form action="/updatedata/{{ $data->id }}" method="post">
                        @csrf
                    <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Nisn</label>
                        <input type="number" name="nisn" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nisn }}">
                    </div>
                    <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Nama Lengkap</label>
                        <input type="text" name="nama" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->nama }}">
                    </div>
                    <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Kelas</label>
                        <input type="text" name="kelas" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->kelas }}">
                    </div>
                    <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Jurusan</label>
                        <input type="text" name="jurusan" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{ $data->jurusan }}">
                    </div>
                    <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">Jenis Kelamin</label>
                         <select class="form-select" name="jeniskelamin" aria-label="Default select example">
                                <option selected>{{ $data->jeniskelamin }}</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-3">
                         <label for="exampleInputEmail1" class="form-label">No.Telpon</label>
                        <input type="number" name="telpon" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"value="{{ $data->telpon }}">
                    </div>
                    
                    <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    </diV>
                </div>
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
  </body>
</html>