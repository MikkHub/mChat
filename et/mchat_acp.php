<?php

/**
 *
 * @package phpBB Extension - mChat
 * @copyright (c) 2016 dmzx - http://www.dmzx-web.net
 * @copyright (c) 2016 kasimi - https://kasimi.net
 * @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
 * Estonian translation by phpBBeesti (c) 2017 - http://www.phpbbeesti.net
 *
 */

if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters for use
// ’ » “ ” …

$lang = array_merge($lang, array(
	// ACP Configuration sections
	'MCHAT_SETTINGS_INDEX'							=> 'Pealehe seaded',
	'MCHAT_SETTINGS_CUSTOM'							=> 'Kohandatud lehekülje seaded',
	'MCHAT_SETTINGS_ARCHIVE'						=> 'Arhiivi lehekülje seaded',
	'MCHAT_SETTINGS_POSTS'							=> 'Uute postituste seaded',
	'MCHAT_SETTINGS_MESSAGES'						=> 'Sõnumite seaded',
	'MCHAT_SETTINGS_PRUNE'							=> 'Kärpimise seaded (ainult foorumi asutajad saavad reguleerida)',
	'MCHAT_SETTINGS_LOG'							=> 'Logi seaded (seadistatavad ainult asutajatele)',
	'MCHAT_SETTINGS_STATS'							=> 'Kes vestlevad seaded',

	'MCHAT_GLOBALUSERSETTINGS_EXPLAIN'				=> 'Seadistatakse neile kasutajatele kellel <strong>EI OLE</strong> õigusi kohandada alljärgnevaid seadeid.<br />Uutel kasutajatel on koheselt need seaded, mis on alljärgnevalt seadistatud.<br /><br />Mine <em>mVestlus KJP</em> vahelehe õiguste sektsiooni, et kohandada neid õigusi.<br />Mine <em>mVestlus seaded</em> väljale <em>kasutaja administratsiooni</em> sektsioonis, et näha ja seadistada antuid olekuid.',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE'			=> 'Seadete ülekirjutamine kõigile kasutajatele',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE_EXPLAIN'	=> 'Rakendatakse üleval toodud seaded <em>kõigile</em> kasutajakontodele.',
	'MCHAT_GLOBALUSERSETTINGS_OVERWRITE_CONFIRM'	=> 'Kinnita mVestluse seadete ülekirjutamine kõigile kasutajatele',

	'MCHAT_ACP_USER_PREFS_EXPLAIN'					=> 'Alljärgnevalt on toodud ära kõik mVestluse eelistused valitud kasutajal. Seadistused mida ei ole valitud kasutajal õigus muuta on keelatud staatuses. Neid seadeid saab muuta mVestluse konfiguratsiooni sektsioonis <em>Üldised kasutaja seaded</em>.',

	// ACP settings
	'MCHAT_ACP_CHARACTERS'							=> 'sümbolit',
	'MCHAT_ACP_MESSAGES'							=> 'sõnumit',
	'MCHAT_ACP_SECONDS'								=> 'sekundit',
	'MCHAT_ACP_HOURS'								=> 'tundi',
	'MCHAT_ACP_DAYS'								=> 'päeva',
	'MCHAT_ACP_WEEKS'								=> 'nädalat',
	'MCHAT_ACP_GLOBALSETTINGS_TITLE'				=> 'mVestlus - Üldised seaded',
	'MCHAT_ACP_GLOBALUSERSETTINGS_TITLE'			=> 'mVestlus - Üldised kasutajapõhised seaded',
	'MCHAT_VERSION'									=> 'Versioon',
	'MCHAT_RULES'									=> 'Reeglid',
	'MCHAT_RULES_EXPLAIN'							=> 'Sisesta reeglid siia. HTML kood on lubatud. <em>Pane tähele, et Sa oled piiratud 255 sümboliga.</em><br />Antud sõnumit on võimalik tõlkida, muutes MCHAT_RULES_MESSAGE väljendit asukohas /ext/dmzx/mchat/language/XX/mchat.php.',
	'MCHAT_CONFIG_SAVED'							=> 'mVestluse konfiguratsiooni uuendati',
	'MCHAT_AVATARS'									=> 'Kuva avatare',
	'MCHAT_AVATARS_EXPLAIN'							=> 'Kui valitud JAH, siis avatare kuvatakse',
	'MCHAT_INDEX'									=> 'Kuva mVestlust pealehel',
	'MCHAT_INDEX_HEIGHT'							=> 'Kõrgus pealehe jaoks',
	'MCHAT_INDEX_HEIGHT_EXPLAIN'					=> 'mVestluse kõrgus pikslites pealehe jaoks.<br /><em>Pane tähele, eet oled piiratud 50 kuni 1000 piksliga. Vaikimisi on selleks 250 px.</em>',
	'MCHAT_TOP_OF_FORUM'							=> 'Üleval',
	'MCHAT_BOTTOM_OF_FORUM'							=> 'All',
	'MCHAT_REFRESH'									=> 'Värskendamise ajavahemik',
	'MCHAT_REFRESH_EXPLAIN'							=> 'Sekundid peale mida uuendatakse mVestluses olevaid sõnumeid.<br /><em>Pane tähele, et oled piiratud 5 kuni 60 sekundiga. Vaikimisi on selleks arvuks 10.</em>',
	'MCHAT_LIVE_UPDATES'							=> 'Otse uuendused muudetud ja kustutatud sõnumite jaoks.',
	'MCHAT_LIVE_UPDATES_EXPLAIN'					=> 'Kui kasutaja muudab või kustutab oma sõnumeid, siis muudatused postitatakse ka vestlusesse ilma, et teised peaksid värskendama lehekülge. Keela antud funktsioon kui peaks esinema jõudluse probleeme.',
	'MCHAT_PRUNE'									=> 'Aktiveeri sõnumite kärpimine',
	'MCHAT_PRUNE_GC'								=> 'Sõnumite kärpimise ajavahemik',
	'MCHAT_PRUNE_GC_EXPLAIN'						=> 'Ajavahemik sekundites mis peab mööduma enne kui taas kutsutakse esile järgmine sõnumite kärpimine. PANE TÄHELE: antud seade kontrollib <em>milllal</em> sõnumeid on vaadatud, et neid saaks kustutada. Antud seade <em>EI</em> kontrolli <em>millal</em> sõnumid on kustutatud. <em>Vaikimisi on määratud 86400 ehk 24 tundi.</em>',
	'MCHAT_PRUNE_NUM'								=> 'Sõnumid mis tuleb säilitada kui kärbitakse',
	'MCHAT_PRUNE_NUM_EXPLAIN'						=> 'Kui kasutadada ’sõnumeid’, siis fikseeritud arv sõnumeid säilitatakse. Kui aga kasutadada ’tundi’, ’päeva’ või ’nädalat’, siis kustutatakse kõik vanemad sõnumid määratud ajast.',
	'MCHAT_PRUNE_NOW'								=> 'Kärbi sõnumeid',
	'MCHAT_PRUNE_NOW_CONFIRM'						=> 'Kinnita sõnumite kärpimine',
	'MCHAT_PRUNED'									=> '%1$d mVestluse sõnumid on kärbitud',
	'MCHAT_NAVBAR_LINK'								=> 'Kuva link kohandatud leheküljele navigatsiooni ribal',
	'MCHAT_NAVBAR_LINK_COUNT'						=> 'Kuva link aktiivsest vestluse sessioonist navigatsiooni ribal',
	'MCHAT_MESSAGE_NUM_CUSTOM'						=> 'Esialgne arv sõnumeid mida kuvatakse kohandatud leheküljel',
	'MCHAT_MESSAGE_NUM_CUSTOM_EXPLAIN'				=> '<em>Sa oled piiratud 5 kuni 50 sõnumiga. Vaikimisi on selleks määratud 10.</em>',
	'MCHAT_MESSAGE_NUM_INDEX'						=> 'Esialgne arv sõnumeid mida kuvatakse pealehel',
	'MCHAT_MESSAGE_NUM_INDEX_EXPLAIN'				=> '<em>Sa oled piiratud 5 kuni 50 sõnumiga. Vaikimisi on selleks määratud 10.</em>',
	'MCHAT_MESSAGE_NUM_ARCHIVE'						=> 'Esialgne arv sõnumeid mida kuvatakse arhiiv leheküljel',
	'MCHAT_MESSAGE_NUM_ARCHIVE_EXPLAIN'				=> 'Maksimaalne arv sõnumeid, mida näidatakse ühel arhiiv leheküljel.<br /><em>Sa oled piiratud 10 kuni 100 sõnumiga. Vaikimisi on selleks määratud 25.</em>',
	'MCHAT_ARCHIVE_SORT'							=> 'Sorteeri sõnumeid',
	'MCHAT_ARCHIVE_SORT_TOP_BOTTOM'					=> 'Alati sorteeri sõnumid vanematest uuemateni',
	'MCHAT_ARCHIVE_SORT_BOTTOM_TOP'					=> 'Alati sorteeri sõnumid uuematest vanemateni',
	'MCHAT_ARCHIVE_SORT_USER'						=> 'Sõnumite sorteerimine sõltub kasutajate <em>uute sõnumite asukoha</em> eelistustest',
	'MCHAT_FLOOD_TIME'								=> 'Ülevoolu aeg',
	'MCHAT_FLOOD_TIME_EXPLAIN'						=> 'Aeg sekundites, mida kasutaja peab ootama enne kui saab postitada järgmise sõnumi vestlusaknasse.<br /><em>Oled piiratud vahemikus 5 kuni 60 sekundit. Vaikimisi on selleks määratud 0. Seadista 0, kui soovid antud funktsiooni keelata.</em>',
	'MCHAT_FLOOD_MESSAGES'							=> 'Flood messages',
	'MCHAT_FLOOD_MESSAGES_EXPLAIN'					=> 'The number of messages a user can send consecutively before another user is required to post in the chat.<br><em>You are limited from 0 to 100 messages. Default is 0. Set to 0 to disable.</em>',
	'MCHAT_EDIT_DELETE_LIMIT'						=> 'Ajaline piirang sõnumite muutmiseks, ning kustutamiseks',
	'MCHAT_EDIT_DELETE_LIMIT_EXPLAIN'				=> 'Sõnumid mis on vanemad kui määratud arv sekundeid EI SAA muuta ega kustutada esialgse autori poolt.<br />Kasutajad, kellel on <em>muutmise/kustutamise õgius, nagu ka moderaatori õigused on vabastatud</em> sellest ajapiirangust.<br />Seadista väärtuseks 0, et lubada piiramatu muutmine ja kustutamine.',
	'MCHAT_MAX_MESSAGE_LENGTH'						=> 'Maksimaalne sõnumi pikkus',
	'MCHAT_MAX_MESSAGE_LENGTH_EXPLAIN'				=> 'Maksimaalne arv sümboleid, mis on lubatud ühe sõnumi kohta.<br /><em>Oled piiratud 0 kuni 1000 vahele. Vaikimisi on selleks määratud 500. Seadistades väärtuseks 0 keelad antud funktsiooni.</em>',
	'MCHAT_MAX_INPUT_HEIGHT'						=> 'Maximum input field height',
	'MCHAT_MAX_INPUT_HEIGHT_EXPLAIN'				=> 'The input field will not expand beyond this number of pixels.<br><em>You are limited from 0 to 1000. Default is 150. Set to 0 to not allow multi-line messages.</em>',
	'MCHAT_CUSTOM_PAGE'								=> 'Aktiveeri kohandatud lehekülg',
	'MCHAT_CUSTOM_HEIGHT'							=> 'Kohandatud lehekülje kõrgus',
	'MCHAT_CUSTOM_HEIGHT_EXPLAIN'					=> 'Vestlusakna kõrgus pikslites kohandatud lehekülje jaoks.<br /><em>Oled piiratud 50 kuni 1000 px vahele. Vaikimisi on see määratud 350 px.</em>',
	'MCHAT_BBCODES_DISALLOWED'						=> 'Keelatud BBkoodid',
	'MCHAT_BBCODES_DISALLOWED_EXPLAIN'				=> 'Siin on sul võimalik sisestada BBkoode, mida <strong>EI OLE</strong> võimalik kasutada sõnumites.<br />Eralda BBkoodid vertikaalse ribaga, nagu näiteks: <br />b|i|u|code|list|list=|flash|quote ja/või %1$skohandatud BBkoodi märgendi nimi%2$s',
	'MCHAT_STATIC_MESSAGE'							=> 'Staatiline sõnum',
	'MCHAT_STATIC_MESSAGE_EXPLAIN'					=> 'Siin on sul võimalik ära määrata stabiilselt seisva sõnumi oma kasutajatele näitamaks vestluseaknas. HTML kood on lubatud.<br />Jäta tühjaks, et keelata näitamine. <em>Oled piiratud 255 sümbolini.</em><br />Seda sõnumit on võimalik tõlkida: muuda MCHAT_STATIC_MESSAGE keelefailis asukohaga /ext/dmzx/mchat/language/XX/mchat.php kus XX on keelefaili kaust',
	'MCHAT_TIMEOUT'									=> 'mVestluse sessioon aegub',
	'MCHAT_TIMEOUT_EXPLAIN'							=> 'Seadista aeg sekundites peale mida kasutaja sessioon vestluses lõpeb.<br />Seadista 0 kui ei soovi seda kasutada. Sessioonil, mil kasutaja loeb mVestlust ei aegu kunagi!<br /><em>Oled piiratud %1$sfoorumi sessiooni konfiguratsiooni seadetega sel juhul%2$s mis on hetkel seadistatud %3$d sekundile</em>',
	'MCHAT_OVERRIDE_SMILIE_LIMIT'					=> 'Emotikonide piirangu ülekirjutamine',
	'MCHAT_OVERRIDE_SMILIE_LIMIT_EXPLAIN'			=> 'Seadista jah, kui soovid kirjutada üle foorumite emotikoni piirangu vestluse sõnumitele',
	'MCHAT_OVERRIDE_MIN_POST_CHARS'					=> 'Sümbolite minimaalse piirangu ülekirjutamine',
	'MCHAT_OVERRIDE_MIN_POST_CHARS_EXPLAIN'			=> 'Seadista jah, kui soovid kirjutada üle foorumite minimaalse sümboli piirangu vestluse sõnumites',
	'MCHAT_LOG_ENABLED'								=> 'Add entries to the admin log',
	'MCHAT_LOG_ENABLED_EXPLAIN'						=> 'This affects message editing, deleting, pruning and purging.',

	'MCHAT_POSTS_AUTH_CHECK'						=> 'Vajalik kasutaja õigusi',
	'MCHAT_POSTS_AUTH_CHECK_EXPLAIN'				=> 'Kui seadistatud JAH, siis kasutajad kellel ei ole õigusi kasutada mVestlust, siis neile ei genereerita ühtegi postituse või sisselogimise teadet.',

	'MCHAT_WHOIS_REFRESH'							=> 'Värskendamise ajavahemik "KES ON VESTLUSES" sektsioonis',
	'MCHAT_WHOIS_REFRESH_EXPLAIN'					=> 'Ajavahemik sekundites, millal värskendatakse "KES ON VESTLUSES" sektsooni.<br /><em>Oled piiratud 10 kuni 300 sekundi vahele. Vaikimisi on selleks määratud 60 sekundit.</em>',
	'MCHAT_SOUND'									=> 'Esita heli kui uue, muudetud või kustutatud sõnumi jaoks',
	'MCHAT_PURGE'									=> 'Kustuta kõik sõnumid mVestluses',
	'MCHAT_PURGE_CONFIRM'							=> 'Kinnita kõigi sõnumite kustutamine mVestluses',
	'MCHAT_PURGED'									=> 'Kõik sõnumid mVestluses on edukalt kustutatud',

	// '%1$s' contains 'Retain posts' and 'Delete posts' respectively
	'MCHAT_RETAIN_MESSAGES'							=> '%1$s ja säilita mVestluse sõnumid',
	'MCHAT_DELETE_MESSAGES'							=> '%1$s ja kustuta mVestluse sõnumid',

	// Error reporting
	'TOO_LONG_MCHAT_BBCODE_DISALLOWED'				=> 'Keelatud BBkoodide väärtus on liiga pikk.',
	'TOO_SMALL_MCHAT_CUSTOM_HEIGHT'						=> 'Kohandatud kõrgus on liiga väike.',
	'TOO_LARGE_MCHAT_CUSTOM_HEIGHT'						=> 'Kohandatud kõrgus on liiga suur.',
	'TOO_LONG_MCHAT_DATE'											=> 'Sisestatud kuupäeva formaat on liiga pikk.',
	'TOO_SHORT_MCHAT_DATE'										=> 'Sisestatud kuupäeva formaat on liiga lühike.',
	'TOO_SMALL_MCHAT_FLOOD_TIME'							=> 'Ülevoolu aja väärtus on liiga väike.',
	'TOO_LARGE_MCHAT_FLOOD_TIME'							=> 'Ülevoolu aja väärtus on liiga suur.',
	'TOO_SMALL_MCHAT_INDEX_HEIGHT'						=> 'Pealehele määratud kõrgus on liiga väike.',
	'TOO_LARGE_MCHAT_INDEX_HEIGHT'						=> 'Pealehele määratud kõrgus on liiga suur.',
	'TOO_SMALL_MCHAT_MAX_MESSAGE_LNGTH'				=> 'Maksimaalse sõnumi pikkuse väärtus on liiga väike.',
	'TOO_LARGE_MCHAT_MAX_MESSAGE_LNGTH'				=> 'Maksimaalse sõnumi pikkuse väärtus on liiga suur.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_CUSTOM'			=> 'Näidatavate sõnumite arv kohandatud leheküljel on liiga väike	.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_CUSTOM'			=> 'Näidatavate sõnumite arv kohandatud leheküljel on liiga suur.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_INDEX'				=> 'Näidatavate sõnumite arv pealehel on liiga väike.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_INDEX'				=> 'Näidatavate sõnumite arv pealehel on liiga suur.',
	'TOO_SMALL_MCHAT_MESSAGE_NUM_ARCHIVE'			=> 'Näidatavate sõnumite arv arhiiv leheküljel on liiga väike.',
	'TOO_LARGE_MCHAT_MESSAGE_NUM_ARCHIVE'			=> 'Näidatavate sõnumite arv arhiiv leheküljel on liiga suur.',
	'TOO_SMALL_MCHAT_REFRESH'									=> 'Värskendamise väärtus on liiga väike.',
	'TOO_LARGE_MCHAT_REFRESH'									=> 'Värskendamise väärtus on liiga suur.',
	'TOO_LONG_MCHAT_STATIC_MESSAGE'						=> 'Staatilise sõnumi väärtus on liiga pikk.',
	'TOO_SMALL_MCHAT_TIMEOUT'									=> 'Kasutaja sessiooni väärtus on liiga väike.',
	'TOO_LARGE_MCHAT_TIMEOUT'									=> 'Kasutaja sessiooni väärtus on liiga suur.',
	'TOO_SMALL_MCHAT_WHOIS_REFRESH'						=> 'KES ON...? - värskenduse väärtus on liiga väike.',
	'TOO_LARGE_MCHAT_WHOIS_REFRESH'						=> 'KES ON...? - värskenduse väärtus on liiga suur.',

	'MCHAT_30X_REMNANTS'											=> 'Paigaldamine on katkestatud.<br />Andmebaasi on veel jäänud mVestluse phpBB 3.0.X MODi moodulid. Laiendus mVestlus ei tööta nende moodulitega korrektselt.<br />Sa pead täielikult eemaldama mVestlus MODi enne kui saad paigaldada mVestlus laienduse. Täpsemalt siis, moodulid järgnevate ID\'dega pead kustutama %1$smoodulite tabelist: %2$s',
));
