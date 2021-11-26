<!DOCTYPE html>
<html>
<head>
    <style>
    body {
    background-image: url(https://cdn.wallpapersafari.com/63/49/s1ZhlQ.jpg);
} 
    
</style>
    <title>Tugas Minggu 7</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="formdaftar.css">
</head>
<body>
    <ul>
        <li><a href="index.php">Home</a></li>
        <li class="active"><a href="formdaftar.php">Daftar</a></li>
        <li><a href="listdata.php">Pendaftar</a></li>
        <li><a href="about.php">About</a></li>
        <li style="float:right"><a>DPA HMIF ITERA</a></li>
    </ul>
    <fieldset>
    <header>
        <h1>Formulir Pendaftaran Panitia Khusus </h1>
    </header>
  
    <center>
    <form action="prosesdaftar.php" method="POST">
        <p>
            <label for="nama">Nama : </label>
            <input type="text" name="nama" placeholder="Nama Lengkap" />
        </p>
        <p>
            <label for="nim">NIM : </label>
            <input type="text" name="nim" placeholder="1234567" />
        </p>
        <p>
            <label for="email">Email : </label>
            <input type="text" name="email" placeholder="user@gmail.com" />
        </p>
        <p>
            <label for="">No HP/WA : </label>
            <input type="number" name="NoHP/WA" placeholder="08********" />
        </p>
        <p>
            <label for="Esai">Esai : </label>
            <input type="text" name="Esai" placeholder="....." />
        </p>
        <hr>
        <p style="margin-top: 10px">
            <input type="submit" value="Daftar" name="daftar" class="button"/>
        </p>  
    </form>
    </center>
    </fieldset>
    
    </body>
</html>