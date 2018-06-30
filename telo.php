<?php
require_once "osoba.php";

class telo extends osoba
{
	public function __construct($ime, $tezina, $visina, $kosa)
	{
		parent::__construct($ime);
		echo "Imam $tezina kilograma, visok sam $visina, i kosa mi je $kosa boje.";
	}
}
?>