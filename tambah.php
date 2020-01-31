<?php 
if(isset($_POST['simpan'])){
	include 'koneksi.php';
	$Kata=$_POST[''];
	$Pertanyaan=$_POST['Berita'];
	$last = mysqli_query($konek,"ALTER TABLE pertanyaan AUTO_INCREMENT = 1");
	$input=mysqli_query($konek,"INSERT INTO pertanyaan  VALUES('$id','$Kata','$Pertanyaan')") or die (mysqli_error($konek));
	if($input){
		header('Location:index.php?rute=koleksi');
			
		}
	}



?>