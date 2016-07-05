<?php
	set_time_limit(0);
 	$host='127.0.0.1';
	$port=9999;
	$socketHandle=socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
	if($socketHandle<0){
		echo 'create_socket faild';
	}else{
		echo "create_socket ok";
	}
	$connectStatus=socket_connect($socketHandle,$host,$port);
	if($connectStatus<0){
		echo 'connect faild';
	}else{
		echo 'connect ok';
	}
	$message=' hello ';
	$sendStatus=socket_write($socketHandle,$message,strlen($message));
	if(!sendStatus){
		echo 'send message faild';
	}else{
		echo 'send message ok';
	}
	while($out=socket_read($socketHandle,8192)){
		echo $out;
	}
	socket_close($socketHandle);