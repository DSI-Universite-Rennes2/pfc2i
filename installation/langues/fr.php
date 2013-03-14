<?php
/**
 * @author Patrick Pollet
 * @version $Id: fr.php 708 2009-04-15 16:33:37Z ppollet $
 * @license http://www.gnu.org/copyleft/gpl.html GNU Public License
 * @package c2ipf
 */


 /*
 * trad
 */
$textes_langues["installation1"]="Installation Etape 1 -Param�tres initiaux";

$textes_langues["installation2"]="Installation Etape 2 - Cr�ation de la base de donn�es";

$textes_langues["maj"]="Mise � jour de votre base de donn�es pour la version 1.5";




$textes_langues["epilogue_install"]=<<<EOF
    <hr><hr>
    <div class="information_gauche">Installation Termin�e.<br>
    Selon la version t�l�charg�e vous y acc�derez par certification.php ou positionnement.php ou index.php.
    <br/>
    Vous pouvez maintenant tester si vos param�tres sont corrects. Un utilisateur ayant les m�mes login et mot de passe que ceux de la personne ayant t�l�charg� la plateforme depuis la plateforme nationale a �t� cr��<br>
    Pensez � supprimer les fichiers d installation (le dossier installation) lorsque vous aurez fini les tests afin que personne ne puisse les modifier sans votre accord. gardez-en une copie en cas de besoin.<br>
    <span class="rouge">Si vous avez opt� pour l installation automatique, n oubliez pas d enlever les droits d �criture sur le fichier commun/constantes.php. </span><br/>


remarque : Si vous utilisez un ENT v�rifiez la pr�sence de PEAR sur le serveur et consultez le wiki pour plus de d�tails.
</div>
EOF;

$textes_langues["epilogue_maj"]=<<<EOF
    <hr><hr>
    <div style="information_gauche">Mise � jour termin�e.<br>

</div>
EOF;



$supp=array(
"tests_parametres"=>"test de votre environnement",
"non_critique"=>"non critique",
"parametres_connexion"=>"Param�tres de connexion � la base de donn�es",
"form_serveur_bdd"=>"nom du serveur", "ex_form_serveur_bdd"=>"(ex. localhost)",
"form_nom_bdd"=>"nom de la base MySQL",
"form_user_bdd"=>"utilisateur",
"form_pass_bdd"=>"mot de passe",

"parametres_installation"=>"Param�tres d'installation de la plateforme'",
"form_repertoire_installation"=>"URL d'acc�s � votre plateforme","ex_form_ri"=>"(ex. http://votre-univ.fr/c2i/)",
"form_repertoire_ressources"=>"Chemin des ressources","ex_form_re"=>"(ex. /usr/share/c2i)",

"info_etat_connexion_bd_ok"=>"connexion r�ussie avec la base de donn�es",
 "info_etat_droits_bd_ok"=>"les droits d'acc�s sur la base de donn�es semblent suffisants ",
 "info_etat_droits_bd_ko"=>"probl�me de droits sur la base de donn�es ? ",
"info_etat_droits_ok"=>"les droits sur le dossier des ressources sont corrects" ,
"info_etat_droits_ko"=>"erreur en tentant de cr�er une table sur la base de donn�es" ,

);

 $textes_langues=array_merge($textes_langues,$supp);

?>
