<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        {
            $this->load->model("Home_model", 'homemodel');
        }
    }

    public function index()
	{
		$this->load->view('Home/homepage');
	}
    
    public function addMessage() 
    {
         $data = [
            'name' => $this->input->post('name'),
            'phone' => $this->input->post('phone'),
            'email' => $this->input->post('email'),
            'message' => $this->input->post('message'),
        ];
        $this->homemodel->insert($data);
        redirect('Home');
    }
}
