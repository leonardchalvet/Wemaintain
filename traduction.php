<?php

if(!empty($_GET['lg']) || !isset($_SESSION['lg'])) {
	if(empty($_GET['lg'])) $lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	else {
		$lang = $_GET['lg'];
		$_SESSION['lg'] = $lang;
	}
}
else $lang = $_SESSION['lg'];

if($lang != "fr" && $lang != "en") $lang = "en";

$contenu_fichier_json_principal = file_get_contents('traduction/'.$name.'/'.$lang.'.json');
$contenu_fichier_json_header    = file_get_contents('traduction/common_header/'.$lang.'.json');
$contenu_fichier_json_footer    = file_get_contents('traduction/common_footer/'.$lang.'.json');

$content_page   = json_decode($contenu_fichier_json_principal, true);
$content_header = json_decode($contenu_fichier_json_header, true);
$content_footer = json_decode($contenu_fichier_json_footer, true);

?>