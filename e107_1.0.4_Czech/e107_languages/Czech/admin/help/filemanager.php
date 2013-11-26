<?php
//Jaa(c) - korektura 21.9.2008, preklad www.e107.cz Team 
/*
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
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/Czech/admin/help/filemanager.php,v $
|     $Revision: 1.3 $
|     $Date: 2006/08/27 02:24:44 $
|     $Author: mcfly_e107 $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Zde máte možnost spravovat soubory/adresáře vašich stránek. Pokud se při nahrávání či přesunu souborů vyskytne chyba o nedostatečných přístupových právech, pak nastavte přístupová práva nadřazeného adresáře na CHMOD 777.";
$ns -> tablerender("Nápověda - Správce souborů", $text);
?>
