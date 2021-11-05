<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA MAHASISWA</title>
</head>
<body>
    <hr>
    <section class="">
        <div class="row">
            <div class="col-6">
                <div id="read_data"></div>
            </div>
            <div class="col-6">
                <h2>FORM DATA MAHASISWA</h2>
                <form action="" method="POST" id="form_mahasiswa">
                    <label for="id" id="id_label" hidden >id :</label>
                    <input type="text" name="id" id="id" hidden readonly> <br> <br>
                    <label for="">NIM : </label>
                    <input type="text" name="nim" id=""> <br> <br>
                    <label for="">Nama : </label>
                    <input type="text" name="nama" id=""> <br> <br>
                    <label for="">Prodi : </label>
                    <select name="prodi" id="">
                        <option value="Teknik Informatika">Teknik Informatika</option>
                        <option value="Teknik Elektro">Teknik Elektro</option>
                    </select> <br> <br>
                    <label for="">Angkatan : </label>
                    <input type="text" name="angkatan" id=""> <br> <br>
                    <button class="btn btn-success" id="submit">Tambahkan</button>
                    <button class="btn btn-primary" id="update" hidden>Update</button>
                    <button class="btn btn-danger" id="cancel" hidden>Cancel Update</button>
                </form>
            </div>
        </div>
    </section>
</body>
<script src="jquery-3.5.1.min.js"></script>
<script src="index.js"></script>
</html>