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
require("logincorrect.php");
$sql = "SELECT * FROM players WHERE name = 'koks'";
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
<div id="misje">
	

	<?php
require("connect.php");
$smallestId = 1;
	$biggestId = 7;
	$randomId = mt_rand($smallestId, $biggestId);
	$randomSql = mysqli_query($conn, "SELECT * FROM wrogowie WHERE ID='$randomId'");
while($row = mysqli_fetch_assoc($randomSql)){
	echo "<img src=".$row["img"]." width=450px, height=450px>"; 
	echo "<h1>".$row["Nazwa"]."</h1>";
	echo "<h3>Poziom: ".$row["Poziom"]."</h3><br>";
	break;
}

	?>
<form method = "post" action = "<?php $_PHP_SELF ?>">
<input name = "fight" type = "submit" id="fight" value="Walcz"></a><br>
</form>

	</div>
<?php
require("connect.php");
if(isset($_POST['fight'])){
mysqli_query($conn,"update players set level = level + 1");
mysqli_query($conn,"update players set Atak = Atak + 5");
mysqli_query($conn,"update players set Zycie = Zycie + 10");
header("game.php");

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
	position: sticky;
	margin-top:5%;
}
	</style>