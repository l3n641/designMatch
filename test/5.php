<?php
 session_start();
 
if(isset($_SESSION['A'])){
	if($_SESSION['A']=='A'){
	 echo 'session is a';
 }else{
	 echo $_SESSION['A'];
 }
}else{
	$_SESSION['A']='A';
	echo 'this is a';
}
 
 