<?php

//chaines communes a inclure dans les javascript
$str_confirm_supp=addSlashes(traduction("js_desinscrire_0")) ;
//$str_confirm_supp1=addSlashes(traduction("js_etudiant_supprimer_1")) ;

/**
 * attention il faut toujours passer aussi l'�tablissement vis� '
 * pour g�rer l'usage par un admin d'�tablissement avec composantes ou le super_admin
 */

$code=<<<EOC

<script type="text/javascript">
//<![CDATA[

 function supprimerItem (id) {
    if (confirm(sprintf( "$str_confirm_supp",id)))
        doAction("supprimer",id);
}


function consulterItem (id,idq,ide) {
   doPopup('reponse_par_etudiant2.php?id_us='+id+'&idq='+idq+'&ide='+ide);
}




//]]>
</script>

EOC;

echo $code;
?>
