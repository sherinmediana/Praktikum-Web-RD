<?php

include("config.php");

if(isset($_POST['simpan'])){

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $nim = $_POST['nim'];
    $nomor = $_POST['nomor'];
    $esai = $_POST['esai'];

    $sql = "UPDATE mahasiswaukm SET nama='$nama', email='$email', nim='$nim', nomor='$nomor', esai='$esai' WHERE id=$id";
    $query = mysqli_query($db, $sql);

    if( $query ) {
        header('Location: listdata.php');
    } else {
        die("Gagal menyimpan perubahan...");
    }


} else {
    die("Akses dilarang...");
}

?>