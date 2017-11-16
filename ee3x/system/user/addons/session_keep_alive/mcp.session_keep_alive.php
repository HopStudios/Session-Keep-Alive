<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Session_keep_alive_mcp {

	function index()
	{
		$vars = array();

		// This retrieves a special string that's then parsed by EE and replaced by the action ID (?!)
		$action_id  = ee()->functions->fetch_action_id('Session_keep_alive', 'keep_session_alive');
		// To actually GET THE REAL ID, we need that to parse the special string and replace it with the real action ID
		$action_id = ee()->functions->insert_action_ids($action_id);
		$vars['action_id'] = $action_id;

		$site_url = ee()->config->item('site_url');

		$ajax_url = $site_url.'?ACT='.$action_id;
		$vars['ajax_url'] = $ajax_url;

		return array(
			'heading'			=> lang('index_page_breadcrumb'),
			'body'				=> ee('View')->make('session_keep_alive:index')->render($vars),
			'breadcrumb'		=> array(
				ee('CP/URL', 'addons/settings/session_keep_alive')->compile() => lang('session_keep_alive_module_name')
			),
		);
	}
}