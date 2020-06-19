<?php

define('LOGIN','admin');  // Login correct
define('PASSWORD','admin');  // Mot de passe correct
$message = '';      // Message à afficher à l'utilisateur

if(!empty($_POST))
{
    // Le login est-il rempli ?
    if(empty($_POST['login']))
    {
        $message = 'Remplir votre login !';
    }
    // Le mot de passe est-il rempli ?
    elseif(empty($_POST['motDePasse']))
    {
        $message = 'Remplir votre mode passe';
    }
    // Le login est-il correct ?
    elseif($_POST['login'] !== LOGIN)
    {
        $message = 'Votre login est faux !';
    }
    // Le mot de passe est-il correct ?
    elseif($_POST['motDePasse'] !== PASSWORD)
    {
        $message = 'Votre mot de passe est faux !';
    }
    else
    {
        // L'identification a réussi
        $message = 'Bienvenue '. LOGIN .' !';
    }
}
?>
<!DOCTYPE >
<html  >
<?php
include 'Header.php';
?>
<body>
<?php
include 'Menu.php';
?>
<head>
    <title>CONNEXION</title>
</head>
<body>
<?php if(!empty($message)) : ?>
    <p><?php echo $message; ?></p>
<?php endif; ?>
<form action="<?php echo htmlspecialchars($_SERVER['REQUEST_URI'], ENT_QUOTES); ?>" method="post">
    <fieldset>
        <legend>CONNEXION</legend>
        <p>
            <label for="login">Login :</label>
            <input type="text" name="login" id="login" value="<?php if(!empty($_POST['login'])) { echo htmlspecialchars($_POST['login'], ENT_QUOTES); } ?>" />
        </p>
        <p>
            <label for="password">Mot de passe :</label>
            <input type="password" name="motDePasse" id="password" value="" />
            <input type="submit" name="submit" value="Se connecter" />
        </p>
    </fieldset>
</form>
<?php
include 'Footer.php';
?>
</body>
</html>