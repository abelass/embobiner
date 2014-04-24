<?php
/**
 * Utilisations de pipelines par Embobiner
 *
 * @plugin     Embobiner
 * @copyright  2014
 * @author     Rainer Müller
 * @licence    GNU/GPL
 * @package    SPIP\Embobiner\Pipelines
 */

if (!defined('_ECRIRE_INC_VERSION')) return;
	

/*
 * Un fichier de pipelines permet de regrouper
 * les fonctions de branchement de votre plugin
 * sur des pipelines existants.
 */

function embobiner_jquery_plugins($scripts){
    if(_request('page')!='thematiques')$scripts[] = "javascript/smint/js/jquery.smint.js";
    $scripts[] = "javascript/jquery.tools.min.js";	
    return $scripts;
}
?>