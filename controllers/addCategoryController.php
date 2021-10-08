<?php
	require_once('models/categoriesModel.php');

	$tabCategories = array(
		0 => new Categories('vegan'),
		1 => new Categories('Sans gluten'),
		2 => new Categories('Toast'),
		3 => new Categories('Verrines'),
		4 => new Categories('Sucrées'),
		5 => new Categories('Salées')
	);
	if(isset($_POST) && ($_POST['name']>=3 && $_POST['name']<=15)):
		$newCategories = new Categories($_POST['name']);
		$newCategories->addNewCategory($tabCategories);
	else:
		echo "Nom invalide";
	endif;


	var_dump($tabCategories);

	include('views/addCategoryView.php');
