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
	'MCHAT_PREFERENCES'				=> 'mVestlus eelistused',
	'MCHAT_NO_SETTINGS'				=> 'Sul ei ole õigusi kohandada neid seadeid.',

	'MCHAT_INDEX'					=> 'Kuva pealehel',
	'MCHAT_SOUND'					=> 'Luba heli',
	'MCHAT_WHOIS_INDEX'				=> 'Kuva <em>KES ON VESTLUSES</em> vestluse all',
	'MCHAT_STATS_INDEX'				=> 'Kuva <em>KES ON VESTLUSES</em> statistika sektsioonis',
	'MCHAT_STATS_INDEX_EXPLAIN'		=> 'Näidatakse kes on vestlust pealehe <em>Kes on foorumil</em> sektsioonis.',
	'MCHAT_AVATARS'					=> 'Kuva avatare',
	'MCHAT_CAPITAL_LETTER'			=> 'Alusta alati minu sõnumit suure tähega',
	'MCHAT_CHAT_AREA'				=> 'Sisestusvälja tüüp',
	'MCHAT_INPUT_AREA'				=> 'Sisestusvälja väli',
	'MCHAT_TEXT_AREA'				=> 'Tekstiala',
	'MCHAT_POSTS'					=> 'Kuva uusi postitusi (hetkel on kõik keelatud, saab lubada administraatori juhtpaneelist mVestlus - Üldised seaded alt)',
	'MCHAT_DISPLAY_CHARACTER_COUNT'	=> 'Kuva järele jäänud sümbolite arvu sõnumi sisestamise ajal',
	'MCHAT_RELATIVE_TIME'			=> 'Kuva relatiivset aega uutele sõnumitele',
	'MCHAT_RELATIVE_TIME_EXPLAIN'	=> 'Kuvatakse "hetk tagasi", "1 minut tagasi" jne igale sõnumile. Määra <em>Ei</em>, et alati kuvada täispikk kuupäeva formaat.',
	'MCHAT_PAUSE_ON_INPUT'			=> 'Sõnumi sisestamise ajal peatatakse värskendamine',
	'MCHAT_PAUSE_ON_INPUT_EXPLAIN'	=> 'mVestlust ei värskendata kui sisestatakse uut sõnumit',
	'MCHAT_MESSAGE_TOP'				=> 'Uute sõnumite asjukoht vestluses',
	'MCHAT_MESSAGE_TOP_EXPLAIN'		=> 'Uued sõnumid ilmuvad ülevalt või siis alt.',
	'MCHAT_LOCATION'				=> 'Asukoht pealehel',
	'MCHAT_BOTTOM'					=> 'All',
	'MCHAT_TOP'						=> 'Üleval',

	'MCHAT_POSTS_TOPIC'				=> 'Kuva uusi teemasi',
	'MCHAT_POSTS_REPLY'				=> 'Kuva uusi vastuseid',
	'MCHAT_POSTS_EDIT'				=> 'Kuva muudetuid postitusi',
	'MCHAT_POSTS_QUOTE'				=> 'Kuva tsiteerituid postitusi',
	'MCHAT_POSTS_LOGIN'				=> 'Kuva kasutajate sisenemisi vestlusesse',

	'MCHAT_DATE_FORMAT'				=> 'Kuupäeva formaat',
	'MCHAT_DATE_FORMAT_EXPLAIN'		=> 'Kasutatatud süntaks on samasugune nagu PHP <a href="http://www.php.net/date">date()</a> funktsioonil.',
	'MCHAT_CUSTOM_DATEFORMAT'		=> 'Kohandatud…',
));
