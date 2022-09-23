<?php
    require "function.php";
    echo date('Y-m-d H:i:s');
    $dataSiswaSql = mysqli_query($conn, "SELECT * FROM siswa")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <style>
        *{
            margin: 0;
            padding:0;
        }
    </style>
</head>
<body>
    <?php include 'navbar.php' ?>
    <h1 class="text-center">Data siswa</h1>
    <!-- navbar -->

    <div style="width: 80%; margin: 0 auto; border: solid 1px black;">
        <button class="btn btn-primary float-end" type="submit"><a class="text-light" href="tambah.php">Tambah data baru</a></button>
        <table class="table table-striped" style="vertical-align: middle; font-weight: bold; font-size: 20px;">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>Nama</th>
                        <th>Umur</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                        <th>Tanggal Buat</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($dataSiswaSql as $siswa) : ?>
                        <tr>
                            <td><?= $siswa["id"]; ?></td>                        
                            <td><?= $siswa["nama"]; ?></td>
                            <td><?= $siswa["umur"]; ?></td>
                            <td><?= $siswa["alamat"]; ?></td>
                            <td>
                                <a type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalDetail<?=$siswa['id']?>">Detail</a>
                                <a class="btn bg-warning text-white" href="ubah.php?id=<?=$siswa['id']?>">Ubah</a>
                                <a class="btn bg-danger text-white" href="hapus.php?id=<?=$siswa['id']?>"  onclick="return confirm('Yakin Ingin Menghapus Data?');">Hapus</a>
                            </td>   
                            <td><?= $siswa["tanggalBuat"]; ?></td>
                        </tr>
                        <!-- Modal -->
                        <div class="modal fade" id="modalDetail<?=$siswa['id']?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLongTitle">Modal title</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <label for="">Nama</label>
                                    <input require type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Masukkan Nama" name="nama"
                                    value="<?= $siswa["nama"]?>">
                                    <label for="">Umur</label>
                                    <input require type="name" class="form-control" id="exampleInputName" aria-describedby="emailHelp" placeholder="Masukkan Nama" name="nama"
                                    value="<?= $siswa["umur"]?>">
                                    <label for="">Alamat</label>
                                    <input require type="name" class="form-control mb-5" id="exampleInputName" aria-describedby="emailHelp" placeholder="Masukkan Nama" name="nama"
                                    value="<?= $siswa["alamat"]?>">
                                    <img src=asset/<?= $siswa["foto"]; ?> alt="<?= $siswa["nama"]; ?>" height="150">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>
</html>
