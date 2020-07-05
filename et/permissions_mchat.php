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
	'ACL_U_MCHAT_USE'							=> 'Saab kasutada mVestlust',
	'ACL_U_MCHAT_VIEW'						=> 'Saab vaadata mVestlust',
	'ACL_U_MCHAT_EDIT'						=> 'Saab muuta oma tehtuid sõnumeid',
	'ACL_U_MCHAT_DELETE'					=> 'Saab kustutada oma tehtuid sõnumeid',
	'ACL_U_MCHAT_MODERATOR_EDIT'	=> 'Saab muuta kõigi sõnumeid',
	'ACL_U_MCHAT_MODERATOR_DELETE'		=> 'Saab kustutada kõigi sõnumeid',
	'ACL_U_MCHAT_IP'							=> 'Saab vaadata IP aadresse',
	'ACL_U_MCHAT_PM'							=> 'Saab kasutada privaatsõnumit',
	'ACL_U_MCHAT_LIKE'						=> 'Saab märkida “Meeldib” sõnumile',
	'ACL_U_MCHAT_QUOTE'						=> 'Saab tsiteerida sõnumit',
	'ACL_U_MCHAT_FLOOD_IGNORE'		=> 'Saab ignoreeride ülevoolu piirangut',
	'ACL_U_MCHAT_ARCHIVE'					=> 'Saab vaadata arhiivi',
	'ACL_U_MCHAT_BBCODE'					=> 'Saab kasutada BBkoode',
	'ACL_U_MCHAT_SMILIES'					=> 'Saab kasutada emotikone',
	'ACL_U_MCHAT_URLS'						=> 'Saab postitada URL\'e',

	'ACL_U_MCHAT_AVATARS'					=> 'Saab kohandada <em>näita avatare</em>',
	'ACL_U_MCHAT_CAPITAL_LETTER'	=> 'Saab kohandada <em>esimene on suur täht</em>',
	'ACL_U_MCHAT_CHARACTER_COUNT'	=> 'Saab kohandada <em>näita sümbolite arvu</em>',
	'ACL_U_MCHAT_DATE'						=> 'Saab kohandada <em>kuupäeva formaati</em>',
	'ACL_U_MCHAT_INDEX'						=> 'Saab kohandada <em>näita pealehel</em>',
	'ACL_U_MCHAT_INPUT_AREA'			=> 'Saab kohandada <em>sisendvälja tüüpi</em>',
	'ACL_U_MCHAT_LOCATION'				=> 'Saab kohandada <em>mVestluse asukohta pealehel</em>',
	'ACL_U_MCHAT_MESSAGE_TOP'			=> 'Saab kohandada <em>uute sõnumite asukohta mVestluses</em>',
	'ACL_U_MCHAT_PAUSE_ON_INPUT'	=> 'Saab kohandada <em>peatada värskenduse sõnumi sisestamisel</em>',
	'ACL_U_MCHAT_POSTS'						=> 'Saab kohandada <em>näita uusi postitusi</em>',
	'ACL_U_MCHAT_RELATIVE_TIME'		=> 'Saab kohandada <em>kuva relatiivset aega</em>',
	'ACL_U_MCHAT_SOUND'						=> 'Saab kohandada <em>mängi heli</em> seadet',
	'ACL_U_MCHAT_WHOIS_INDEX'			=> 'Saab kohandada <em>näita kes on vestluses akna all</em>',
	'ACL_U_MCHAT_STATS_INDEX'			=> 'Saab kohandada <em>näita kes on vestluses statistika sektsioonis</em>',

	'ACL_A_MCHAT'									=> 'Saab hallata mVestluse seadeid',
));
