<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="index.css">
    <title>Praktikum Minggu 6</title>
</head>
<body align="center">
    <h1> Toko Buah ITERA </h1>
        <table align="center">
            <tr> 
                <td>No</td>
                <td>Pilihan Buah</td>
                <td>Harga /kg</td>
            </tr>

            <tr>
                <td>1</td>
                <td>Mangga</td>
                <td>Rp.15.000,-</td>
            </tr>
            <tr>
                <td>2</td>
                <td>Jambu</td>
                <td>Rp.13.000,-</td>
            </tr>
            <tr>
                <td>3</td>
                <td>Salak</td>
                <td>Rp.10.000,-</td>
            </tr>
            
        </table>
    
    <br><br>

    
    <form align="left" method="POST" onsubmit="totalharga()">
    <ul>
        <li>
            <label for="mangga" class="form-label"> Mangga : </label>
            <input type="number" name="mangga" id="mangga" class="form-control" required> <br>
        </li>
        <li>
            <label for="jambu" class="form-label"> Jambu : </label>
            <input type="number" name="jambu" id="jambu"  class="form-control" required> <br>
        </li>
        <li>
            <label for="salak" class="form-label"> Salak : </label>
            <input type="number" name="salak" id="salak" class="form-control" required> <br>
        </li>
        <li align="center">
            <input type="submit" name="submit" value="Total">
        </li>
    </ul>
        </form>  
    

    <div id="hasil"></div>
    <script type="text/javascript">
        <?php

            class mangga{
                private $harga;
                public function __construct($jumlah)
                {
                    $this->jumlah = $jumlah;
                    $this->harga  = 15000;
                }

                public function jum_mangga()
                {
                    return $this->jumlah;
                }

                public function harga_mangga()
                {
                    return $this->harga;
                }
            }

            class jambu{
                private $harga;
                public function __construct($jumlah)
                {
                    $this->jumlah = $jumlah;
                    $this->harga  = 13000;
                }

                public function jum_jambu()
                {
                    return $this->jumlah;
                }

                public function harga_jambu()
                {
                    return $this->harga;
                }
            }

            class salak{
                private $harga;
                public function __construct($jumlah)
                {
                    $this->jumlah = $jumlah;
                    $this->harga  = 10000;
                }

                public function jum_salak()
                {
                    return $this->jumlah;
                }

                public function harga_salak()
                {
                    return $this->harga;
                }
            }

        ?>

        function totalharga(){
            event.preventDefault()

            var total_mangga = document.getElementById('mangga').value * 15000;
            var total_jambu  = document.getElementById('jambu').value * 13000;
            var total_salak  = document.getElementById('salak').value * 10000;

            var total = total_mangga + total_jambu + total_salak;

            output = document.getElementById('hasil');
            output.innerHTML = "Total Pembayaran = Rp. "+total;
        }
</script>
</body>
</html>