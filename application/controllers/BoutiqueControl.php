<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BoutiqueControl extends CI_Controller {
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

    /*load home page*/
	public function home()
	{
		$this->load->view('boutique_home');
	}
    /*load products page*/
	public function products()
	{
		$this->load->view('boutique_products');
	}
    
    /*load customers page*/
	public function customers()
	{
		$this->load->view('boutique_customers');
    }
    /*load customers page*/
	public function orders()
	{
		$this->load->view('boutique_orders');
    }
    /*load product add page*/
	public function productAdd()
	{
		$this->load->view('boutique_product_add');
    }
    /*load boutique profile page*/
	public function boutiqueProfile()
	{
		$data['result']=$this->AdminModel->boutiqueProfile();
		$this->load->view('boutique_profile',$data);
    }

    /*load boutique profile update*/
    public function boutiqueProfileUpdate()
	{
        $data = array(
			'b_id' => $this->input->post('bid'),
			'license_no' => $this->input->post('lno'),
            'b_name' => $this->input->post('bname'),
            'b_address' => $this->input->post('baddress'),
            'owner_name' => $this->input->post('oname'),
            'owner_address' => $this->input->post('oaddress'),
            'basic_category' => $this->input->post('category'),
            'mobile' => $this->input->post('mobile'),
            'email' => $this->input->post('email'),
            'password' => $this->input->post('password'),
            );
        if($this->AdminModel->boutiqueProfileUpdate($data))
        {
            echo "no insert";
        }
        else
        {
            $this->load->view('boutique_profile',$data);
        }
	}
}

?>