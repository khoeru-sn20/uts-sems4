<html> 
    <head> 
        <title>Bank</title> 
    </head> 
    <body> <h2>BANK</h2> 
    <form method="post" action=""> 
    Saldo Awal = <input type="text" name="bil1" /><br />
    Lama Bulan = <input typr="text" name ="bil2"/><br/>
    <input type="submit" name="submit" value="kirim" />
    </form> 


 <?php
    if(isset($_POST['submit'])){
    $saldo= $_POST['bil1'];
    $time=$_POST['bil2'];
    if($saldo<2100000)
    {
    for($t=1;$t<=$time;$t++)
    {
        $akhir=($saldo-9000)+($saldo*0.03);
    }
    echo "Saldo awal = Rp.$saldo.
    Lama Bulan = $time bulan.
    Saldo Akhir = Rp.$akhir";
    }
   else 
   {
    {
        for($t=1;$t<=$time;$t++)
        {
            $akhir=($saldo-9000)+($saldo*0.04);
        }
        echo "Saldo awal = Rp.$saldo. 
        Lama Bulan = $time bulan.
        Saldo Akhir = Rp.$akhir";
        }
   }
}
?>

</body> 
</html>