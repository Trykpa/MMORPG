<html>
<head>
	<title>MMO RPG</title>
	<meta charset="UTF-8"/>
	<link rel="stylesheet" href="css.css">
</head>
<body>
<div id="pasek">
	<h1>MMO RPG - nazwe sie wymysli</h1>
</div>
<div id="srodek">

	<h2> Witaj na stronie głównej</h2>

	<div id="rejestracja">
		<h3>Rejestracja</h3>

<form method = "post" action = "<?php $_PHP_SELF ?>">
	Nazwa <input name = "name" type = "text" id="name"><br>
	Hasło <input name = "pass" type = "password" id="pass"><br>
	<button><input name = "add" type = "submit" id="add" value="Zarejestruj"></a><br></button>
</form>
	<?php
if(isset($_POST['add'])){
require('connect.php');
	$name = $_POST['name'];
	$pass = hash("sha256",$_POST['pass']);
	$sql = "INSERT INTO players (name, pass, level, Atak, Zycie) VALUES ('$name', '$pass', 0,0,0)";

if (null!=($_POST['name'] && $_POST['pass']))
{
	if(mysqli_query($conn, $sql)){
		
	}
	else{
		echo"Nie dziala : " . $sql . "<br>" . mysqli_error($conn);
	}
}
else{
	print("Musisz wypełnic wszystko");
	}
	mysqli_close($conn);

}
?>
<br><a href="login.php">Masz już konto? Kliknij</a>
	</div>
	</div>
	<div id="stopka">
	</div>
	</body>
</html>
