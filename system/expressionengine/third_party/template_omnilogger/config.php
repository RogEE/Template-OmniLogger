<?php

/*
=====================================================

RogEE "Template OmniLogger"
a plugin for ExpressionEngine 2
by Michael Rog

Contact Michael with questions, feedback, suggestions, bugs, etc.
>> http://rog.ee/template_omnilogger

=====================================================

*/

if (!defined('ROGEE_TEMPLATE_OMNILOGGER_NAME'))
{
	define('ROGEE_TEMPLATE_OMNILOGGER_NAME', 'Template OmniLogger [RogEE]');
	define('ROGEE_TEMPLATE_OMNILOGGER_VERSION',  '0.2.0');
	define('ROGEE_TEMPLATE_OMNILOGGER_AUTHOR', 'Michael Rog');
	define('ROGEE_TEMPLATE_OMNILOGGER_AUTHOR_URL', 'http://rog.ee');
	define('ROGEE_TEMPLATE_OMNILOGGER_DESC', 'Creates OmniLog entries from EE templates');
	define('ROGEE_TEMPLATE_OMNILOGGER_DOCS', 'http://rog.ee/template_omnilogger');
}

// NSM Addon Updater
$config['name'] = ROGEE_TEMPLATE_OMNILOGGER_NAME;
$config['version'] = ROGEE_TEMPLATE_OMNILOGGER_VERSION;
$config['nsm_addon_updater']['versions_xml'] = 'http://rog.ee/versions/template_omnilogger';

/*
End of file:	config.php
File location:	system/expressionengine/third_party/template_omnilogger/config.php
*/