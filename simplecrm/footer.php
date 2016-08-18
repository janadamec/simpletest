<hr>
<?php
$datum = StrFTime("%d.%m.%Y %H:%M:%S", Time());

/** Vr�cen� �esk�ho n�zvu dne v t�dnu
 * @param int 0-6, 0 ned�le
 * @return string
 * @copyright Jakub Vr�na, http://php.vrana.cz/
 */
function cesky_den($den) {
	static $nazvy = array('nedele', 'pondeli', 'utery', 'streda', 'ctvrtek', 'patek', 'sobota');
	return $nazvy[$den];
}
echo("Dnes je: " . cesky_den(date("w")) . " " . $datum);

?>

<br />
Webmaker - tester : Johny 774 234 232
</div>
</body>
</html>