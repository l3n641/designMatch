<?php
	include 'Person.php';
	include 'ConcreteAbr.php';
	include 'ConcretePesonA.php';
	$Person= new Person();
	$ConcretePesonA= new ConcretePesonA();
	$ConcretePesonA->addFunction($Person);
	$ConcretePesonA->test();