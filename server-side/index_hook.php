<?php
header("Access-Control-Allow-Origin: *"); //CORS
	header('Access-Control-Allow-Methods:*');
	header('Access-Control-Allow-Headers:*');
	header("Access-Control-Request-Headers: *");
	// Replace this file with your own login system integration.
	if ($_SERVER["REMOTE_ADDR"] !== "192.168.50.192")  exit();
?>