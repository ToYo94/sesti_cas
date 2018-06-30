<?php

class proizvod
{
	public $ime = "Profesor";

	protected function getime()
	{
		echo $this->ime;
	}
}

class prodavnica extends proizvod
{
	public $ime = "Ucenik";
	public function __construct()
	{
		#echo $this->ime;
		parent::getime();
	}
}

$user = new prodavnica();

require_once "telo.php";
$korisnik = new telo("Mladen", 72.5, 186, "smedje");

require_once "shop.php";
$shop = new shop();
$shop->dodajProizvod("Paprika", 50, time());

?>