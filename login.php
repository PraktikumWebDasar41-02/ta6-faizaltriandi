<?php include("conn.php"); ?>
<!-- <table>
	<form method="POST">
		<tr>
			<td>
				NIM
			</td>
			<td>
				<input type="text" name="nim" placeholder="masukan NIM">
			</td>
		</tr>
		<tr>
			<td>
				PASSWORD
			</td>
			<td>
				<input type="text" name="pass" placeholder="masukan password">
			</td>
		</tr>
		<tr>
			<td>
				<input type="submit" name="login" value="login">
			</td>
			<td>
				<a href="registrasi.php">klik</a> untuk mendaftar
			</td>
		</tr>
	</form>
</table> -->
<form>
	<table>
		<tr>
			<td> Login. </td>
		</tr>
		<tr>
			<td> Nama </td>
			<td> <input type="text" name="nim" placeholder="input NIM anda"></td>
		</tr>
		<tr>
			<td> Password </td>
			<td> <input type="password" name="pass" placeholder="input password anda"> </td>
		</tr>
		<tr>
			<td colspan="2"><input type="submit" name="login" value="login"></td>
			<td> <a href="registrasi.php"> Klik </a> Jika belum memiliki akun</td>
		</tr>
	</table>
</form>
<?php 
session_start();
if (isset($_POST['login'])) {
	$nim = $_POST['nim'];
	$password = $_POST['pass'];
	$password = md5($password);

	$query = "SELECT * FROM `users` WHERE nim ='$nim' AND password = '$password'";
	
	$result = mysqli_query($conn, $query);

	if (mysqli_num_rows($result) > 0) {
		$_SESSION['nim'] = $nim;
		header("location: home.php");
	}else{
		echo "Inputan kurang tepat atau Anda belum memiliki akun";
	}
}
?>