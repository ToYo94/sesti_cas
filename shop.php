<?php
class shop
{
	public 	$proizvodi = [];
	public function dodajproizvod($imeproizvoda, $cena, $datumproizvdonje)
	{
		$jedanproizvod = [$imeproizvoda, $cena, $datumproizvdonje];
		$this->proizvodi[] = $jedanproizvod;
		#U $this->proizvodi dodaj ([]) #jedanproizvod
		echo "Proizvod je $imeproizvoda, kosta $cena, i proizveden je pre $datumproizvdonje sekundi.";
	}
	public function prikaziproizvode()
	{
		var_dump($this->proizvodi);
	}
}
$prodavnica = new shop();
$prodavnica->dodajproizvod("mleko", 120, time());
$prodavnica->dodajproizvod("banane", 144, time());
$prodavnica->dodajproizvod("hleb", 45.5, time());
$prodavnica->prikaziproizvode();
?>