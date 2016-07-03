<?php
interface cloneObject{
	public function cloneObj();
	public function __clone();
}


class information {
	public $name;
	public $age;
}


	class person implements cloneObject {
		protected $info;
		public function __construct(information $info,$name){
			$info->name=$name;
			$this->info=$info;
		}
		
		public function sayInformation(){
			echo "my name is ".$this->info->name.' age is '.$this->info->age."\r\n";
		}
		
		public function setAge($age){
			$this->info->age=$age;
		}
		public function __clone(){
			$this->info= clone $this->info;
			
		}
		
		public function cloneObj(){
			return clone $this;
		}
	}
	$info= new information();
	$p1= new person($info,'lengai');
	$p2= $p1->cloneObj();
	$p1->setAge(22);
	$p2->setAge(4444);
	$p1->sayInformation();
	$p2->sayInformation();