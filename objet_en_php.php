<?php 

class Person{
	
	public function __construct($nom,$prenom,$ages,$sexe){
		$this->nom= $nom;
		$this->prenom=$prenom;
		$this->age=$ages;
		$this->sexe=$sexe;
		
	}
	#l'idée des accesseurs est (<getter>,<setter>)de modifier le code dans le corps de ma calss..avoir un contrôle des valeurs possible que peuvent prendre un attribut
	public function jouer(){
		echo $this->prenom." Aime jouer au football pendant les vacances";
	}

	public function calmoy(){
		echo $this->prenom." Vous Avez ".$this->moyenne();
	}

	public function moyenne(){
		$note1 = 12;
		$note2 = 17;
		$moy=($note1+$note2)/2;
		return $moy; 
	}
}


$P1= new Person("Soundjata","keîta",23,"M");
$P2= new Person("ange","patrick",24,"M");
echo $P1->age;
echo "</br>";
$moyenn=$P1->moyenne();

echo $P1->nom." Vous avez ".$moyenn." moyenne </br>";

$P2->jouer();
echo "</br>";
$P1->calmoy();


?>