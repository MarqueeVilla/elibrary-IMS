<?php
include_once 'databaseConnect.php';

/* PHP sessions are known not to be secure, 
So it is important not just to put "session_start();" at the top of every page on which you want to use PHP sessions.
It stops crackers accessing the session id cookie through JavaScript (for example in an XSS attack).
Also the "session_regenerate_id()" function, 
which regenerates the session id on every page reload, 
helps prevent session hijacking.*/


function sec_session_start(){
	$session_name='sec_session_id'; //Set a session name
	$seccure=SECURE;
	//Prevents Javascript from accessing the session id
	$httponly=true;   
	//Force session to only use cookies
	if(init_set('session.use_only_cookies', 1)===FALSE){
	header("Location: ../error.php?err=Could not initiate a safe session (init_set)");
	exit();
	}
	
	$cookieParams=session_get_cookie_params();
	session_set_cookie_params($cookieParams["lifetime"],
		$cookieParams["path"],
		$cookieParams["domain"],
		$secure,
		$httponly);
		
		session_name($session_name);
		session_start();				//Start PHP session
		session_regenerate_id();				//regenerate the session
}
