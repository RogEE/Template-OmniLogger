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

if (!defined('APP_VER') || !defined('BASEPATH')) { exit('No direct script access allowed'); }

// -----------------------------------------
//	Here goes nothin...
// -----------------------------------------

require_once PATH_THIRD.'template_omnilogger/config.php';

$plugin_info = array(
	'pi_name'		=> ROGEE_TEMPLATE_OMNILOGGER_NAME,
	'pi_version'	=> ROGEE_TEMPLATE_OMNILOGGER_VERSION,
	'pi_author'		=> ROGEE_TEMPLATE_OMNILOGGER_AUTHOR,
	'pi_author_url'	=> ROGEE_TEMPLATE_OMNILOGGER_AUTHOR_URL,
	'pi_description'=> 'Creates OmniLog entries from your templates',
	'pi_usage'		=> Template_omnilogger::usage()
);

/**
 * ==============================================
 * Template OmniLogger class, for ExpressionEngine 2
 * ==============================================
 *
 * @package Template_omniLogger
 * @author Michael Rog <michael@michaelrog.com>
 * @copyright 2012 Michael Rog
 * @see http://rog.ee/template_omnilogger
 *
 */
class Template_omnilogger {

	private $EE;
	private $H;

	public $return_data;
    
	/**
	* ==============================================
	* Constructor
	* ==============================================
	*
	* @access  public
	* @return  void
	*
	*/
	public function __construct()
	{
	
		$this->EE =& get_instance();
		
		// Load the RogEE helpers model
		$this->EE->load->model('rogee_helpers_model');
		$this->H = $this->EE->rogee_helpers_model;
		
		// Create the appropriate log entry
		$this->make_log_entry();
		
		// If echo is on, pass the tag data to the template
		$this->return_data = ($this->H->param('echo', 'off', TRUE)) ? $this->EE->TMPL->tagdata : "";
	
	} // END Constructor


	/**
	* ==============================================
	* make_log_entry()
	* ==============================================
	*
	* The magic happens here.
	*
	* @access private
	* @return void
	*
	*/
	private function make_log_entry()
	{	
		
		// Fetch params from template
		// params for param() method: $param, $default, $boolean, $required
		
		$l_source = $this->H->param('source', '[Template]');

		$l_message = $this->H->param('message', '');
		
		switch ($this->H->param('type', 'notice'))
		{
		
			case "error":
			$l_severity = 3;
			break;
			
			case "warning":
			$l_severity = 2;
			break;
			
			case "notice":
			default:
			$l_severity = 1;
			break;
			
		}

		$l_notify = $this->H->param('notify_admin', FALSE, TRUE);

		$l_emails = explode(",", preg_replace('/\s+/', '', $this->H->param('admin_emails', '')));

		$l_extended_data = $this->EE->TMPL->tagdata;
	
		// Load the RogEE OmniLog model
		$this->EE->load->model('rogee_omnilog_model');
		$L = $this->EE->rogee_omnilog_model;
		
		// Log the message in OmniLog
		// params for log_message() method: $source, $message, $severity, $notify, $emails, $extended_data
		$L->log_message($l_source, $l_message, $l_severity, $l_notify, $l_emails, $l_extended_data);
		
	} // END make_log_entry()

	
	/**
	* ==============================================
	* usage()
	* ==============================================
	*
	* Provides usage information for display in the control panel
	*
	* @return string
	*
	*/
	public static function usage()
	{
		ob_start();
		?>

		<?php
		$buffer = ob_get_contents();
		ob_end_clean();
		return $buffer;
	} // END usage()
	
	
}

/*
End of file:	pi.template_omnilogger.php
File location:	system/expressionengine/third_party/template_omnilogger/pi.template_omnilogger.php
*/