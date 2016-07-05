<?php
	interface Api{
		public function api();
	}
	class A{
		public $var1='var1';
		private $var2;
		private function test2(){}
		public function test(){
			echo 'i am A'."<br>";
		}
		public function imprimi($str1,$str2,$arra){
		echo $str1,$str2;
		foreach($arra as $value){
			echo $value;
		}
		}
	}

	class B{
		public function __construct(A $a){
			echo $a->test();
		}
	}
	
	class Apple extends A implements Api {
		public function api(){
			echo "this is api <br>";
		}
		
	}