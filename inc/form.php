<?php
if (!empty($_POST['nom']) and !empty($_POST['mail']) and !empty($_POST['message']) )
{
    
}else
{
    $msg = "Tout les champs doivent être complèté";
}

?>
    <div id="formulaire">
        <h2>formulaire de contact!</h2>
        <form method="POST" action="merci.php">

            <input type="text" name="nom" placeholder="votre nom" value="<?php echo (!empty($_SESSION['nom']))? $_SESSION['nom'] : ""; ?>" required> <br> <br>
            <input type="text" name="mail" placeholder="votre email" value="<?php echo (!empty($_SESSION['mail']))? $_SESSION['mail'] : ""; ?>"required> <br> <br>
            <textarea rows="13" cols="30" name="message" placeholder="votre message"><?php echo (!empty($_SESSION['message']))? $_SESSION['message'] : ""; ?></textarea> <br> <br>
            <input type="submit" value="Envoyez votre message!">

        </form>
        <?php 
        if(isset($_SESSION["error"])){
            if (!$_SESSION["error"]){
                echo "merci pour votre interêt envers nôtre site ! <br> <br>";
                echo $_SESSION['nom'];
                echo " je vous envois un message à l'adresse: ";
                echo $_SESSION['mail'];
            }else{
                echo "il me faut toutes les informations";
            }
        } else {
            echo "entrez toutes les informations svp";
        }
        ?>
    </div>
<?php 
unset($_SESSION["error"]);
unset($_SESSION["nom"]);
unset($_SESSION["mail"]);
unset($_SESSION["message"]);
?>