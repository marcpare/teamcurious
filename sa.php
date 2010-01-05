<?php

// make sure the referrer is in the teamcurious domain
$referer = $_SERVER['HTTP_REFERER'];
$ref_host = parse_url($referer);
$ref_host = $ref_host['host'];

if(!isset($ref_host) || strstr($ref_host, 'teamcurious.com') === false){
	// redirect to actors
	header("Location: http://www.teamcurious.com/actors");
}else{
	// make sure the go location points to socialactions
	$go_url = $_REQUEST['go'];
	$go_url_host = parse_url($go_url);
	$go_url_host = $go_url_host['host'];

	if(strstr($go_url_host, 'socialactions.net')){
		//sweet it all checks out
		header('Location:' . $go_url);
	}else{
		header("Location: http://www.teamcurious.com/actors");
	}
}

?>