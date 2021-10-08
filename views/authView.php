<?php
    if(!empty($_GET['disconnection'])):
        unset($_SESSION['email']);
        echo "Vous vous êtes déconnecter";
    endif;
    
    if(!empty($_POST['validate'])):
        if(empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) || empty($_POST['password'])):
            echo "Identifiants non valide.";
        else:
            $_SESSION['email'] = $_POST['email'];
            header("Location:dispatcher.php/?page=home");
        endif;
    endif;


?>

<form action="http://td2objecftaperobox/dispatcher.php/?page=auth" method="POST">
	<p>
		<label for="email" >Email</label>
		<input type="email" id="email" name="email" value="<?php if(isset($_SESSION['email'])): echo $_SESSION['email']; endif;?>"/>
	</p>
	<p>
		<label for="password" >Mot de passe</label>
		<input type="password" id="password" name="password" value=""/>
	</p>

	<input class="btn btn-dark" type="submit" value="Je m'identifie" name="validate"/>
</form>