<?php
	include 'subject.php';
	include 'Proxy.php';
	include 'RealSubject.php';
	
	$RealSubject= new RealSubject();
	$Proxy= new Proxy($RealSubject);
	$Proxy->echoLove('xia');