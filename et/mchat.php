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
	'MCHAT_ADD'						=> 'Saada',
	'MCHAT_ARCHIVE'					=> 'Arhiiv',
	'MCHAT_ARCHIVE_PAGE'			=> 'mini-Vestlus arhiiv',
	'MCHAT_CUSTOM_PAGE'				=> 'mVestlus',
	'MCHAT_BBCODES'					=> 'BBkood',
	'MCHAT_CUSTOM_BBCODES'			=> 'Kohandatud BBkoodid',
	'MCHAT_DELCONFIRM'				=> 'Kas oled kindel, et soovid kustutada antud sõnumi?',
	'MCHAT_EDIT'					=> 'Muuda',
	'MCHAT_EDITINFO'				=> 'Muuda järgnevat sõnumit.',
	'MCHAT_NEW_CHAT'				=> 'UUS SÕNUM VESTLUSES!',
	'MCHAT_SEND_PM'					=> 'Saada privaatsõnum',
	'MCHAT_LIKE'					=> 'Meeldib',
	'MCHAT_LIKES'					=> 'meeldib postitus',
	'MCHAT_FLOOD'					=> 'Sa ei saa postitada oma järgmist sõnumit vahetult eelmisele.',
	'MCHAT_FOE'						=> 'See sõnum on tehtud kasutaja <strong>%1$s</strong> poolt, kes on hetkel Sinu vaenlaste nimekirjas.',
	'MCHAT_RULES'					=> 'Reeglid',
	'MCHAT_WHOIS_USER'				=> '“Kes on?” IP aadressi otsing kasutajale %1$s',
	'MCHAT_MESS_LONG'				=> 'Sinu sõnum on liiga pikk. Palun lühenda oma sõnum lubatud %1$d sümbolini',
	'MCHAT_NO_CUSTOM_PAGE'			=> 'Kohandatud lehekülg mVestluses ei ole aktiveeritud.',
	'MCHAT_NO_RULES'				=> 'Reeglite lehekülg mVestluses ei ole aktiveeritud.',
	'MCHAT_NOACCESS_ARCHIVE'		=> 'Sul ei ole õigusi vaadata arhiivi.',
	'MCHAT_NOJAVASCRIPT'			=> 'Palun luba Javascript mVestluse kasutamiseks.',
	'MCHAT_NOMESSAGE'				=> 'Sõnumid puuduad',
	'MCHAT_NOMESSAGEINPUT'			=> 'Sa ei ole sisestanud sõnumit',
	'MCHAT_MESSAGE_DELETED'			=> 'Antud sõnum on kustatud.',
	'MCHAT_OK'						=> 'OK',
	'MCHAT_PAUSE'					=> 'Peatatud',
	'MCHAT_PERMISSIONS'				=> 'Muuda kasutaja(te) õigusi',
	'MCHAT_REFRESHING'				=> 'Värskendan…',
	'MCHAT_REFRESH_NO'				=> 'Uuendamine on välja lülitatud',
	'MCHAT_REFRESH_YES'				=> 'Uuendamine iga <strong>%1$d</strong> sekundi järel',
	'MCHAT_RESPOND'					=> 'Vasta kasutajale',
	'MCHAT_SESSION_ENDS'			=> 'Vestluse sessioon aegub %1$s',
	'MCHAT_SESSION_OUT'				=> 'Vestluse sessioon on aegunud',
	'MCHAT_SMILES'					=> 'Emotikonid',
	'MCHAT_TOTALMESSAGES'			=> 'Sõnumeid kokku: <strong>%1$d</strong>',
	'MCHAT_USESOUND'				=> 'Esita heli',
	'MCHAT_COLLAPSE_TITLE'			=> 'Kahanda mVestluse nähtavust',
	'MCHAT_WHO_IS_REFRESH_EXPLAIN'	=> 'Värskendatakse iga <strong>%1$d</strong> sekundi järel',
	'MCHAT_MINUTES_AGO'				=> array(
		0 => 'hetk tagasi',
		1 => '%1$d minut tagasi',
		2 => '%1$d minutit tagasi',
	),

	// These messages are formatted with JavaScript, hence {} and no %d
	'MCHAT_CHARACTER_COUNT'			=> '<strong>{current}</strong> sümbolit',
	'MCHAT_CHARACTER_COUNT_LIMIT'	=> '<strong>{current}</strong> / {max}\'st sümbolist',
	'MCHAT_SESSION_ENDS_JS'			=> 'Vestluse sessioon aegub  {timeleft}',
	'MCHAT_MENTION'					=> ' @{username} ',

	// Custom translations for administrators => Kohandatav tõlge administraatoritele
	'MCHAT_RULES_MESSAGE'			=> '',
	'MCHAT_STATIC_MESSAGE'			=> '',
));
