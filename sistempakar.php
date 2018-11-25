<?php
	if(isset($_POST['submit'])){
		if(isset($_POST['p1']))
			$p1 = $_POST['p1'];
		else
			$p1 = 0;
		if(isset($_POST['p2']))
			$p2 = $_POST['p2'];
		else
			$p2 = 0;
		if(isset($_POST['p3']))
			$p3 = $_POST['p3'];
		else
			$p3 = 0;
		if(isset($_POST['p4']))
			$p4 = $_POST['p4'];
		else
			$p4 = 0;
		if(isset($_POST['p5']))
			$p5 = $_POST['p5'];
		else
			$p5 = 0;
		if(isset($_POST['p6']))
			$p6 = $_POST['p6'];
		else
			$p6 = 0;
		if(isset($_POST['p7']))
			$p7 = $_POST['p7'];
		else
			$p7 = 0;
		if(isset($_POST['p8']))
			$p8 = $_POST['p8'];
		else
			$p8 = 0;
		if(isset($_POST['p9']))
			$p9 = $_POST['p9'];
		else
			$p9 = 0;
		if(isset($_POST['p10']))
			$p10 = $_POST['p10'];
		else
			$p10 = 0;
		if(isset($_POST['p11']))
			$p11 = $_POST['p11'];
		else
			$p11 = 0;
		if(isset($_POST['p12']))
			$p12 = $_POST['p12'];
		else
			$p12 = 0;
		if(isset($_POST['p13']))
			$p13 = $_POST['p13'];
		else
			$p13 = 0;
		if(isset($_POST['p14']))
			$p14 = $_POST['p14'];
		else
			$p14 = 0;
		if(isset($_POST['p15']))
			$p15 = $_POST['p15'];
		else
			$p15 = 0;
		if(isset($_POST['p16']))
			$p16 = $_POST['p16'];
		else
			$p16 = 0;
		if(isset($_POST['p17']))
			$p17 = $_POST['p17'];
		else
			$p17 = 0;
		if(isset($_POST['p18']))
			$p18 = $_POST['p18'];
		else
			$p18 = 0;
		if(isset($_POST['p19']))
			$p19 = $_POST['p19'];
		else
			$p19 = 0;

		$g20 = 100/4;
        $g21 = 100/3;
        $g22 = 100/2;
        $g23 = 100/3;
        $g24 = 100/2;
        $g25 = 100/4;
        $g26 = 100/4;
        $g27 = 100/2;
        $g28 = 100/5;
        $g29 = 100/2;
        $g30 = 100/2;
        $g31 = 100/2;
        $g32 = 100/2;

		$s20 = (($p1 * $g20) + ($p2 * $g20) + ($p4 * $g20) + ($p5 * $g20));
        $s21 = (($p4 * $g21) + ($p5 * $g21) + ($p6 * $g21));
        $s22 = (($p4 * $g22) + ($p7 * $g22));
        $s23 = (($p4 * $g23) + ($p8 * $g23) + ($p9 * $g23));
        $s24 = (($p8 * $g24) + ($p10 * $g24));
        $s25 = (($p4 * $g25) + ($p5 * $g25) + ($p9 * $g25) + ($p11 * $g25));
        $s26 = (($p4 * $g26) +($p8 * $g26) + ($p11 * $g26) + ($p12 * $g26));
        $s27 = (($p4 * $g27) + ($p13 * $g27));
        $s28 = (($p1 * $g28) + ($p2 * $g28) + ($p3 * $g28) + ($p4 * $g28) + ($p5 * $g28));
        $s29 = (($p14 * $g29) + ($p15 * $g29));
        $s30 = (($p14 * $g30) + ($p16 * $g30));
        $s31 = (($p14 * $g31) + ($p17 * $g31));
        $s32 = (($p18 * $g32) + ($p19 * $g32));

		$g33 = 100/5;
		$g34 = 100/5;
		$g35 = 100/6;
		$g36 = 100/3;
		$g37 = 100/4;

		$s33=(($s20*$g33)+($s21*$g33)+($s22*$g33)+($s23*$g33)+($s29*$g33))/100;
		$s34=(($s20*$g34)+($s21*$g34)+($s22*$g34)+($s24*$g34)+($s30*$g34))/100;
		$s35=(($s20*$g35)+($s21*$g35)+($s22*$g35)+($s25*$g35)+($s26*$g35)+($s29*$g35))/100;
		$s36=(($s21*$g36)+($s27*$g36)+($s31*$g36))/100;
		$s37=(($s28*$g37)+($s22*$g37)+($s25*$g37)+($s32*$g37))/100;

		echo "<strong>Hasil Diagnosa :</strong> <br>";
		echo "Keracunan Staphylococcus Aureus = ".$s33."%<br>";
		echo "Keracunan Jamur Beracun = ".$s34."%<br>";
		echo "Keracunan Salmonellae = ".$s35."%<br>";
		echo "Keracunan Clostridium Botulinum = ".$s36."%<br>";
		echo "Keracunan Campylobacter = ".$s37."%<br>";

		$data = array($s33,$s34,$s35,$s36,$s37);
		$i;
		$hasil = $data[0];
		for($i=0; $i<5;$i++){
			if($data[$i] >= $hasil)
				$hasil = $data[$i];
		}
		$thld = $_POST['thld'];
		if($hasil >= $thld){
			if($hasil == $s33)
				echo "<br><strong>Kesimpulan :</strong><br> Anda Keracunan Staphyloccus aureus";
			else if($hasil == $s34)
				echo "<br><strong>Kesimpulan :</strong><br> Anda Keracunan Jamur Beracun";
			else if($hasil == $s35)
				echo "<br><strong>Kesimpulan :</strong><br> Anda Keracunan Salmonellae";
			else if($hasil == $s36)
				echo "<br><strong>Kesimpulan :</strong><br> Anda Keracunan Clostridium Botulinum";
			else
				echo "<br><strong>Kesimpulan :</strong><br> Anda Keracunan Campylobacter";
		}else{
			echo "<br><strong>Kesimpulan :</strong><br> Penyakit Tidak Terdeteksi";
		}
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2 align="center">Daftar Pertanyaan</h2>
<h2>Daftar Pertanyaan</h2>
<form action="sistempakar.php" method="post">
	<input type="checkbox" name="p1" value="1"> Apakah anda sering mengalamai buang air besar (>2x)?<br>
	<input type="checkbox" name="p2" value="1"> Apakah anda mengalami berak encer?<br>
	<input type="checkbox" name="p3" value="1"> Apakah anda mengalami berak berdarah?<br>
	<input type="checkbox" name="p4" value="1"> Apakah anda merasa lesu dan tidak bergairah?<br>
	<input type="checkbox" name="p5" value="1"> Apakah anda tidak selera makan?<br>
	<input type="checkbox" name="p6" value="1"> Apakah anda merasa mual dan sering muntah (>1x)?<br>
	<input type="checkbox" name="p7" value="1"> Apakah anda merasa sakit dibagian perut?<br>
	<input type="checkbox" name="p8" value="1"> Apakah tekanan darah anda rendah?<br>
	<input type="checkbox" name="p9" value="1"> Apakah anda merasa pusing?<br>
	<input type="checkbox" name="p10" value="1"> Apakah anda mengalami pingsan?<br>
	<input type="checkbox" name="p11" value="1"> Apakah suhu badan anda tinggi?<br>
	<input type="checkbox" name="p12" value="1"> Apakah anda mengalami luka dibagian tertentu?<br>
	<input type="checkbox" name="p13" value="1"> Apakah anda tidak dapat menggerakkan anggota badan tertentu?<br>
	<input type="checkbox" name="p14" value="1"> Apakah anda pernah memakan sesuatu?<br>
	<input type="checkbox" name="p15" value="1"> Apakah anda makan daging?<br>
	<input type="checkbox" name="p16" value="1"> Apakah anda makan jamur?<br>
	<input type="checkbox" name="p17" value="1"> Apakah anda memakan makanan kaleng?<br>
	<input type="checkbox" name="p18" value="1"> Apakah anda membeli susu?<br>
	<input type="checkbox" name="p19" value="1"> Apakah anda meminum susu?<br>
	<br>
	Masukkan Nilai Treshold :
	<input type="number" name="thld" value=""> %
	<br>
	<input type="submit" name="submit" value="Submit">

</form>

</body>
</html>