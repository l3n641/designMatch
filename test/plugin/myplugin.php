<?PHP
	include 'plugin.php';
	class MyPlugin implements Plugin{
		public function pluginStart(){
			echo "��ʼ���в��";
			$this->test();
		}
		
		public function test(){
			echo 'end pugin';
		}
		
	}