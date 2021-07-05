<?php
$angka_sebelumnya=2;
$angka_sekarang=3;
  
echo "$angka_sebelumnya $angka_sekarang";
 
for ($i=0; $i<5; $i++)
{
  
  $output = $angka_sekarang + $angka_sebelumnya;
  echo " $output";
  
  $angka_sebelumnya = $angka_sekarang;
  $angka_sekarang = $output;
}
 
?>