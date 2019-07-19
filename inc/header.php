<?php session_start(); ?>

<!DOCTYPE html>
 <html lang="en">
 <head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <meta http-equiv="X-UA-Compatible" content="ie=edge">
     <link rel="stylesheet" href="css/style.css">
     <title><?php echo $title ?></title>

 </head>

 <body>

 <button id="boutonBurger" onclick="myFunction()">&#9776</button>

        <div id="myDIV" class="styleBurger" > 
            <nav>
                <ul id="listHeader">
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="galerie.php">Galerie photo</a></li>
                    <li><a href="contact.php">Contactez-nous!</a></li>
                </ul>
            </nav>
        </div>

     <h1 id="lephénix">LE PHOENIX</h1>
