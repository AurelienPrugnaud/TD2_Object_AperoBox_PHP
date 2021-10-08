<?php
require_once('models/categoriesModel.php');

if(!isset($tabCategories)) {
$tabCategories = array(
    0 => new Categories('vegan'),
    1 => new Categories('Sans gluten'),
    2 => new Categories('Toast'),
    3 => new Categories('Verrines'),
    4 => new Categories('Sucrées'),
    5 => new Categories('Salées')
);
}

if(isset($_GET['index']) AND $_GET['index']>=0) {
    $upCategorie = $tabCategories[$_GET['index']];
    echo 'Objet :';
    var_dump($upCategorie);
}

if(isset($_POST['name']) AND !empty($_POST['name'])) {
     $upCategorie = $tabCategories[$_POST['index']];
     $upCategorie->updateListByIndex($tabCategories,$_POST['index'],$_POST['name']);
     var_dump($tabCategories);
     //header('Location:dispatcher.php/?page=home');
}



var_dump($_POST);

include('views/editCategoryView.php');


