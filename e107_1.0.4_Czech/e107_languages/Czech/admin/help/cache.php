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
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/Czech/admin/help/cache.php,v $
|     $Revision: 1.2 $
|     $Date: 2005/12/14 17:37:43 $
|     $Author: sweetas $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Nápověda - Cache";
$text = "Zapnutím Cache(Vyrovnávací paměť) se zrychlí reakce vašich stránek a sníží zatížení sql databáze dotazy.<br /><br /><b>Upozornění! Pokud provádíte úpravy vzhledu vašich stránek, pak tuto funkci vypněte. Provedené změny by se vám totiž nemusely projevit.</b>";
$ns -> tablerender($caption, $text);
?>
