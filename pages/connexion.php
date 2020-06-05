<!DOCTYPE html>
<!-- 
     Page web Nolark
     Auteur : Thibault et Nassim
-->
<?php
include('../includes/fonctions.php');
connexionbdd();
actualiser_session();

/* * ******Fin actualisation de session...********* */
$pseudo = filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING); // utlisation de filter_input pour ne pas utiliser la variable superglobale 
$mdp = filter_input(INPUT_POST, 'mdp', FILTER_SANITIZE_STRING); // utlisation de filter_input pour ne pas utiliser la variable superglobale 
$connexion = filter_input(INPUT_POST, 'connexion'); // utlisation de filter_input pour ne pas utiliser la variable superglobale 
// on teste si le visiteur a soumis le formulaire de connexion
if (isset($connexion) && $connexion == 'Connexion') {
    if ((isset($pseudo) && !empty($pseudo)) && (isset($mdp) && !empty($mdp))) {

        $cnx = new PDO('mysql:host=127.0.0.1;dbname=nolark', 'nolarkuser', 'nolarkpwd');

        // on teste si une entrée de la base contient ce couple login / pass
        $sql = 'SELECT count(*) FROM `membres` WHERE login= "' . $pseudo . '" AND password= "' . password_hash($mdp, PASSWORD_BCRYPT) . '"';
        $data = $cnx->prepare($sql);
        $data->execute();
        $data->fetch(PDO::FETCH_OBJ);

        unset($cnx);
        // si on obtient une réponse, alors l'utilisateur est un membre
        if ($data == 1) {
            session_start();
            $_SESSION['login'] = $pseudo;
            header('Location: membres.php');
            exit();
        }
        // si on ne trouve aucune réponse, le visiteur s'est trompé soit dans son login, soit dans son mot de passe
        elseif ($data[0] == 0) {
            $erreur = 'Compte non reconnu.';
        }
        // sinon, alors la, il y a un gros problème :)
        else {
            $erreur = 'Problème dans la base de données : plusieurs membres ont les mêmes identifiants de connexion.';
        }
    } else {
        $erreur = 'Au moins un des champs est vide.';
    }
}
?>
<html lang="fr-FR">
    <head>
        <title>Casques Nolark : Sécurité et confort, nos priorités !</title>
        <meta charset="UTF-8">
        <meta name="author" content="Luke DUSSART">
        <meta name="description" content="Découvrez des casques moto dépassant même les exigences des tests de sécurité. Tous les casques Nolark au meilleur prix et avec en prime la livraison gratuite !">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="../css/styles.css" rel="stylesheet" type="text/css">
        <link href="../css/connexion.css" rel="stylesheet" type="text/css">
        <link rel="icon" href="../favicon.ico">
    </head>
    <body>
        <?php
        include('../includes/header.html.inc.php');
        ?>
        <section id="connex">
            <h1> Connexion : </h1>
            <form id="form_contact" name="form_connexion" action="connexion.php" method="POST">
                <fieldset id="connexion">
                    <legend>Vous connecter</legend>
                    <div><label for="pseudo">Votre pseudo :</label> <input type="text" name="pseudo" id="pseudo" size="35" required  value="<?php if (isset($pseudo)) echo htmlentities(trim($pseudo)); ?>"></div>
                    <div><label for="mdp">Votre mot de passe :</label> <input type="password" name="mdp" id="mdp" size="35" required></div>
                    <div><input type="submit" name="connexion" value="Connexion">
                        <a class="link_auth" href="reset-mdp.php">Mot de passe oublié ?</a>
                    </div>
                </fieldset>
                <fieldset id="inscription">
                    <legend> S'inscrire</legend>
                    <p> Veuillez cliquer sur ce bouton pour aller sur la page d'inscription </p>
                    <a class="lien" href="inscription.php">S'inscrire</a></form>     
        </section> 
    </form>
    <?php
    include('../includes/footer.inc.php');
    ?>
</body>
</html> 