<?php $title="Galerie"?>
 <?php include("inc/header.php"); ?>

 <main class=".main"> 

 <?php
$files = glob('img/galerie/*.gif');
foreach($files as $filename){echo $filename;}

?> 

 </main>

 <?php include("inc/footer.php"); ?>
