<?php
session_start();
if (!empty($_POST['nom']) and !empty($_POST['mail']) and !empty($_POST['message']) )
{
   $_SESSION["error"] = false;
}else
{ 
   $_SESSION["error"] = true;
   
}
   $_SESSION['nom'] = (!empty($_POST['nom'])) ? $_POST['nom'] : "";
   $_SESSION['mail'] = (!empty($_POST['mail'])) ? $_POST['mail'] : "";
   $_SESSION['message'] = (!empty($_POST['message'])) ? $_POST['message'] : "";

header('Location:./contact.php');

?>