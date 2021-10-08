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
	<div class="bg-dark text-light mb-3 p-1">
		<h1 class="text-center">Apero Box</h1>
	</div>
</header>
<main class="container">
	<form action="/dispatcher.php/?page=addCategory" method="POST">
		<p>
			<label for="name" class="form-label">Nom de la catégorie</label>
			<input type="text" id="name" name="name" class="form-control" value=""/>
		</p>
		<input class="btn btn-dark" type="submit" value="Ajouter" name="validate"/>
	</form>
</main>
</body>
</html>