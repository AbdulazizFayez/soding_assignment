<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Soding extends Admin_Controller {

	
	// Frontend User CRUD
	public function index()
	{
		$crud = $this->generate_crud('soding_test');
		$crud->set_subject('Task');

		$crud->fields('name','description');

		$crud->callback_after_update(array($this, 'callback_update_time'));
 

		$this->mPageTitle = 'Soding Task';
		$this->render_crud();
	}

	public function callback_update_time($post_array,$primary_key){

		date_default_timezone_set("Asia/Kuala_Lumpur");
		$date_today = date('Y-m-d H:i:s ');

		$data = array(
        	'date_updated' => $date_today
		);

		$this->db->where('id', $primary_key);
		$this->db->update('soding_test', $data);

		return true;
	}

}
