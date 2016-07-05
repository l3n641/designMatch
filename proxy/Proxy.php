<?php 
	class Proxy implements Subject {
		protected $RealSubject;
		public function __construct(RealSubject $RealSubject){
			$this->RealSubject=$RealSubject;

		}
		
		public function echoLove($name){
			$this->RealSubject->echoLove($name);
		}
	}