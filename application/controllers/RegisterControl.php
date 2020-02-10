<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class RegisterControl extends CI_Controller {
    /* constructor */
    public function __construct()
	{
        parent::__construct();
        $this->load->database();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('session');
        $this->load->model('AdminModel');
	}

    /*User registration*/
	public function UserRegister()
	{
        $udata = array(
            'u_name' => $this->input->post('name'),
            'mobile' => $this->input->post('mobile'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
        );
        if($this->AdminModel->UserRegister($udata))
        {
            echo "no insert";
        }
        else
        {
            $this->load->view('login');
        }
    }

    /*Boutique registration*/
	public function BoutiqueRegister()
	{
        $bdata = array(
            'license_no' => $this->input->post('lno'),
            'b_name' => $this->input->post('bname'),
            'b_address' => $this->input->post('category'),
            'owner_name' => $this->input->post('baddress'),
            'owner_address' => $this->input->post('name'),
            'basic_category' => $this->input->post('address'),
            'email' => $this->input->post('email'),
            'mobile' => $this->input->post('mobile'),
            'password' => $this->input->post('password'),
        );
        if($this->AdminModel->BoutiqueRegister($bdata))
        {
            echo "no insert";
        }
        else
        {
            $this->load->view('login');
        }
    }

}
?>