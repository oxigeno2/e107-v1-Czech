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
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/Czech/admin/help/meta.php,v $
|     $Revision: 1.2 $
|     $Date: 2005/12/14 17:37:43 $
|     $Author: sweetas $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Zde máte možnost definice důležitých Meta Tagů, případně možnost přidávat své vlastní.
<br /><br />
Při vkládání vlastních Meta Tagů, se snažte dbát na správném tvaru xhtml zápisu.
<br /><br />
Správný tvar:<br />
&lt;meta.... /&gt;
<br /><br />
Špatný tvar:<br />
&lt;meta... &gt;";

$ns -> tablerender("Nápověda - Meta Tagy", $text);
?>
