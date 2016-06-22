<?php include "db.php"; 

if (isset($_POST['send'])){
$lead=$_POST['lead'];
$desc=$_POST['desc'];
$photo=$_FILES['photo'];
$photoname=$photo ['name'];
$phototype=$photo ['type'];
$photosize=$photo ['size'];
$phototmp=$photo ['tmp_name'];

$name=date('dmY').$photo ['name'];
$move=move_uploaded_file($phototmp,"upload/$name");
$url="upload/". $name;

$query = "INSERT INTO news (lead,desca,photo) VALUES ('$lead','$desc','$url')";

if (mysqli_query($conn,$query)){
	echo "Xeber elave olundu";
}else {
	echo "Sehv".$query . mysqli_error($conn);
}

}

?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style> 
input{
padding:5px;
margin:5px;
}
	</style>
</head>
<body>
<form action="" method="post" enctype="multipart/form-data">
<p>Xeberin adi:</p>
<input type="text" name="lead"><br />
<p>Xeberin ici :</p> <textarea rows="10" cols="45" name="desc"></textarea><br />
Sekil: <input type="file" name="photo"><br />
<input type="submit" name="send">
</form></body>
</html>