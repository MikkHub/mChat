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
	'MCHAT_TITLE'					=> 'mVestlus',
	'MCHAT_TITLE_COUNT'				=> 'mini-Vestlus [<strong>%1$d</strong>]',

	// Who is chatting
	'MCHAT_WHO_IS_CHATTING'			=> 'Kes vestlevad',
	'MCHAT_ONLINE_USERS_TOTAL'		=> array(
		0 => 'Kedagi pole vestlemas',
		1 => '<strong>%1$d</strong> kasutaja vestluses',
		2 => '<strong>%1$d</strong> kasutajat vestluses',
	),
	'MCHAT_ONLINE_EXPLAIN'			=> 'põhineb viimase %1$s minuti aktiivsetel kasutajatel',
	'MCHAT_HOURS'					=> array(
		1 => '%1$d tundi',
		2 => '%1$d tundi',
	),
	'MCHAT_MINUTES'					=> array(
		1 => '%1$d minut',
		2 => '%1$d minutit',
	),
	'MCHAT_SECONDS'					=> array(
		1 => '%1$d sekund',
		2 => '%1$d sekundit',
	),

	// Post notification messages (%1$s is replaced with a link to the new/edited post, %2$s is replaced with a link to the forum)
	'MCHAT_NEW_POST'				=> 'postitas uue teema %1$s, %2$s foorumisse',
	'MCHAT_NEW_POST_DELETED'		=> 'postitas uue teema mis kustutati',
	'MCHAT_NEW_REPLY'				=> 'postitas vastuse teemasse %1$s, mis asub %2$s kategoorias',
	'MCHAT_NEW_REPLY_DELETED'		=> 'postitas uue vastuse mis kustutati',
	'MCHAT_NEW_QUOTE'				=> 'vastas tsiteerides %1$s teemas, mis asub %2$s kategoorias',
	'MCHAT_NEW_QUOTE_DELETED'		=> 'postitas vastuse mis kustutati',
	'MCHAT_NEW_EDIT'				=> 'muutis postitust teemas %1$s, mis asub %2$s kategoorias',
	'MCHAT_NEW_EDIT_DELETED'		=> 'muudetus postitus kustutati',
	'MCHAT_NEW_LOGIN'				=> 'parajasti logis sisse vestlusesse',
));
