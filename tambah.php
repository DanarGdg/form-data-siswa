<?php 
    require "function.php";

    if (isset($_POST["submit"])) {
        if (tambah($_POST) > 0) {
            echo "
                <script>
                    alert('data berhasil ditambahkan');
                    document.location.href = 'main.php';
                </script>
            ";
        } else {
            echo "
                <script>
                    alert('data gagal ditambahkan');
                    document.location.href = 'main.php';
                </script>
            ";
        }
    }
?>

<!DOCTYPE html>
<html lang="en">

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Belajar PHP</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
</head>

<body>
    <?php
    include 'navbar.php';
    ?>

    <div class="container">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <h3 align="center">Tambah Data Siswa</h3>
                        <form action="" method="POST">
                            <div class="form-group mb-3">
                                <label for="exampleInputName">Nama</label>
                                <input require type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Masukkan Nama" name="nama">
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputPassword1">Umur</label>
                                <input require type="number" class="form-control" id="exampleInputPassword1" placeholder="Masukkan Umur" name="umur">
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputName">Alamat</label>
                                <input require type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Masukkan Alamat" name="alamat">
                            </div>
                            <div class="form-group mb-3">
                                <label for="exampleInputName">Foto</label>
                                <input require type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Masukkan Foto" name="foto" value="">
                            </div>
                            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>

</html> 