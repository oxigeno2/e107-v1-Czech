<?php
/*
+---------------------------------------------------------------+
|        e107 website content management system Czech Language File
|        Released under the terms and conditions of the
|        GNU General Public License (http://gnu.org).
|
|        $URL: ../e107_languages/Czech/lan_installer.php $
|        $Revision: 1.0.1 $
|        $Id: 2012/05/17 21:03:51 $
|        $Author: Oxigen $
+---------------------------------------------------------------+
*/

define('LANINS_TITLE', 'Instalace e107');
define('LANINS_000', 'Neplatné údaje! Instalace zastavena.');
define('LANINS_001', 'Verze %1$s');
define('LANINS_002', 'Instalace');
define('LANINS_002a', '(Krok %1$s z 7)');
define('LANINS_003', '1');
define('LANINS_004', 'Volba jazyka');
define('LANINS_004a', 'Zvolený jazyk');
define('LANINS_004b', 'Jazyk');
define('LANINS_005', 'Prosím vyberte si jazyk, který chcete mít při instalaci');
define('LANINS_006', 'Nastavit jazyk');
define('LANINS_007', '4');
define('LANINS_008', 'kontrola verzí PHP & MySQL  / kontrola oprávnění přístupu k souborům');
define('LANINS_008a', 'Oprávnění & Kompatibilita souborů');
define('LANINS_009', 'Překontrolovat oprávnění přístupu k souborům');
define('LANINS_010', 'Do souboru nelze zapsat:');
define('LANINS_010a', 'Do adresáře nelze zapsat:');
define('LANINS_011', 'Chyba');
define('LANINS_012', 'Funkce MySQL neexistuje. Pravděpodobně není instalováno PHP rozšíření pro MySQL nebo nebyla instalace PHP kompilována s podporou MySQL.');
define('LANINS_013', 'Nemohu zjistit verzi MySQL. Nejde o závažnou chybu, takže můžete pokračovat v instalaci, ale buďte si vědomi toho, že e107 vyžaduje MySQL >= 3.23, aby vše pracovalo správně.');
define('LANINS_014', 'Oprávnění přístupu k souborům');
define('LANINS_015', 'PHP Verze');
define('LANINS_016', 'MySQL');
define('LANINS_017', 'PASS');
define('LANINS_018', 'Ujistěte se, že všechny soubory existují a mají nastaveno právo zápisu pro server. Běžně to znamená nastavení pomocí CHMOD na 777, ale záleží na prostředí. Pokud máte problémy, kontaktujte administrátora svého hostingu.');
define('LANINS_019', 'Verze instalovaná na Vašem serveru není dostatečná pro zajištění provozu e107. e107 vyžaduje PHP minimálně ve verzi 4.3.0. Nainstalujte si novější verzi nebo kontaktujte administrátora svého hostingu.');
define('LANINS_020', 'Pokračovat v instalaci');
define('LANINS_021', '2');
define('LANINS_022', 'Detaily MySQL Serveru');
define('LANINS_022a', 'Databáze');
define('LANINS_023', 'Vložte prosím údaje nastavení MySQL.<br /><br />Pokud máte root práva, lze vytvořit databázi - zaškrtněte výběrové pole. Pokud práva rootu nemáte, musíte vytvořit databázi sami a nebo použít již existující.Pokud máte k dispozici pouze jednu databázi, použijte prefix, aby mohly s databází pracovat i jiné skripty.Pokud neznáte detaily nastavení MySQL serveru kontaktujte administrátora hostingu.');
define('LANINS_024', 'MySQL Server:');
define('LANINS_025', 'MySQL Uživatelské jméno:');
define('LANINS_026', 'MySQL Heslo:');
define('LANINS_027', 'MySQL Databáze:');
define('LANINS_028', 'Vytvořit Databázi?');
define('LANINS_029', 'Prefix pro tabulky:');
define('LANINS_030', 'Server MySQL, který chcete použít pro e107. Může obsahovat i číslo portu, např. hostname:port nebo cestu k lokální zásuvce (socket), např.:/path/to/socket\, v případě lokálního nastavení (localhost).');
define('LANINS_031', 'Uživatelské jméno, které má e107 použít pro spojení se serverem MySQL');
define('LANINS_032', 'Heslo k tomuto uživatelskému jménu');
define('LANINS_033', 'Databáze, do které se má e107 umístit/nainstalovat, někdy též označováno jako schema. Pokud má uživatel práva pro vytvoření databáze, můžete zvolit, aby byla databáze vytvořena automaticky (v případě, že ještě neexistuje).');
define('LANINS_034', 'Prefix, který má e107 používat při tvorbě tabulek databáze. To je užitečné hlavně pro vícero instalací e107 v rámci jedné databáze.');
define('LANINS_035', 'Pokračovat');
define('LANINS_036', '3');
define('LANINS_037', 'Ověření spojení s MySQL');
define('LANINS_038', ' a tvorba databáze');
define('LANINS_038a', 'Validace databáze');
define('LANINS_039', 'Ujistěte se, že jste vyplnili všechny údaje. Nejdůležitější jsou: jméno MySQL serveru, uživatelské jméno MySQL a heslo, název databáze MySQL (tyto údaje server MySQL vždy vyžaduje)');
define('LANINS_040', 'Chyby');
define('LANINS_041', 'S použitím vložených informací nemohl systém e107 navázat spojení se serverem MySQL.<br /> Vraťte se na předchozí stranu a ujistěte se, že jsou vložené údaje správné.');
define('LANINS_042', 'Spojení se serverem bylo navázáno a ověřeno.');
define('LANINS_043', 'Nelze vytvořit databázi. Ujistěte se prosím, že máte korektně nastavená práva pro vytváření databáze na serveru MySQL.');
define('LANINS_044', 'Databáze byla úspěšně vytvořena.');
define('LANINS_045', 'Klikněte na další krok.');
define('LANINS_046', '5');
define('LANINS_047', 'Detaily Administrátora');
define('LANINS_047a', 'Administrace');
define('LANINS_048', 'Vrátit zpět na poslední krok');
define('LANINS_049', 'Hesla, která byla vložena nejsou stejná. Vraťte se prosím zpět a zkuste to znovu.');
define('LANINS_050', 'XML rozšíření');
define('LANINS_051', 'nainstalováno');
define('LANINS_052', 'nenainstalováno');
define('LANINS_053', 'e107 .700 vyžaduje nainstalované XML rozšíření PHP. Kontaktujte administrátora svého hostingu nebo si přečtěte informace na <a href="http://php.net/manual/en/ref.xml.php" target="_blank">php.net</a>');
define('LANINS_054', 'Existence zvolené databáze úspěšně ověřena');
define('LANINS_055', 'Potvrzení instalace');
define('LANINS_055a', 'Potvrdit');
define('LANINS_056', '6');
define('LANINS_057', '  e107 má nyní k dispozici všechny informace nezbytné pro instalaci.<br /><br />Klikněte prosím na tlačítko. Bude vytvořena databáze a uložena všechna nastavení.');
define('LANINS_058', '7');
define('LANINS_060', 'Není možné přečíst soubor s daty pro sql.Ujistěte se, že soubor <b>core_sql.php</b> je v adresáři <b>/e107_admin/sql</b> .');
define('LANINS_061', 'e107 se nezdařilo vytvořit všechny tabulky databáze.<br /><br />Před tím, než to zkusíte znovu, vyčistěte databázi a odstraňte všechny problémy.');
define('LANINS_062', '');
define('LANINS_063', 'Vítejte v e107');
define('LANINS_069', 'e107 byl úspěšně nainstalován!

Z bezpečnostních důvodů je nutné nastavit přístupová práva pro soubor <b>e107_config.php</b> zpět na 644.
<br />Po té co kliknete na tlačítko níže, smažte soubor <i>install.php</i> a adresář <i>e107_install</i>..');
define('LANINS_070', 'Systému e107 se nezdařilo uložit hlavní konfiguraci na Váš server.Ujistěte se prosím, že soubor <b>e107_config.php</b> má korektně nastavena práva');
define('LANINS_071', 'Dokončuji instalaci');
define('LANINS_071a', 'Hotovo');
define('LANINS_071b', 'Vyskytla se chyba před dokončením instalace');
define('LANINS_071c', 'Hotovo s chybami');
define('LANINS_072', 'Uživatelské jméno administrátora');
define('LANINS_073', 'To je uživatelské jméno, které použijete k přihlášení do systému. Pokud jej chcete používat také jako své jméno pro zobrazení (display name)');
define('LANINS_074', 'Jméno Administrátora pro zobrazení');
define('LANINS_075', 'Jméno, které bude zobrazováno uživatelům ve Vašem profilu, fórech a dalších oblastech. Pokud chcete použít stejné jako je jméno uživatelské, nechte toto pole prázdné.');
define('LANINS_076', 'Heslo administrátora');
define('LANINS_077', 'Sem zadejte heslo administrátora');
define('LANINS_078', 'Potvrzení hesla administrátora');
define('LANINS_079', 'Heslo administrátora vložte ještě jednou, pro potvrzení');
define('LANINS_080', 'Email administrátora');
define('LANINS_081', 'Vložte svou emailovou adresu');
define('LANINS_082', 'uzivatel@vasestranky.cz');
define('LANINS_083', 'Chybná odpověď od MySQL:');
define('LANINS_084', 'Instalátor nemůže navázat spojení s databází');
define('LANINS_085', 'Instalátor nemůže vybrat databázi:');
define('LANINS_086', 'Jméno administrátora, heslo a email administrátora jsou <b>povinné</b> položky. Vraťte se na předchozí stránku a ujistěte se, že jsou tyto údaje správně vyplněny.');
define('LANINS_087', 'Ostatní');
define('LANINS_088', 'Domů');
define('LANINS_089', 'Ke stažení');
define('LANINS_090', 'Členové');
define('LANINS_091', 'Odeslat novinku');
define('LANINS_092', 'Napište nám');
define('LANINS_093', 'Povoluje přístup k privátním položkám menu');
define('LANINS_094', 'Příklad užití třídy privátní diskuse');
define('LANINS_095', 'Kontrola integrity');
define('LANINS_096', 'Nejnovější komentáře');
define('LANINS_097', '[další ...]');
define('LANINS_098', 'Novinky');
define('LANINS_099', 'e107 CMS');
define('LANINS_100', 'Nejnovější příspěvky fóra');
define('LANINS_101', 'Aktualizovat menu Nastavení');
define('LANINS_102', 'Datum / Čas');
define('LANINS_103', 'Doplňky pro e107');
define('LANINS_104', 'Kontrola');
define('LANINS_105', 'Název databáze nebo předpony nesmí začínat čísly a následovat \'e\' nebo \'E\' <br /> Název databáze a předpona nemůže být prázdný.');
define('LANINS_106', 'Varování - E107 nemůže zapisovat do adresáře a/nebo souboru v seznamu. Pokud budete v instalaci pokračovat a správně nenastavíte přístupová práva složek/souborů, je možné, že určité části systému nebudou po instalaci dostupné.<br /><br />Je zapotřebí nejprve správně nastavit přístupová práva souborů.');
define('LANINS_107', 'e107_config.php již obsahuje údaje');
define('LANINS_108', 'Pravděpodobně máte existující instalaci');
define('LANINS_DB_UTF8_LABEL', 'Převést databázi na UTF-8?');
define('LANINS_DB_UTF8_CAPTION', 'Kódování MySQL:');
define('LANINS_DB_UTF8_TOOLTIP', 'Je-li zaškrtnuto, bude se instalační skript snažit, aby databáze byla UTF-8 kompatibilní. UTF-8 databáze je nutné pro další verze E107.');
define('LANINS_109', 'Inicializace');
define('LANINS_110', 'Kompletní');
define('LANINS_111', 'Vzhledy pro e107');
define('LANINS_112', 'Příručka pro e107');
define('LANINS_113', '');
define('LANINS_121', 'e107_config.php již existuje!');
define('LANINS_122', 'Pravděpodobně máte existující instalaci');
define('LANINS_123', 'Ladící informace');
define('LANINS_124', 'Backtrace');
define('LANINS_125', 'Neplatný krok');
define('LANINS_125a', 'Chyba');
define('LANINS_WELCOME', '[b]Vítejte na vašich nových webových stránkách![/b] CMS e107 byl úspěšně nainstalován a je připraven k okamžitému použití. Vaše administrační sekce [link=e107_admin/admin.php]se nachází zde[/link], klikněte na odkaz, budete přesměrování na přihlašovací stránku. Pro vstup do administrační sekce budete vyzváni k zadání přihlašovacího jména a hesla hlavního administrátora, zadejte jméno a heslo které jste vložily během instalace.
[b]Podpora:[/b]
[link=http://e107.org/]e107 Stránka projektu e107[/link]
[link=http://e107.org/support]Fórum o e107[/link]
[link=http://wiki.e107.org/]e107 Příručka[/link]
Děkujeme za instalaci e107, zároveň doufáme že splní vaše očekávání.

[link=http://e107.funsite.cz/]Portál pro české uživatele e107[/link]');
define('LANINS_NEWS', '[b]Vítejte![/b] e107 je redakční systém napsaný v jazyce PHP používající mySQL databázi k uchování obsahu webu (články apod.). Je zcela zdarma, zcela přizpůsobitelný a ve stálém vývoji. Vzhled webu postaveného na e107 můžete ovlivňovat pomocí mnoha šablon. [list][link=http://e107.org/content/Learn-all-about-e107]Vše, co potřebujete vědět o e107[/link]*[link=http://e107.org/content/About-Us:The-Team]Realizační tým | Překladatelé | Tým podpory[/link]*[link=http://wiki.e107.org/]Dokumentace Wiki[/link][/list]');


?>