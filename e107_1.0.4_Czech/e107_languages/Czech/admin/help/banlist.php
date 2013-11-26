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
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/Czech/admin/help/banlist.php,v $
|     $Revision: 1.3 $
|     $Date: 2007/02/11 10:33:58 $
|     $Author: e107steved $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$caption = "Nápověda - Banlist";
$text = "Zde můžete zakázat/povolit přístup uživatelům na vaše stránky.<br /><br />
Blokovat můžete jak IP adresy, tak e-mail adresy a to i s použitím zástupného znaku (*)<br /><br />
<b>Blokování IP adres:</b><br />
 - Vložením ve tvaru 123.123.123.123 , zabráníte přístup z dané IP adresy na vaše stránky.<br />
 - Vložením s použitím zástupného znaku 123.123.123.* zabráníte přístup celé třídě \"C\" IP adres.<br /><br />
<b>Blokování e-mailu</b><br />
 - Vložením e-mail adresy ve tvaru uzivatel@stranky.cz zabráníte registraci s použitím dané adresy.<br />
 - Vložením e-mail adresy s použitím zástupného znaku *@stranky.cz, zabráníte registracím s použitím jakékoli adresy, vedené pod uvedeným serverem.<br /><br />
<b>Blokování uživatelů</b><br />
To je možné provádět ze <a href=\"users.php\" />správy uživatelů</a>.";
$ns -> tablerender($caption, $text);
?>
