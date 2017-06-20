<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
				 function __construct()
			 {
			   parent::__construct();
			  //  $this->load->model('users','',TRUE);
			 }
				public function index()
			{
					$this->load->view('User/Login');
			}

			public function check_user()
			{
				$this->form_validation->set_rules('username', 'Username', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
				//echo $username;
				if ($this->form_validation->run() == FALSE) {
						 redirect('Users');
				} else {
					$username = $this->input->post('username');
					$password = $this->input->post('password');
					$result = $this->User_model->get_user($username,$password);
					if($result == TRUE){
						$this->session->set_userdata($data);
						$this->session->set_flashdata('flashSuccess', 'This is a success message.');
						redirect('Main');
					}else{
						 redirect('Users');
					}

		}
	}
}
