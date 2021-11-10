<html>
<head>
<meta charset="UTF-8">
<link rel="stylesheet" href="cssGame.css">
<title>RPG MMO GAME</title>
</head>
<body>
<div id="postac">
<?php
require("connect.php");

$sql = "SELECT * FROM players";

$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
	echo "<h1>".$row["name"]."</h1>";
	echo "Poziom: ".$row["level"]."<br>";
	echo "Atak : ".$row["Atak"]."<br>";
	echo "Życie : ".$row["Zycie"]."<br>";
	break;
}
?>
<a href="index.php">Wyloguj się</a>
</div>
<div id="ranking">
	<h1>Najlepsi gracze</h1>
<?php
$sql = "SELECT * FROM players";

$result = mysqli_query($conn, $sql);
while($row = mysqli_fetch_assoc($result)){
	echo "<table><h3>" . $row["name"]. "</h3>Poziom: " . $row["level"]. "<br>Atak: " .$row["Atak"]."<br>Zycie: " .$row["Zycie"]."<br>";
}
?>

<div id="menu">
<a href="game.php"><button>Misje</button></a>
<a href="ranking.php"><button>Ranking</button></a>
<button>Lochy</button>
<a href="shop.php"><button>Sklep</button></a>
	</div>

</body>
</html>

<style>
#menu{
  position: -webkit-sticky;
  position: sticky;
  z-index: 2;
  margin-top: 22%;
}
	</style>
