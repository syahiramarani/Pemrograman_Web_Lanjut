<!DOCTYPE html>
<html>
<body>
    <?php
    echo "Mencari jumlah huruf vokal dalam suatu kata";
    echo "<br>";

    $jumlah = 0;
    $kata = "Belajar PHP ";
    $huruf = "a";
    for ($i = 0; $i < strlen($kata); $i++) {
        if (substr($kata, $i, 1) == $huruf) {
            $jumlah++;
        }
    }
    echo "Jumlah huruf " . $huruf . " dalam kata " . $kata . ":<br>"; // Tambahkan spasi dan titik koma di sini
    echo $jumlah;
    ?>
</body>
</html>
