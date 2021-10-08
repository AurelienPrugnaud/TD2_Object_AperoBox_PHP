<?php session_start() ?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<title>Apero box</title>
</head>
<body>
<header>
    <div class="bg-dark text-light mb-3 p-1 position relative">
        <h1 class="text-center">Apero Box</h1>
        <a href="http://td2objecftaperobox/dispatcher.php/?page=auth&?disconnection=1" title="disconnection" class="btn btn-outline-light position-absolute end-0 top-0 m-2">Me deconnecter</a>
    </div>
</header>
    <main class="container">
        <h2 class="mb-3">Bonjour <?php echo $_SESSION['email']?></h2>
        <a class="btn btn-dark mb-3" href="">Ajouter un produit</a>
        <table class="table">
            <thead class="table-dark">
                <td>Nom</td>
                <td>Actions</td>
            </thead>
            <tbody>
            <?php foreach($tabCategories as $index => $category):?>
                <tr>
                    <td><?php echo $category->name?></td>
                    <td><a class="btn btn-outline-danger" href="/dispatcher.php/?page=remove&index=<?php echo $index ?>">Supprimer</a>
                    <a class="btn btn-outline-danger" href="/dispatcher.php/?page=editCategory&index=<?php echo $index ?>">Modifier</a></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </main>
</body>
</html>