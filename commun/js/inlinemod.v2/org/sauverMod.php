<?php
  //On sort en cas de param�tre manquant ou invalide
  if(!isset($_GET['champ']) or empty($_GET['champ']) or !isset($_GET['valeur']) or (empty($_GET['valeur']) and 
  ($_GET['valeur'] != 0)) or !isset($_GET['echap']) or empty($_GET['echap']) or
  !isset($_GET['id']))
  {
    print "Erreur dans les param�tres fournis";
    exit;
  }
  
  require('./common-top.php');
  
  //Construction de la requ�te
  $champ  	= $_GET['champ'];   
  $valeur 	= $_GET['valeur'];
  $id			= $_GET['id'];
  
  $sql = "UPDATE `" . DB_TABLE_NAME . "` SET $champ=";
  
  //Il faut �ventuellement formater la valeur fournie
  if($_GET['echap'] == "true")
  {
  $valeur = mysql_real_escape_string($valeur);
  $sql .= "'$valeur'";
  }
  else
    $sql .= $valeur;
  
  $sql .= " WHERE id=$id";
    
  //Ex�cution de la requ�te
  mysql_query($sql) or die("Erreur BDD : " . mysql_error());
  
  
  require('./common-bottom.php');

?>