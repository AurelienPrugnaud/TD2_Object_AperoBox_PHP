<?php
	if(!empty($_GET['page'])):
	switch($_GET['page']):
		case 'auth':
			include('controllers/authController.php');
			break;
		case 'home':
			include('index.php');
			break;
		default:
			include('');
			break;
	endswitch;
endif;