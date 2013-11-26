<?php
/*
//Jaa(c) - korektura 21.9.2008, preklad www.e107.cz Team 
+ ----------------------------------------------------------------------------+
|     e107 website system
|
|     ©Steve Dunstan 2001-2002
|     http://e107.org
|     jalist@e107.org
|
|     Released under the terms and conditions of the
|     GNU General Public License (http://gnu.org).
|
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/Czech/admin/help/download.php,v $
|     $Revision: 1.2 $
|     $Date: 2005/12/14 17:37:43 $
|     $Author: sweetas $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Nahrávejte prosím vaše soubory do složky <i>".e_FILE."downloads</i> , obrázky do <i>".e_FILE."downloadimages</i> a miniatury obrázků do <i>".e_FILE."downloadthumbs</i> složky.
<br /><br />
Pro přidání souboru do sekce \"Ke stažení\", musí být nejprve vytvořena hlavní kategorie a pod ní podkategorie. Až pak bude možné soubor zpřístupnit na vašich stránkách.";
$ns -> tablerender("Nápověda - Ke stažení", $text);
?>
