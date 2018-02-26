<?php 

/**
 * returns the current domain, without subdomain.
 */
function getBaseDomain() {
	
	$sHostName = $_SERVER['HTTP_HOST'];
	
	$aHostNamePart = explode(".",$sHostName);
	
	while (count($aHostNamePart)>2) {
		array_shift($aHostNamePart);
	}
	
	return implode(".", $aHostNamePart);
}

include('config.php');
$bSubmitted = isset($_POST['bSubmitted'])?true:false;
$sCurrentDomain = getBaseDomain();