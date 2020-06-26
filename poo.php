<?php

	class Coche {
	
		public $color;
		public $Motor;
		public $ruedas;
		
		function __construct (){ //constructor
			$this->ruedas=4;
			$this->color="Rojo";
			$this->Motor="1600cc";
		}
			
		function arrancar (){

			echo "Estoy arrancando<br>";

		}
		
		function girar (){
			
			echo "Estoy girandoooo<br>";
			
		}
		
		function frenar (){

			echo "estoy frenendo<br>";

		}

	}

$renault=new Coche(); //estado inicial
$mazda=new Coche();
$chevrolet=new Coche();

$mazda->girar();
$mazda->arrancar();
$mazda->frenar();
echo "Soy mazda y tengo " . $mazda->ruedas;

?>
