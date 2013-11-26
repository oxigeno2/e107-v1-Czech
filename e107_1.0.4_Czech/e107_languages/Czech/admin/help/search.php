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
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/Czech/admin/help/search.php,v $
|     $Revision: 1.6 $
|     $Date: 2006/08/27 02:24:45 $
|     $Author: mcfly_e107 $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Pokud to váš SQL server podporuje, můžete přejít na SQL metodu vyhledávání, která je rychlejší než metoda PHP. Více v předvolbách.<br /><br />
Pokud vaše stránky obsahují jazyk jako je třeba čínština nebo japonština, pak používejte PHP metodu vyhledávání a vypněte v předvolbách funkci \"Vyhledávání pouze celých slov\".";
$ns -> tablerender("Nápověda - Hledání", $text);
?>
