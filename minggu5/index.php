<?php
function kalkulator(){
    $a = 10;
    $b = 5;
    
    echo "Bilangan 1 = " . $a . "<br> Bilangan 2 = " . $b;
    
    echo "<br><br> Berikut merupakan hasil dari setiap operasi ";
    
    echo "<br><br> PENJUMLAHAN <br> Operator : + <br> Hasil : ".($a+$b);
    echo "<br><br> PENGURANGAN <br> Operator : - <br> Hasil : ".($a-$b);
    echo "<br><br> PERKALIAN <br> Operator : * <br> Hasil : ".($a*$b);
    echo "<br><br> PEMBAGIAN <br> Operator : / <br> Hasil : ".($a/$b);
    echo "<br><br> MODULUS <br> Operator : % <br> Hasil : ".($a%$b);
}

function urutan(){
    echo " <br><br> Urutan data : <br> ";

    $data = array("larine", "aduh", "qifuat", "toda", "anevi", "samid", "sophia", "viranti", "sherin", "okta");
    sort($data);
    
    foreach ($data as $urut){
        echo "$urut <br>";
    }
}

function prima(){
    echo "<br><br> Bilangan Prima 1-50 : <br> ";
    
    for($i=1; $i<=50; $i++){ 
        $x=0;
        for($j=1; $j<=$i; $j++){ 
            if($i % $j == 0){ 
                $x++;
            }
        }
            if($x == 2){ 
            echo $i.',';
            }
    }
}
kalkulator();
urutan();
prima();
?>