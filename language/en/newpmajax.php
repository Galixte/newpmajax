<?php
/** 
*
* liveSearch [English]
*
* @package liveSearch
* @copyright (c) 2014 alg
* @license http://opensource.org/licenses/gpl-license.php GNU Public License 
*
*/

/**
* @ignore
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

$lang = array_merge($lang, array(
	'INCORRECT_SEARCH'			=> '������������ ��������� ������������ ��������',
	'LIVE_SEARCH_CAPTION'		=> '������� �����',
	'LIVE_SEARCH_FORUM'		=> '������',
	'LIVE_SEARCH_FORUM_TXT'		=> '�������� ������...',
	'LIVE_SEARCH_FORUM_T'			=> '��� �������� ������ ������� �������� �������� ������/���������',
	'LIVE_SEARCH_GO_PROFILE'				=> '������� � �������',
	'LIVE_SEARCH_POSTS_BY_USER'		=> '��������� ������������',
	'LIVE_SEARCH_TOOLTIP_ALL'		=> '����� �� ���� ������� �����������',
	'LIVE_SEARCH_TOOLTIP_BY_FORUM'		=> '����� � ������ ',
	'LIVE_SEARCH_TOOLTIP_BY_TOPIC'		=> '����� � ���� ',
	'LIVE_SEARCH_TOPIC'		=> '����',
	'LIVE_SEARCH_TOPICS_BY_USER'		=> '���� ������������',
	'LIVE_SEARCH_TXT'		=> '�������� ����...',
	'LIVE_SEARCH_T'			=> '��� �������� ������ ������� �������� �������� ����',
	'LIVE_SEARCH_USER'		=> '������������',
	'LIVESEARCH_USER_TXT'	=> '���...',
	'LIVESEARCH_USER_T'	=> '��� �������� ������ ��������� �������� ��� ������������',
	'LIVESEARCH_USERTOPIC_RESULT'	=> '���� ������������  %1$s',
	'LIVESEARCH_USERTOPIC_RESULT_IN_FORUM'	=> '���� ������������  %1$s � ������  %2$s',
	'LIVESEARCH_USERTOPIC_RESULT_IN_SUBFORUMS'	=> ' � ��� ����������',
	'LIVE_SEARCH_EYE_BUTTON_OPEN_T'	=> '�������� ������ ������',
	'LIVE_SEARCH_EYE_BUTTON_CLOSE_T'	=> '������ ������ ������',
));
