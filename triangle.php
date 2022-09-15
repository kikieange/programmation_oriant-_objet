<?php 


class Triangle extends Forme
{
	private $base=2;
	private $hauteur=4;
	
	private function aires(){
		return ($this->base * $this->hauteur)/2;
	}
	public function Aire(){
		return $this->aires();
	}
}
$T=new Triangle; 


 ?>