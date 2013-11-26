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
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/Czech/admin/help/ugflag.php,v $
|     $Revision: 1.3 $
|     $Date: 2006/09/20 14:04:31 $
|     $Author: e107coders $
+----------------------------------------------------------------------------+
*/

if (!defined('e107_INIT')) { exit; }

$text = "Pokud provádíte aktualizaci e107, nebo potřebujete aby vaše stránky byly dočasně nedostupné, můžete využít této funkce. 
Při aktivaci budou všichni uživatelé směrováni na stránku s vašim textem vysvětlujícím stav dostupnosti těchto stránek. 
Po pominutí důvodů k nedostupnosti můžete stránky opět zprovoznit odtržením této funkce.<br /><br />
<b>Upozornění!</b><br />Pokud je údržbový provoz aktivován, v žádném případě se neodhlašujte, protože by nebylo možné se opětovně přihlásit. 
V takovém případě by bylo nutné provést deaktivaci funkce editací v SQL databázi.";

$ns -> tablerender("Nápověda - Údržba", $text);
?>
