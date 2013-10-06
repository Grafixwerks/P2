<?php
class User_model extends CI_Model {
	function getUsers() {
		// single row
		$query = $this->db->get('users', 1);
		// foreach
		//$query = $this->db->query('SELECT * FROM users');
		return $query->result();
		}
}


