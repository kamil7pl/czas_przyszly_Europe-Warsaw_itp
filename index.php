<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Czas</title>
</head>
<body>
    <?php
	require_once("czas.php");
		$t=new czas();
		echo $t->przyszly("America/Atka",2)."<br />";
		echo $t->przyszly("Europe/Warsaw",2)."<br />";
		echo $t->przyszly("America/Atka",3)."<br />";
		echo $t->przyszly("Europe/Warsaw",3)."<br />";
		?>
</body>
</html>