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
		<h3>Zaloguj się</h3>

<?php
require("logintable.php");
?>
	<?php
require('connect.php');
require('logincorrect.php');

?>
<br><a href="index.php">Nie masz jeszcze konta? Kliknij</a>
	</div>
	</div>
	<div id="stopka">
	</div>
	</body>
</html>
