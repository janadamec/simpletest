<?php
/*  1 verze připojení - stále to hlásí chybu příkazu mysql_connect()
require ('db.inc.php');
$db = mysql_connect(MYSQL_HOST, MYSQL_USER, MYSQL_PASSWORD) or die("Nemohu se spojit s databází");
*/


/*   2 verze Připojení databáze - chyba
$id_spojeni = mysql_connect("c031um.forpsi.com", "f79724","q4VNPeS");
if ($id_spojeni)
	echo ("Spojení s MySQL databází se podařilo.");
else
	echo ("Spojení s MySQL databází se nezdařilo.");
if ($id_spojeni)
	mysql_close($id_spojeni);
*/


include ('header.php');
$vypisTo = "";
?>

<div class="form1">
    <H4>Prosím o zadání několika údajů zde:</H4>
	<form action="index.php" method="GET">
zadej číslo - hodnota 1: <input type="text" name="prom1" /><br />

zadej číslo - hodnotu 2: <input type="text" name="prom2" />

<br />
Otazka 1:
<br /><input type="radio" name="ot1" value="Zaškrtnuta první varianta">To je moje odpoved 1
<br /><input type="radio" name="ot1" value="Vyrianta 2"> Moje dpoved 2


<br /><br /><input type="submit" />
</form>

	<?php
	$prom1 = $_GET["prom1"];
	$prom2 = $_GET["prom2"];
	$ot1 = $_GET["ot1"];


	//$var2 = $_GET["ot2"];
	$soucet = $prom1 + $prom2;



	switch ($prom1) {
		case 0: $vypisTo = "jeste nebylo nic zadano" ;break;
		case 1:	$vypisTo = "JEDNA - tak teda bylo cislo";break;
		case 2:
			$vypisTo = "<h2>DVA - to je chybovka</h2>";
			include 'chyba.php';break;
		case 3:	$vypisTo = "TŘI - Treti mozna odpoved. Ta bude trochu delsi at tam neco je.";break;
		case 4:	$vypisTo = "ČTYŘI - Ctvrta mozna odpoved a ta uz tak dlouha neni";break;
		case 5:	$vypisTo = "PĚT - cislo pet :-)";break;
		case 6:	$vypisTo = "<H2>Sestka je taky cislo</H2>";break;
		default: include 'velkycislo.php';break;
	}
	?>

	<div class="odpoved">
        <p>Výsledek:</p>
		<?php
        echo ($vypisTo."<br /><br />");
		echo ("<br />Vyplnil jste hodnoty: ".$prom1." a ".$prom2);
		echo ("<br /> Soucet hodnot je: " .$soucet . "<br />");

		if ($soucet > 500){
			echo ("<br />Je to vice nez 500 a to je hodne <br />");
			echo ("Priste uber o:" . ($soucet - 500));
		}
		else {
			echo ("<br />Je to mene nez 500 <br />");
			echo ("Do hodnoty 500 schazi: " . (500 - $soucet));
		}

		echo ("<br /><br />Odpoved na otazku 1: ". $ot1 . "<br /><br />");
        ?>
	</div>
</div>

<?php

include ('footer.php');
?>
