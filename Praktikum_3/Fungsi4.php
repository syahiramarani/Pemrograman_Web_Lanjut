<!DOCTYPE html>
<html >
<body>
    <?php
    //pemakaian fungsi UDF :Tanpa nilai balik
    function psgpjg ($pjg, $lbr){
        $luas = $pjg *$lbr;
        echo "$luas <br>";
    }
    $bil1 = 5; $bil2 = 3;
    echo "Luas persegi panjang dengan pjg 5 dan lebar 3 ="; 
    psgpjg($bil1,$bil2);

    ?>
    
</body>
</html>