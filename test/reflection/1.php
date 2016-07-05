<?php
  include 'public.php';
  $reflectionClass= new ReflectionClass('Apple');
  //$reflectionMethods= $reflectionClass->getMethods();
  $reflectionMethod= $reflectionClass->getMethod('imprimi');
  $reflectionParamet= $reflectionMethod->getParameters();
  var_dump($reflectionParamet);