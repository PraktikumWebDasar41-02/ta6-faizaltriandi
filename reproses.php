<?php  
include('conn.php');
session_start();
	$nim = $_SESSION['nim'];
	$nama = $_SESSION['nama'];
	$password = $_SESSION['password'];
	$jk = $_SESSION['jk'];
	$fakultas = $_SESSION['fakultas'];
	$kelas = $_SESSION['kelas'];
	$hobi = $_SESSION['hobi'];
	$alamat = $_SESSION['alamat'];

	$sql = "INSERT INTO users(nama,nim,password,jenis_kelamin,fakultas,kelas,hobi,alamat) VALUES ('$nama','$nim','$password','$jk','$fakultas','$kelas','$hobi','$alamat')";

			if(mysqli_query($conn,$sql)) {
				echo "<center>ANDA TELAH TERDAFTAR DALAM DATABASE</center>";
				echo "Silahkan akses tombol<a href='login.php'>klik</a> berikut untuk ke halaman login";
			}else{
				echo "Error: ".$sql."<br><br>".$conn->error;
			}
			$conn->close();
			session_destroy();
?>
