<?php include("conn.php")?>
<!DOCTYPE html>
<html>
<body>
<center>
		<table style="border-radius: 10px;border: 1.5px solid gray;" border="0" width="450" >
			<tr style="font-family: product-sans">
				<td>
					<a href="home.php">HOME</a>
				</td>
				<td>
					<a href="post.php">POST</a>
				</td>
				<td>
					<a href="listpost.php">LIST</a>
				</td>
				<td>
					<a href="semuaposting.php">ALL POST</a>
				</td>
				<td>
					<a href="edit.php">EDIT</a>
				</td>
				<td>
					<a href="logout.php">Logout</a>
				</td>
			</tr>
		</table>
		<br><br>
		<table>
	<table>
		<form method="POST">
			<?php
			session_start();
				$nim = $_SESSION['nim'];
				$query = mysqli_query($conn,"SELECT `nama`, `nim`,`kelas`,`jenis_kelamin`,`hobi`,`fakultas`,`alamat` FROM `users` WHERE `nim` = '$nim'");
				while ($d = mysqli_fetch_array($query)) {
				?>
				<tr>
					<td>Nim :</td>
					<td><input type="hidden" name="nim" value="<?php echo $d['nim']; ?>"></td>
				</tr>
				<tr>
					<td>Nama :</td>
					<td><input type="text" name="nama" value="<?php echo $d['nama']; ?>"></td>
				</tr>
				<tr>
					<td>Jenis Kelamin :</td>
					<td><input type="text" name="jk" value="<?php echo $d['jenis_kelamin']; ?>"></td>
				</tr>
				<tr>
					<td>fakultas :</td>
					<td><input type="text" name="fakultas" value="<?php echo $d['fakultas']; ?>"></td>
				</tr>
				<tr>
					<td>Kelas :</td>
					<td><input type="text" name="kelas" value="<?php echo $d['kelas']; ?>"></td>
				</tr>
				<tr>
					<td>hobi :</td>
					<td><input type="text" name="hobi" value="<?php echo $d['hobi']; ?>"></td>
				</tr>
				<tr>
					<td>Alamat :</td>
					<td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
				</tr>
				<tr>
					<td><input type="submit" name="edit" value="Update"></td>
				</tr>
				<?php } ?>
		</form>
	</table>
</body>
</html>
<?php
if (isset($_POST['edit'])) {
	$nim = $_POST['nim'];
	$_SESSION['nim'] = $nim;
	$nama = $_POST['nama'];
	$jk = $_POST['jk'];
	$fakultas = $_POST['fakultas'];
	$kelas = $_POST['kelas'];
	$hobi = $_POST['hobi'];
	$alamat = $_POST['alamat'];
	$query = "UPDATE `users` SET `nama`='$nama',`kelas`='$kelas',`jenis_kelamin`='$jk',`hobi`='$hobi',`fakultas`='$fakultas',`alamat`='$alamat' WHERE `nim` = '$nim'";
	if (mysqli_query($conn,$query)) {
		echo "Update done. <br>";
		echo "<a href='home.php'>KLIK</a> ke Home";
	} else {
		echo "Error Update.<br>";
		echo "<a href='home.php'>KLIK</a> ke Home";
	}
}
?>