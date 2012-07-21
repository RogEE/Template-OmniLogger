<?php

/*
=====================================================

RogEE "OmniLogger"
a plugin for ExpressionEngine 2
by Michael Rog

Contact Michael with questions, feedback, suggestions, bugs, etc.
>> http://rog.ee/omnilogger
>> http://devot-ee.com/add-ons/omnilogger

This extension is compatible with NSM Addon Updater:
>> http://ee-garage.com/nsm-addon-updater

Changelog:
>> http://rog.ee/versions/omnilogger

=====================================================

*/

if (!defined('ROGEE_OMNILOGGER_NAME') OR !defined('ROGEE_OMNILOGGER_VER'))
{
	define('ROGEE_OMNILOGGER_NAME', 'OmniLogger [RogEE]');
	define('ROGEE_OMNILOGGER_VER',  '0.1.0');
	define('ROGEE_OMNILOGGER_AUTHOR', 'Michael Rog');
	define('ROGEE_OMNILOGGER_AUTHOR_URL', 'http://rog.ee');
	define('ROGEE_OMNILOGGER_DESC', 'Creates OmniLog entries from EE templates');
	define('ROGEE_OMNILOGGER_DOCS', 'http://rog.ee/omnilogger');
}

// NSM Addon Updater
$config['name'] = ROGEE_OMNILOGGER_NAME;
$config['version'] = ROGEE_OMNILOGGER_VER;
$config['nsm_addon_updater']['versions_xml'] = 'http://rog.ee/versions/omnilogger';

/*
End of file:	config.php
File location:	system/expressionengine/third_party/omnilogger/config.php
*/