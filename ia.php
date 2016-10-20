<?php
//Definimos la Clase ia.
Class ia{
public $columna;
public $fila;

	
	//Metodos, Get (pedir)
	public function getColumna()
    {
		
        return $this->columna;
		
    }
	public function getFila() {
		
        return $this->fila;
    }
	
	//Metodos SET
	//Establecemos los limites requeridos dentro de las funciones de SET tanto para columna como para fila.
	
		public function setColumna($col)
    {
		if($col <= 3 && $col >=0 ){
         $this->columna=$col;
		}
		else if($col > 3){
			$this->columna=3;//Si pasa de 3, se establecerá el 3.
		}
		else if($col < 0){
			
			$this->columna=0;//Si es menor que 0, pasará a ser igual a 0
		}
		
    }
	public function setFila($fil) {
		
        if($fil <= 3 && $fil>=0 ){
         $this->fila=$fil;
		}
		else if($fil > 3){
			$this->fila=3;
		}
		else if($fil < 0){			
			$this->fila=0;
		}
    }
	//Los parámetros establecidos en los setters, los recibe esta funcion de randompos()
	public function randompos(){
		$this->fila=rand(0,3);
		$this->columna=rand(0,3);
	}
}
?>