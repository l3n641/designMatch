<?php
	class Design{
		private $prototypes=array();
		private static $instance;
		private function __construct(){
			
		}
		
		public static function getInstance(){
			if(empty(self::$instance)){
				self::$instance= new Design();
			}
			return self::$instance;
		}
		
		public function setAttributes($key,$value){
			$this->prototypes[$key]=$value;
		}
		
		public function getAttribute($key){
			return $this->prototypes[$key];
		}
		
	}
	$A= Design::getInstance();
	$A->setAttributes('name','lengai1122');
	$A->setAttributes('age',12);
/* 	echo $A->getAttribute('age');
	echo $A->getAttribute('name'); */
	unset($A);

	function test(){
			$b= Design::getInstance();
    echo $b->getAttribute('age');
	echo $b->getAttribute('name'); 
	}
	test();
	
	