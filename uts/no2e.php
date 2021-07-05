<?php 
    @$panjang = $_GET['panjang'];
    @$lebar = $_GET['lebar'];
    @$keliling = 2 * ($panjang + $lebar);
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>PERSEGI PANJANG</title>
    </head>
    <body>
        <form method="GET">
            p (panjang) = 
            <input type="text" name="panjang" value="<?php echo $panjang; ?>"/>cm<br/>
            l (lebar) = 
            <input type="text" name="lebar" value="<?php echo $lebar; ?>"/>cm<br/>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Keliling Persegi Panjang = ".$keliling," cm";
            ?>
        </form>
    </body>
</hmtl>