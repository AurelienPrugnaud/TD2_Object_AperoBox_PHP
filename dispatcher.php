<?php
	if(!empty($_GET['page'])):
	switch($_GET['page']):
		case 'auth':
			include('controllers/authController.php');
			break;
		case 'home':
			include('controllers/categoriesController.php');
			break;
        case 'remove':
            include('controllers/removeCategoryController.php');
            break;
		case 'addCategory':
			include('controllers/addCategoryController.php');
			break;
        case 'editCategory':
            include('controllers/editCategoryController.php');
            break;
		default:
			include('');
			break;
	endswitch;
endif;