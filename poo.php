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

			echo "Estoy arrancando";

		}
		
		function girar (){
			
			echo "Estoy girando";
			
		}
		
		function frenar (){

			echo "estoy frenendo";

		}

	}

$renault=new Coche(); //estado inicial
$mazda=new Coche();
$chevrolet=new Coche();

$mazda->girar();
echo $mazda->ruedas;

?>
