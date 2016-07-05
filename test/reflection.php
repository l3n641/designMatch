<?php
	include 'public.php';
//Reflection:: export( new ReflectionExtension('Reflection'));	
$reflectionClass= new reflectionClass('Apple');
Reflection::export($reflectionClass);