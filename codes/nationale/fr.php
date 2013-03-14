<?php
/**
 * @author Patrick Pollet
 * @version $Id: fr.php 822 2009-05-28 16:04:32Z ppollet $
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package c2ipf
 */

 /**
  * exemple de personnalisation de la traduction
  *  sp�cifique nationale
  */


$supp=array(
"gestion_etablissements"=>"gestion des �tablissements",
"gestion_familles"=>"gestion des th�mes",
"gestion_referentiels"=>"gestion des domaines",
"gestion_alineas"=>"gestion des comp�tences",

"maj_domaines_questions"=>"mettre � jour les domaines des questions � partir des th�mes",


"nouvel_famille"=>"nouveau th�me",
"nouvel_referentiel"=>"nouveau domaine",
"nouvel_alinea"=>"nouvelle comp�tence",

"fiche_referentiel"=>"Fiche domaine",
"fiche_alinea"=>"Fiche comp�tence",
"fiche_famille"=>"Fiche th�me",


"js_famille_supprimer_0" => "attention ! vous �tes sur le point de supprimer le th�me num�ro :",
"js_ref_supprimer_0" => "attention ! vous �tes sur le point de supprimer le domaine :",
"js_alinea_supprimer_0" => "attention ! vous �tes sur le point de supprimer la comp�tence :",


"js_action_annuler" => "cette action est d�finitive. Cliquez sur annuler si vous avez cliqu� par erreur",




"t_nb_aleatoire"=>"nb questions par QCM",
"t_nb_items"=>"nb items dans listes",

"t_aptitude"=>"comp�tence",

"t_nbqa"=>"Questions valid�es",

"form_nbquestions_associees"=>"nombre de questions",
"form_questions_associees"=>"questions associ�es",

);

 $textes_langues=array_merge($textes_langues,$supp);



?>
