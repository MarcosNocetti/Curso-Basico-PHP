<?php 
 	/**
 	 * 
 	 */
 	class pessoa
 	{
 		private $nome ='marcos';
 		private $idade = 20;
 		public static $peso = 74;
 		public function comer(){
 				$this->idade = $this->idade++;
 	 			echo 'comer';
 	 			echo '<br/>';

 	 			echo $this->idade;

 		}	

 	}
 	$pessoa = new pessoa;
 	$pessoa -> comer();
 ?>