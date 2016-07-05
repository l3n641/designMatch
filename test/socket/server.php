<?php
	set_time_limit(0);
	$host='127.0.0.1';
	$port=9999;
	$socketHandle=socket_create(AF_INET,SOCK_STREAM,SOL_TCP);
	$bindStatus=socket_bind($socketHandle,$host,$port);
	if(!$bindStatus){
		echo 'bind faild';
	}
	$listenStatus=socket_listen($socketHandle,4);
	if(!$listenStatus){
		echo 'listener faild';
	}
	$spawn=socket_accept($socketHandle);
	$input=socket_read($spawn,1024);
	$output=$input.'----test ok';
	socket_write($spawn,$output,strlen($output));
	socket_close($spawn);
	socket_close($socketHandle);
	