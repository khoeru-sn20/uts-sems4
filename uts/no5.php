<form method="POST" action="">
<table>

<tr><td>Jumlah Ayam = </td>
	
<td><input type="text"name="jum"></td></tr>
	
<tr><td><input type="submit"value="kirim"></td></tr>
	
</table>
	
</form>
	
<?php
	
@$jum=$_POST['jum'];

//setelah saya amati terdapat kesalahan pada baris ke16 ini, kesalahannya yaitu dibagian $jum=$_POST['jum']; karena terdapat kekurangan pada penulisannya. Seharusnya kita tambahkan @ diawal sehingga menjadi @$jum=$_POST['jum'];
	
echo"Anak ayam turun $jum<br>";
	
$b=$jum;
	
for ($a=1;$a<=$b;$a++)

{
	
echo"Anak ayam turun $jum,";
	
$jum=$jum-1;
	
if($jum!=0)
	
echo"mati satu tinggal $jum<br>";

else	

echo"mati satu tinggal induknya<br>";
	
}
?>
