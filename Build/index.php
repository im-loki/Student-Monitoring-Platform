<?php
	if (!empty($_SERVER['HTTPS']) && ('on' == $_SERVER['HTTPS'])) {
		$uri = 'https://';
	} else {
		$uri = 'http://';
	}
	$uri .= $_SERVER['HTTP_HOST'];
	echo "hello";
	header('Location: '.$uri.'/Build/App/index.php');
	exit;
?>
Something is wrong with the XAMPP installation :-(
