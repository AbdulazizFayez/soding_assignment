<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/**
 * Home page
 */
class Home extends MY_Controller {

	public function index()
	{
	
		$this->load->model('soding_model');

		$soding_data = $this->soding_model->get_soding_data();

		$this->mViewData['soding_data'] = $soding_data->result();
		//die(print_r($soding_data->result()));


		$this->mPageTitle = 'Soding Test';
		$this->render('home', 'full_width');
	}
}
