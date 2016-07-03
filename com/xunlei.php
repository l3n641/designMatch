<?php
try{
	$xunLei=new Com('ThunderAgent.Agent');
	$xunLei->addTask('https://download.microsoft.com/download/5/2/1/5212066c-5f48-4b16-a059-ed84b505a65d/vcredist_x86.exe'
	,'test.exe'
	,'C:/'
	,'test'
	,''
	,1
	,true
	,10);
$xunLei->CommitTasks();
}catch(exception $e){
	echo 'error';
}