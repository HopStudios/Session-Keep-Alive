<?php

class Session_keep_alive_upd
{
	var $version = HOP_SESSION_KEEP_ALIVE_VERSION;

	function install()
	{
		//Add module to EE modules list
		$data = array(
			'module_name' => 'Session_keep_alive' ,
			'module_version' => $this->version,
			'has_cp_backend' => 'y',
			'has_publish_fields' => 'n'
		);
 
		ee()->db->insert('modules', $data);

		// Add our action for the ajax call
		$data = array(
			'class'       => 'Session_keep_alive',
			'method'      => 'keep_session_alive',
			'csrf_exempt' => 1
		);
		
		ee()->db->insert('actions', $data);

		return TRUE;
	}

	function update($current = '')
	{
		ee()->load->dbforge();

		if (version_compare($current, '1.0.0', '='))
		{
			return FALSE;
		}

		return TRUE;
	}

	function uninstall()
	{
		//Uninstall the module
		ee()->load->dbforge();

		ee()->db->select('module_id');
		$query = ee()->db->get_where('modules', array('module_name' => 'Session_keep_alive'));

		ee()->db->where('module_id', $query->row('module_id'));
		ee()->db->delete('module_member_groups');

		ee()->db->where('module_id', $query->row('module_id'));
		ee()->db->delete('modules');
		
		ee()->db->where('class', 'Session_keep_alive');
		ee()->db->delete('actions');

		return TRUE;
	}
}