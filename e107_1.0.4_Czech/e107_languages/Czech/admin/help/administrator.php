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
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/Czech/admin/help/administrator.php,v $
|     $Revision: 1.3 $
|     $Date: 2006/01/09 17:02:46 $
|     $Author: sweetas $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Nápověda - Administrátoři";
$text = "Zde máte možnost upravovat pravomoce, nebo mazat Administrátory.<br /><br />
Pro vytvoření nového Administrátora, přejděte do <a href='users.php'>správy uživatelů</a> a příslušnému uživateli <i>udělte status Administrátora</i>.";
$ns -> tablerender($caption, $text);
?>
