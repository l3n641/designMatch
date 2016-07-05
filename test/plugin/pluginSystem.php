<?php
	class PluginSystem{
		public function findPlugin(){
			$plugins= array();
			$classArray= get_declared_classes();
			foreach($classArray as $class){
				$reflectClass= new ReflectionClass($class);
				if($reflectClass->implementsInterface('Plugin') ){
					$plugins[]=$reflectClass;
				}
			}
			return $plugins;
		}
		
		public function initALL(){
			$this->excutePlugins();
		}
		
		public function excutePlugins(){
			$pulgins= $this->findPlugin();
			foreach($pulgins as $plugin){
				if($plugin->hasMethod('pluginStart')){
					$reflectionMethod= $plugin->getMethod('pluginStart');
					if($reflectionMethod->isStatic()){
						$reflectionMethod->invoke(null);
					}else{
						$pluginInstance=$plugin->newinstance();
						$reflectionMethod->invoke($pluginInstance);
					}
				}
			}
		}
		
	}