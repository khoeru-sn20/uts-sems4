<?php 
    @$sisi = $_GET['sisi'];
    @$keliling = 12 * $sisi;
?>

<!DOCTYPE html>
<hmtl>
    <head>
        <title>KUBUS</title>
    </head>
    <body>
        <form method="GET">
            <table>
                <tr>
                    <td>sisi</td>
                    <td>=</td>
                    <td><input type="text" name="sisi" value="<?php echo $sisi; ?>"/>cm<br/></td>
                </tr>
            </table>
            <input type="submit" name="submit" value="SUBMIT"/><br/><br/>
            <?php
                echo "Keliling Kubus = ".$keliling." cm<br/>";
            ?>
        </form>
    </body>
</hmtl>