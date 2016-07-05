<?php

//include 'person.php';
 abstract class  ConcreteAbr extends Person{
	protected $Person;
	public function  addFunction(Person $Person){
	   	$this->Person= $Person;
	} 
	
	public function test(){
		$this->Person->test();
	}
}