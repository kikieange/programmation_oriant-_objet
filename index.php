<?php 
//video 12 et video 13
class phrase{
      

	public static function upper($string){
		return mb_strtoupper($string);
	}

	public static function lower($string){
		return mb_strtolower($string);
	}

	public static function length($string){
		return mb_strlen($string);
	}
     protected  function nombre(){
     	return 0; 
     }

}
class homme extends phrase{
    public  function nombres(){
       return $this->nombre();
   }
}

$str= new phrase;  
$hom= new homme;
echo phrase::length("bonjour tous le monde");
echo "</br>";
echo homme::upper("cool!!");
echo "</br>";
echo $hom->nombres();
?>