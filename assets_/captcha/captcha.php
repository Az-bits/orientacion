<?php
session_start();
// $this->load->library('session');
	$ranStr = md5(microtime());
	$ranStr = substr($ranStr, 0, 5);
	$_SESSION['cap_code'] = $ranStr;	
	// $this->session->set_userdata(array( 'cap_code' =>$ranStr));
	$newImage = imagecreatefromjpeg("bgcaptcha.jpg");
	$txtColor = imagecolorallocate($newImage, 0, 0, 0);
	imagestring($newImage, 5, 30, 8, $ranStr, $txtColor);
	header("Content-type: image/jpeg");
	imagejpeg($newImage);

	
?>
