<?php

include("config.php");

if(isset($_POST['daftar'])){

    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nim = $_POST['nim'];
    $nomor = $_POST['nomor'];
    $esai = $_POST['esai'];

    $sql = "INSERT INTO mahasiswaukm (nama, email, nim, nomor, esai) VALUE ('$nama', '$email', '$nim', '$nomor', '$esai')";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: listdata.php?status=sukses');
    } else {
        header('Location: listdata.php?status=gagal');
    }

} else {
    die("Akses dilarang...");
}
?>