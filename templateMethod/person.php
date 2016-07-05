<?php
 abstract class person{
	 public function sayInfo(){
		 echo 'ben vindo letra mundo';
		 echo "\r\n";
		 echo 'i am '.$this->getClassName();
		 echo "\r\n";
		 echo "886 \r\n";
		 echo "\r\n";
	 }
	 
	abstract public function getClassName();
 }