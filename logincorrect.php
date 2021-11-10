	<?php


$GameLink = "game.php";
if (isset($_POST["name"]) and isset($_POST['pass'])){
	$name = $_POST['name'];
	$pass = hash("sha256",$_POST['pass']);


$query = "SELECT * FROM `players` WHERE name = '$name' and pass = '$pass'";
	 $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

	 $count = mysqli_num_rows($result);

	if($count == 1){
		header('Location: game.php');
	}
	else{
		echo "zle haslo";
	}
}
?>