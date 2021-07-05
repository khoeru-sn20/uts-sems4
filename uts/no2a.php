<?php 
    @$jari_jari = $_GET['jari_jari'];
    @$luas = 22/7 * $jari_jari * $jari_jari;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>LUAS LINGKARAN</title>
    </head>
    <body>
        <form method="GET">
            d (diameter) = 
            <input type="text" name="jari_jari" value="<?php echo $jari_jari; ?>"/>cm<br/>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Luas Lingkaran = ".$luas," cm";
            ?>
        </form>
    </body>
</hmtl>