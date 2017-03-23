<?php 


// Inialize session
session_start();

// Check, if tele1 and texto session is NOT set then this page will jump to login page
if (!isset($_POST['tele1'])) {
header('Location: index.php');
}

if (!isset($_POST['texto'])) {
header('Location: index.php');
}

$tele1=$_POST['tele1'];
$text=$_POST['texto'];




$_SESSION['tele1']=$tele1;
$_SESSION['texto']=$text;



	
	
echo $_SESSION['tel1'];

		// do stuffs
		
		require_once 'sendSmsAbono.php';
   




?>