<!DOCTYPE html>
<html >
<body>
    <?php
    //melakukan break pada $i == 2
    for ($i = 0; $i<5; $i++){
        if ($i == 2){
            break;
        }
        echo ("Nilai i : $i <br>");
    }
    echo ("Loop selesai ");
    ?>
</body>
</html>