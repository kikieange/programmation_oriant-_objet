<?php 


class humain{
	
	public $nom;
    public static $compte = 0;# static utiliser par la class
	public function __construct($prenom,$ages){
		$this->prenom=$prenom;
		$this->age=$ages;
        static::$compte++;
		
	}

	public function chanter(){
	  echo  $this->prenom." est  en train de chanter";
	}

}

$P1 = new humain("soundjata",33);
$P1 = new humain("soundjata",33);
$P1 = new humain("soundjata",33);


$P1->chanter();
echo "<br/>";
echo humain::$compte;
 ?>