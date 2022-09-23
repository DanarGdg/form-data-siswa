<?php
    $conn = mysqli_connect("localhost", "root", "", "sqldatabase");
    function query($query){
        global $conn;
        $result = mysqli_query($conn, $query);
        while ($row = mysqli_fetch_assoc($result)) {
            $rows[] = $row;
        }
        return $rows;
    }

    function tambah($data){
        global $conn;
        $nama = htmlspecialchars($data["nama"]);
        $umur = htmlspecialchars($data["umur"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $foto = htmlspecialchars($data["foto"]);
        $tanggal = htmlspecialchars($data[date('Y-m-d')]);

        $query = "INSERT INTO siswa VALUES ('', '$nama', '$umur', '$alamat', '$foto', CURRENT_TIMESTAMP)";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }

    function hapus($id){
        global $conn;
        mysqli_query($conn,"DELETE FROM siswa WHERE id=$id");
        return mysqli_affected_rows($conn);
    }

    function ubah($data){
        global $conn;
        $id = $_GET['id'];
        $nama = htmlspecialchars($data["nama"]);
        $umur = htmlspecialchars($data["umur"]);
        $alamat = htmlspecialchars($data["alamat"]);
        $foto = htmlspecialchars($data["foto"]);

        
        $query = "UPDATE siswa SET nama = '$nama', umur = $umur, alamat = '$alamat', foto = '$foto' WHERE id = $id";

        mysqli_query($conn, $query);

        return mysqli_affected_rows($conn);
    }
?>