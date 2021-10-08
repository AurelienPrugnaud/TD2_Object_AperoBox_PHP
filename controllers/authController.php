<?php
	session_start();
if (!empty($_GET['disconnection'])):
	unset($_SESSION['email']);
	echo "Vous vous êtes déconnecter";
endif;

if (!empty($_POST['validate'])):
	if (empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || empty($_POST['password'])):
		echo "Identifiants non valide.";
	else:
		$_SESSION['email'] = $_POST['email'];
		header("Location:dispatcher.php/?page=home");
	endif;
endif;

include("views/authView.php");


