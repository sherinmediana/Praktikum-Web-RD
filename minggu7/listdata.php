<?php include("config.php"); ?>

<!DOCTYPE html>
<html>
<head>
    <title>Tugas Minggu 7</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="listdata.css">
</head>
<body>

    <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="formdaftar.php">Daftar</a></li>
        <li class="active"><a href="listdata.php">Data Pendaftar</a></li>
        <li><a href="about.php">About</a></li>
        <li style="float:right"><a>DPA HMIF ITERA</a></li>
    </ul>


    <header>
        <h2>Mahasiswa yang sudah mendaftar</h2>
    </header>

    <div class="container">
    <table>
    <thead>
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Email</th>
            <th>NIM</th>
            <th>No HP/WA</th>
            <th>Esai</th>
            <th>Action</th>
        </tr>
    </thead>
    <tbody>

        <?php
        $sql = "SELECT * FROM mahasiswaukm";
        $query = mysqli_query($db, $sql);

        while($mahasiswa = mysqli_fetch_array($query)){
            echo "<tr>";

            echo "<td>".$mahasiswa['id']."</td>";
            echo "<td>".$mahasiswa['nama']."</td>";
            echo "<td>".$mahasiswa['email']."</td>";
            echo "<td>".$mahasiswa['nim']."</td>";
            echo "<td>".$mahasiswa['nomor']."</td>";
            echo "<td>".$mahasiswa['esai']."</td>";

            echo "<td>";
            echo "<a href='update.php?id=".$mahasiswa['id']."'>Edit</a> | ";
            echo "<a href='hapus.php?id=".$mahasiswa['id']."'>Hapus</a>";
            echo "</td>";

            echo "</tr>";
        }
        ?>

    </tbody>
    </table>
    <a href="formdaftar.php"> <button type="submit">Tambah</button></a> <br>

    <?php if(isset($_GET['status'])): ?>
    <p>
        <?php
            if($_GET['status'] == 'sukses'){
                echo "Pendaftaran Ketua Panitia Khusus Berhasil";
            } else {
                echo "Pendaftaran gagal!";
            }
        ?>
    </p>
    <?php endif; ?>

    </div>
    </div>
    </body>
</html>