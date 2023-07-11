<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        {
            $this->load->model("Home_model");
        }
    }

    public function index()
	{
		$this->load->view('Home/homepage');
	}
    
    public function addmsg() 
    {
         $data = [
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message'),
        ];
        $this->Home_model->insert($data);
        redirect('Home');
    }
}
