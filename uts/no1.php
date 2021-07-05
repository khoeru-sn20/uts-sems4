<?php 
error_reporting(0);
if(isset($_POST['submit'])) {
	$angka1 = $_POST['input1'];
	$angka2 = $_POST['input2'];
	$operator = $_POST['operator'];
if (!$angka1 == "" AND !$angka2 == "") {
	

	if ($operator == "tambah") {
		$hasil = $angka1 + $angka2;
	} elseif ($operator == "kurang"){
		$hasil = $angka1 - $angka2;
	}elseif ($operator == "kali"){
		$hasil = $angka1 * $angka2;
	}elseif ($operator == "bagi"){
		$hasil = $angka1 / $angka2;
	} }else {
		$isi = "isi dulu";
	}

}


?>
<!DOCTYPE html>
<html>
<head>
	<title>kalkulator</title>
</head>
<body>
<div class="container">
	
<div class="kalkulator">
	<h2>SIMPLE CALCULATOR</h2>
		<form method="post" action="">
			<input type="text" name="input1" placeholder="masukkan angka pertama"> <br><br>
			<select name="operator">
				<option value="tambah">+</option>
				<option value="kurang">-</option>
				<option value="kali">*</option>
				<option value="bagi">/</option>
			</select><br><br>
			<input type="text" name="input2" placeholder="masukkan angka kedua"> <br><br>
			<button type="submit" name="submit">submit</button>

			<div class="hasil"><textarea> <?php echo $hasil.$isi; ?></textarea></div>
		</form>
	</div>
</div>
</body>
</html>