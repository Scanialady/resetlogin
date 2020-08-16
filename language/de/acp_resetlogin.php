<?php
/**
*
* @package Reset User Login Attempts
* @copyright (c) 2014 david63
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
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
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'ERROR_TITLE'			=> 'Fehler',

	'NO_LOGINS'				=> 'Der ausgewählte Benutzer hat keine fehlgeschlagenen Loginversuche zum Zurücksetzen',
	'NO_USER'				=> 'Der ausgewählte Benutzer existiert nicht in der Datenbank',
	'NO_USER_SPECIFIED'		=> 'Kein Benutzer ausgewählt',

	'RESET_LOGIN_EXPLAIN'	=> 'Hier kannst du die fehlgeschlagenen Loginversuche eines Benutzers zurücksetzen',

	'USER_EXPLAIN'			=> 'Wähle den gewünschten Benutzer aus',
	'USER_LOGIN_RESET'		=> '%1$s fehlgeschlagene Loginversuche erfolgreich zurückgesetzt für <strong>%2$s</strong>.',
));
