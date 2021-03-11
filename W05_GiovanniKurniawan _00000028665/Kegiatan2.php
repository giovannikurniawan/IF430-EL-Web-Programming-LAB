<?php
class Hewan{
	public $nama;
	public $apakahHidup;

	function __construct(){
		$apakahHidup = true;
		echo "hewan hidup.";
	}

	function __destruct(){
		$apakahHidup = false;
		echo "telah wafat.";
	}

	public function makan(){
		echo "nyam nyam";
	}

	public function tidur(){
		echo "zzzz";
	}

	public function berjalan(){
		return "tuk ku tuk";
	}
}

echo "<strong>";

echo "Momo adalah "; $satu = new Hewan();
echo "</br>Mimi adalah "; $dua = new Hewan();
echo "</br>Mumu adalah "; $tiga = new Hewan();

$satu->nama = "Momo";
$dua->nama = "Mimi";
$tiga->nama = "Mumu";

echo "</br> </br>";
echo $satu->nama." suka makan, "; echo $satu->makan()." "; echo $satu->makan().".";
echo "</br>";
echo $dua->nama." suka tidur, "; echo $dua->tidur()." "; echo $dua->tidur()." "; echo $dua->tidur().".";
echo "</br>";
echo $tiga->nama." suka berjalan, ".$tiga->berjalan().".";
	
echo "</br> </br>";
echo "Momo "; unset($satu);
echo "</br>";
echo "Mimi "; unset($dua);
echo "</br>";
echo "Mumu "; unset($tiga);

echo "</strong>";
?>