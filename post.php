<?php include("conn.php") ?>
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
<form method="post" enctype="multipart/form-data">
    <p>FOTO:</p>
    <input type="file" name="Filename"> 
    <p>Description</p>
    <textarea rows="20" cols="80" name="postingan"></textarea>
    <br/>
    <input TYPE="submit" name="upload" value="posting"/>
</form>
<?php 
	session_start();
	if (isset($_POST['upload'])) {
		$nim = $_SESSION['nim'];
		
		$target = "foto";
		$target = $target . basename( $_FILES['Filename']['name']);
		
		$Filename = $_POST['Filename'];
		$postingan = $_POST['postingan'];
		$post = count(explode(" ", $postingan));
		$pic=($_FILES['Filename']['name']);
		if ($post < 30) {
			echo "kolom deskripsi harus lebih dari 30 kata";
		}else{
			mysqli_query($conn,"INSERT INTO posting (nim,foto,post)
			VALUES ('$nim','$Filename', '$postingan')") ;
		}
		if(move_uploaded_file($_FILES['Filename']['tmp_name'], $target)) {
		    echo "The file ". basename( $_FILES['uploadedfile']['Filename']). " has been uploaded, and your information has been added to the directory<br>";
		    echo "<a href='home.php'></a> to move to HOME";
		} else {
		    echo "Sorry, there was a problem uploading your file.";
		}
	}
?>