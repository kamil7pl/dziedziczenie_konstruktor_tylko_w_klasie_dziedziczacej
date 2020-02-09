<?php
class klasa{
	public function __construct(){
		echo "Konstruktor odziedziczony z klasy klasa.";
	}
}
class klasaDziedziczaca extends klasa{
	
}
$obiekt=new klasaDziedziczaca();
?>
