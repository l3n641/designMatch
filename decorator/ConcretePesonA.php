<?php
	class ConcretePesonA extends ConcreteAbr{
		public function test(){
			parent::test();
			echo "\r\n test 2";
		}
	}