<?php $title="Galerie"?>
 <?php include("inc/header.php"); ?>

 <main class="main"> 

 <?php
$files = glob('img/galerie/*.{jpg,png}',GLOB_BRACE);


foreach($files as $filename)
{echo '<img  src='.$filename.' alt="des images de phoenix" class="imgdtruck" >';}

?> 

 </main>

 <?php include("inc/footer.php"); ?>
