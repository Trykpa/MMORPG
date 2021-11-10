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
	echo "Siła : ".$row["sila"]."<br>";
	echo "Wytrzymałość : ".$row["wytrzymalosc"]."<br>";
	echo "Inteligencja : ".$row["inteligencja"]."<br>";
}
?>
<a href="index.php">Wyloguj się</a>
</div>
<div id="misje">
	<img src="hitler.png">
	<h3>Twój stary(Poziom 69)</h3>
<button>Walcz</button>
	</div>

<div id="menu">
<a href="game.php"><button>Misje</button></a>
<a href="ranking.php"><button>Ranking</button></a>
<button>Lochy</button>
<button>Sklep</button>
	</div>

</body>
</html>