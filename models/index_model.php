<?php
/**
 * ownMVC project
 */
class index_model extends model {

	function __construct() {
		parent::__construct();
	}
		function show(){
		return $this->db->select("SELECT title, url FROM urls");
	}
}
