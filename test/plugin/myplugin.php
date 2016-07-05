<?PHP
	include 'plugin.php';
	class MyPlugin implements Plugin{
		public function pluginStart(){
			echo "开始运行插件";
			$this->test();
		}
		
		public function test(){
			echo 'end pugin';
		}
		
	}