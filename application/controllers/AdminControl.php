<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class AdminControl extends CI_Controller {

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
	/*load index page*/
	public function index()
	{
		$this->load->helper('url');
		$this->load->view('index');
	}
	/*load login page*/
	public function login()
	{
		$this->load->helper('url');
		$this->load->view('login');
	}
	/*load registration page*/
	public function register()
	{
		$this->load->helper('url');
		$this->load->view('registration');
	}

	/*load category adding page*/
	public function adminProductCategoryAdd()
	{
		$this->load->helper('url');
		$this->load->view('admin_category_add');
	}
	/*load sub category adding page*/
	public function adminProductSubCategoryAdd()
	{
		$this->load->helper('url');
		$this->load->view('admin_subcategory_add');
	}
	/*load size adding page*/
	public function adminSizeAdd()
	{
		$this->load->helper('url');
		$this->load->view('admin_size_add');
	}

	/*login authentication*/
	public function loginAuthentication()
	{
		$uname = $this->input->post('email');
		$pword = $this->input->post('password');
		if($uname == 'admin@gmail.com' && $pword == 'admin')
		{
			$this->load->helper('url');
			$_SESSION['email'] = $uname;
			$this->getNewBoutique();
		}
		else
		{
			$data = array(
				'email' => $this->input->post('email'),
				'password' => $this->input->post('password')
			);
			$this->AdminModel->loginAuthentication($data);
		}
	}
	/*logout*/
	public function logout()
    {
        $this->session->unset_userdata($_SESSION['email']);
        // $this->session->sess_destroy();
		redirect('index'); //User??
		$this->load->view('index');
    }
	/*get new boutique details */
	public function getNewBoutique()
    {
		$result['data']=$this->AdminModel->getNewBoutique();
		$this->load->view('admin_home',$result);
	}
	/*get registred boutique details */
	public function getRegistredBoutique()
    {
		$result['data']=$this->AdminModel->getRegistredBoutique();
		$this->load->view('admin_boutiques',$result);
	}
	/*get registred boutique details */
	public function getCustomers()
    {
		$result['data']=$this->AdminModel->getCustomers();
		$this->load->view('admin_customers',$result);
	}
	/*get order details displayed details in table*/
	public function getOrders()
    {
		$result['data']=$this->AdminModel->getOrders();
		$this->load->view('admin_orders',$result);
	}
	/*get product details displayed details in table*/
	public function getProducts()
    {
		$result['data']=$this->AdminModel->getProducts();
		$this->load->view('admin_products',$result);
	}
	/*get categories displayed details in table*/
	public function getCategories()
    {
		$result['data']=$this->AdminModel->getCategories();
		$this->load->view('admin_product_categories',$result);
	}
	/*get sub categories displayed details in table*/
	public function getSubCategories()
    {
		$result['data']=$this->AdminModel->getSubCategories();
		$this->load->view('admin_product_subcategories',$result);
	}
	/*get size displayed details in table*/
	public function getSizechart()
    {
		$result['data']=$this->AdminModel->getSizechart();
		$this->load->view('admin_sizechart',$result);
	}
	/*new category add by admin*/
	public function adminCategoryAdd()
	{
        $data = array(
            'c_id' => $this->input->post('cid'),
            'categories' => $this->input->post('cname'),
        );
        if($this->AdminModel->adminCategoryAdd($data))
        {
            echo "no insert";
        }
        else
        {
            $this->load->view('admin_category_add');
        }
	}
	/*get categories for subcategory adding form to display as selection list*/
	public function getCategoriesForAdd()
    {
		$result['data']=$this->AdminModel->getCategories();
		$this->load->view('admin_subcategory_add',$result);
	}
	/*new category add by admin*/
	public function adminSubCategoryAdd()
	{
        $data = array(
			'subc_id' => $this->input->post('sid'),
			'c_id' => $this->input->post('cid'),
            'sub_category' => $this->input->post('sname'),
        );
        if($this->AdminModel->adminSubCategoryAdd($data))
        {
            echo "no insert";
        }
        else
        {
            $this->load->view('admin_subcategory_add');
        }
	}
	/*get categories for size adding form to display as selection list*/
	public function getSizechartSelection()
    {
		$result['data']=$this->AdminModel->getCategories();
		$this->load->view('admin_size_add',$result);
	}
	/*new category add by admin*/
	public function adminSizeAddition()
	{
        $data = array(
			's_id' => $this->input->post('sid'),
			'c_id' => $this->input->post('cname'),
			'subc_id' => $this->input->post('subname'),
			'size' => $this->input->post('sname'),
        );
        if($this->AdminModel->adminSizeAddition($data))
        {
            echo "no insert";
        }
        else
        {
            $this->load->view('admin_size_add');
        }
	}
	/*new boutique application approval by admin*/
	public function approveBoutique()
	{
	$id=$this->uri->segment(3);
	$this->AdminModel->approveBoutique($id);
	$this->load->getNewBoutique();
	}

	/*new boutique application deletion by admin*/
	public function deleteNewBoutique()
	{
	$id=$this->uri->segment(3);
	$this->AdminModel->deleteNewBoutique($id);
	$this->load->getNewBoutique();
	}

	/*boutique deletion  from admin boutique list by admin*/
	public function deleteBoutique()
	{
	$id=$this->uri->segment(3);
	$this->AdminModel->deleteNewBoutique($id);
	$this->load->getRegistredBoutique();
	}

	/*customer deletion  from admin customer list by admin*/
	public function deleteCustomer()
	{
	$id=$this->uri->segment(3);
	$this->AdminModel->deleteCustomer($id);
	$this->load->getCustomers();
	}

	/*order deletion  from admin order list by admin*/
	public function deleteOrder()
	{
	$id=$this->uri->segment(3);
	$this->AdminModel->deleteOrder($id);
	$this->load->getOrders();
	}

	/*product deletion  from admin product list by admin*/
	public function deleteProduct()
	{
	$id=$this->uri->segment(3);
	$this->AdminModel->deleteProduct($id);
	$this->load->getProducts();
	}

	/*product category deletion  from admin category list by admin*/
	public function deleteCategory()
	{
	$id=$this->uri->segment(3);
	$this->AdminModel->deleteCategory($id);
	$this->load->getCategories();
	}

	/*product category deletion  from admin category list by admin*/
	public function deleteSubCategory()
	{
	$id=$this->uri->segment(3);
	$this->AdminModel->deleteSubCategory($id);
	$this->load->getSubCategories();
	}

	/*size deletion  from admin size list by admin*/
	public function deleteSize()
	{
	$id=$this->uri->segment(3);
	$this->AdminModel->deleteSize($id);
	$this->load->getSizechart();
	}

}
