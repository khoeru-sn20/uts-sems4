<?php 
    @$diameter = $_GET['diameter'];
    @$keliling = 22/7 * $diameter;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>KELILING LINGKARAN</title>
    </head>
    <body>
        <form method="GET">
            d (diameter) = 
            <input type="text" name="diameter" value="<?php echo $diameter; ?>"/>cm<br/>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Keliling Lingkaran = ".$keliling," cm";
            ?>
        </form>
    </body>
</hmtl>