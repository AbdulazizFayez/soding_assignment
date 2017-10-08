<?php 

class Soding_model extends MY_Model {

	public function get_soding_data(){

		$query = $this->db->get('soding_test');

		return $query;
	}
}