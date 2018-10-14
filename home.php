<?php
include_once "conn.php";
?>
<!DOCTYPE html>
<html>
<body>
	<?php 
	session_start();
	$nim = $_SESSION['nim']; ?>
	<center>
		s<table style="border-radius: 10px;border: 1.5px solid gray;" border="0" width="450" >
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
			<?php
			$query = mysqli_query($conn,"SELECT * FROM `users` WHERE `nim` = '$nim'");
			while ($d = mysqli_fetch_array($query)) {  
			?>
			
			<tr>
				<td>nama</td>
				<td>:</td>
				<td><?php echo $d[0]; ?></td>
			</tr>
			<tr>
				<td>nim</td>
				<td>:</td>
				<td><?php echo $d[1]; ?></td>
			</tr>
			<tr>
				<td>kelas</td>
				<td>:</td>
				<td><?php echo $d[3]; ?></td>
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>:</td>
				<td><?php echo $d[4]; ?></td>
			</tr>
			<tr>
				<td>Hobi</td>
				<td>:</td>
				<td><?php echo $d[5]; ?></td>
			</tr>
			<tr>
				<td>Fakultas</td>
				<td>:</td>
				<td><?php echo $d[6]; ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td>:</td>
				<td><?php echo $d[7]; ?></td>
			</tr>
			<tr>
				<td><a href="kelola.php">Kembali</a></td>
			</tr>
			<?php } ?>
	</table>
</body>
</html>