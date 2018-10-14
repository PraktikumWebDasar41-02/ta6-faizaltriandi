<?php
	$xnim="";
	$xnama="";
	$xpass="";
	$xrepass="";
	$xjk="";
	$xfakultas="";
	$xkelas="";
	$xhobi="";
	$xalamat="";
	
	if (isset($_POST['registrasi'])) {
		$nim = $_POST['nim'];
		$nama = $_POST['nama'];
		$password = $_POST['password'];
		$repass = $_POST['repass'];
		$jk = $_POST['jk'];
		$fakultas = $_POST['fakultas'];
		$kelas = $_POST['kelas'];
		$hobi = $_POST['hobi'];
		$alamat = $_POST['alamat'];

		$x = strlen($nim);
		$y = strlen($nama);

		if ($x != 10 || $y>25 || is_null($jk)|| is_null($nama)|| is_null($nim)|| is_null($password)|| is_null($repass) || is_null($fakultas) || is_null($hobi) || is_null($alamat)) {
				
				if ($x != 10 || !is_numeric($nim)) {
					$xnim = "Maaf Nim Harus 10 digit dan berbentuk angka";
				}if ($y > 25 || !preg_match('/^[a-z][A-Z]*$/', $nama)) {
					$xnama = "Maaf panjang nama harus kurang dari 25 karakter dan berupa huruf dan angka";
				}if (is_null($kelas)) {
					$xkelas = "Form kelas harus terisi";
				}if (is_null($jk)) {
					$xjk = "Form jenis kelamin harus terisi";
				}if (is_null($password) || $password !=$repass) {
					$xpass = "KETIK ULANG PASSWORD";
				}if (is_null($repass)) {
					$xrepass = "KETIK ULANG PASSWORD";
				}if (is_null($fakultas)) {
					$xfakultas = "Form Fakultas harus terisi";
				}if (is_null($hobi)) {
					$xhobi = "Form Hobi harus terisi";
				}if (is_null($alamat)) {
					$xalamat = "Form Alamat harus terisi";
				}
		}else{
			$password = md5($password);
			session_start();
			$_SESSION['nim'] =$nim;
			$_SESSION['nama'] =$nama;
			$_SESSION['password'] =$password;
			$_SESSION['jk'] =$jk;
			$_SESSION['fakultas'] =$fakultas;
			$_SESSION['kelas'] =$kelas;
			$_SESSION['hobi'] =$hobi;
			$_SESSION['alamat'] =$alamat;
			header("location: reproses.php");
		}
	}
?>
<form method="POST">
	<table border="1">
		<tr>
			<td> Registrasi. </td>
		</tr>
		<tr>
			<td> Nama </td>
			<td> <input type="text" name="nama"> </td>
			<td> <span style="color: red; font-family: verdana;"<?php $xnama ?>"></span> </td>
		</tr>
		<tr>
			<td> NIM </td>
			<td> <input type="number" name="nim"> </td>
			<td> <span style="color: red; font-family: verdana;"<?php $xnim ?>"></span> </td>
		</tr>
		<tr>
			<td> Password </td>
			<td> <input type="password" name="password"> </td>
			<td> <span style="color: red; font-family: verdana;"<?php $xpass ?>"></span> </td>
		</tr>
		<tr>
			<td> Verification re-Password </td>
			<td> <input type="password" name="repass"> </td>
			<td> <span style="color: red; font-family: verdana;"<?php $xrepass ?>"></span> </td>
		</tr>
		<tr>
			<td> Jenis Kelamin </td>
			<td> <input type="radio" name="jk" value="laki-laki"> Laki - Laki <br>
			<input type="radio" name="jk" value="Perempuan"> Perempuan 
			</td> </td>
		</tr>
		<tr>
			<td> Fakultas </td>
			<td> <select name="fakultas"><option value="Fakultas Ekonomi Bisnis" required=""> Fakultas Ekonomi Bisnis </option><option value="Fakultas Komunikasi" required=""> Fakultas Komunikasi </option><option value="Fakultas Industri Kreatif" required=""> Fakultas Industri Kreatif </option><option value="Fakultas Ilmu Elektro" required=""> Fakultas Ilmu Elektro </option><option value="Fakultas Elektro" required=""> Fakultas Informatika </option><option value="Fakultas Rekayasa Industri" required=""> Fakultas Rekayasa Industri </option></select> 
			</td>
			<td> <span style="color: red; font-family: verdana;"<?php $xfakultas ?>"></span> </td>
		</tr>
		<tr>
			<td> Kelas </td>
			<td><input type="radio" name="kelas" value="D3MI-41-01">D3MI-41-01 <br><input type="radio" name="kelas" value="D3MI-41-02"> D3MI-41-02 <br><input type="radio" name="kelas" value="D3MI-41-03"> D3MI-41-03 <br><input type="radio" name="kelas" value="D3MI-41-04"> D3MI-41-04 
			 </td>
		</tr>
		<tr>
			<td> Hobi </td>
			<td><input type="checkbox" name="hobi" value="Menggambar"> Menggambar <br><input type="checkbox" name="hobi" value="Membaca"> Membaca <br><input type="checkbox" name="hobi" value="Menulis"> Menulis <br></td>
		</tr>
		<tr>
			<td> Alamat </td>
			<td> <textarea name="alamat" values="alamat"></textarea></td>
			<td> <span style="color: red; font-family: verdana;"<?php $xalamat ?>"></span> </td>
		</tr>
		<tr>
			<td> <input type="submit" name="registrasi" value="registrasi"></td>
		</tr>
	</table>
</form>


