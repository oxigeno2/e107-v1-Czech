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
|     $Source: /cvsroot/e107/e107_0.7/e107_languages/Czech/admin/help/menus.php,v $
|     $Revision: 1.4 $
|     $Date: 2005/12/14 17:37:43 $
|     $Author: sweetas $
+----------------------------------------------------------------------------+
*/

if(!defined('e107_INIT')){ die("Unauthorised Access");}
if (!getperms("2")) {
	header("location:".e_BASE."index.php");
	 exit;
}
global $sql;
if(isset($_POST['reset'])){
		for($mc=1;$mc<=5;$mc++){
			$sql -> db_Select("menu","*", "menu_location='".$mc."' ORDER BY menu_order");
			$count = 1;
			$sql2 = new db;
			while(list($menu_id, $menu_name, $menu_location, $menu_order) = $sql-> db_Fetch()){
				$sql2 -> db_Update("menu", "menu_order='$count' WHERE menu_id='$menu_id' ");
				$count++;
			}
			$text = "<b>Resetovat menu v databázi</b><br /><br />";
		}
}else{
	unset($text);
}

$text .= "
Vyberte si které, kde a jak, se budou zobrazovat jednotlivé položky oblastí.
<br />
<br />
Pokud se výsledná změna neprojeví správně, pak použijte tlačítko \"Obnovit\".
<br /><br />
<form method='post' id='menurefresh' action='".$_SERVER['PHP_SELF']."'>
<div><input type='submit' class='button' name='reset' value='Obnovit' /></div>
</form>
<br />
<div class='indent'><span style='color:red'>*</span> signalizuje změny v zobrazení menu</div>
";

$ns -> tablerender("Nápověda - Menu", $text);
?>
