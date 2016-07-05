<?php
	abstract class  father {
		abstract function test();
		static function test2(){
			echo 'test tather';
		}
	}
	
	class san extends father{
		function test(){
			echo 1;
		}
	}
	father::test2();
	$a= new father();
	$a->test();