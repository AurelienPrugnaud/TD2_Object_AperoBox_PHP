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

include('views/editCategoryView.php');


