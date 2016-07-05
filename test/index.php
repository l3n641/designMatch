<?php
header('content-type:text/html;charset=utf-8');
$str='1我1爱你1111';
function utf8_strlen($str){
	$arr=preg_split('//u',$str,-1,PREG_SPLIT_NO_EMPTY);
	var_dump($arr);
}
/* echo $_SERVER['REMOTE_ADDR'];
echo $_SERVER['SERVER_ADDR']; */
