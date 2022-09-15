<?php 

class humain{
	
	private $nom;

	public function __construct($nom,$prenom,$ages,$sexe){
		$this->nom= $nom;
		$this->prenom=$prenom;
		$this->age=$ages;
		$this->sexe=$sexe;
		
	}

	public function getnom(){
		return $this->nom ." c'est son, nom";
	}

}
$P1 =new humain("soumangourou","kanté",55,"m");#uniquement accès au seins de la classe (à travers les fonctions!!!)


echo $P1->getnom();
 ?>