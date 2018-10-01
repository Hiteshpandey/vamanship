<?php
function generateToken() 
{
    if ( !isset($_SESSION) ) {
        session_start();
    }
    if (!isset($_SESSION['csrf_token'])) {
    $token = bin2hex(random_bytes(32));
    $_SESSION['csrf_token'] = $token;
    return $token;
    }else
    {
    	$token = $_SESSION['csrf_token'];
    	return $token;
    }

}
