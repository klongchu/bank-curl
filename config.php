<?php
	date_default_timezone_set('Asia/Bangkok');
	error_reporting(0);
	require_once 'simple_html_dom.php';
	require_once 'function.php';
	require_once 'key.php';
	if (!empty($_REQUEST['key'])) $xkey = $_REQUEST['key'];
	if (empty($xkey)) {
		echo '<h1>*** Please setup key.php and use URL generated from start.php instead.***<br />Go to <a href="start.php">start.php</a></h1>';


//		$c = new McryptCipher('secret key goes here');
//		$encrypted = $c->encrypt('secret message');
//		$decrypted = $c->decrypt($encrypted);

		exit();
	}
?>