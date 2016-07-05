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
	
	$a=new A();
	$b=new B( $a);
	echo get_class($b)."<br>";
$array=array($a,'test2',true);
var_dump(is_callable($array));
var_dump(get_class_vars('A'));
echo get_parent_class('Apple'),"<br>";
var_dump(class_implements( new Apple()));
$class= new Apple();
$method=array($class,'imprimi');
$arg=array(
	'i am 1',
	'i am 2',
	array(
		'sub 1',
		'sub2'
	)
);
call_user_func_array($method,$arg);