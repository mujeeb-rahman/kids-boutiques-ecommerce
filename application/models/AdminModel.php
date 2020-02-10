<?php
Class AdminModel extends CI_Model {

    function __construct() 
    {
        parent::__construct();
        $this->load->library('session');
    }
    /* user data insertion */
    public function UserRegister($udata)
    {

        $this->db->insert('user_reg',$udata);
    }

    /* boutique regiatrstion */
    public function BoutiqueRegister($bdata)
    {

        $this->db->insert('boutique_reg',$bdata);
    }
    /* login authentication */
    public function loginAuthentication($data)
    {
            $this->db->where('email',$data['email']);
            $this->db->where('password',$data['password']);
            $query=$this->db->get('boutique_reg');
            $queryi=$this->db->get('user_reg');
            if($query->num_rows()==1)
            {
                //$this->session->email('bmail');
                $_SESSION['email'] = $data['email'];
                $this->load->view('boutique_home',$data);
                return true;
            }
            else if($queryi->num_rows()==1)
            {
                $_SESSION['email'] = $data['email'];
                $this->load->view('customer_home',$data);
                #$this->load->control('CustomerControl');
                #$this->CustomerControl->getCustomerProducts();
                #$this->getCustomerProducts();
                return true;
            }
            else
            {
                    echo "Enter valid username and password!!";
                    return false;
            }
    }

    /* get new boutique applkications */
    public function getNewBoutique()
    {
        $query=$this->db->query("select * from boutique_reg where status='pending'");
        return $query->result();
   }

    /* get registred boutique details */
    public function getRegistredBoutique()
    {
        $query=$this->db->query("select * from boutique_reg");
        return $query->result();
   }

   /* get Customers details */
   public function getCustomers()
   {
       $query=$this->db->query("select * from user_reg");
       return $query->result();
  }
  /* get whole order details for admin*/
  public function getOrders()
  {
      $query=$this->db->query("SELECT * from user_order order by o_id desc");
      return $query->result();
 }
 /* get whole product details for admin*/
 public function getProducts()
 {
     $query=$this->db->query("SELECT * from product order by p_id desc");
     return $query->result();
}
/* get whole product category details for admin*/
public function getCategories()
{
    $query=$this->db->query("SELECT * from common_category");
    return $query->result();
}
/* get whole product sub categories details for admin*/
public function getSubCategories()
{
    $query=$this->db->query("SELECT * from sub_category");
    return $query->result();
}
    /* get whole product size details for admin*/
    public function getSizechart()
    {
        $query=$this->db->query("SELECT * from size");
        return $query->result();
    }

    /* admin category add */
    public function adminCategoryAdd($data)
    {
        $this->db->insert('common_category',$data);
    }
    /* admin category add */
    public function adminSubCategoryAdd($data)
    {
        $this->db->insert('sub_category',$data);
    }
    /* admin size add */
    public function adminSizeAddition($data)
    {
        $this->db->insert('size',$data);
    }

    /* admin boutique approve */
    function approveBoutique($id)
	{
	    $this->db->query("UPDATE boutique_reg SET status='approved' where b_id=$id");
	}

    /* admin boutique new application delete */
    function deleteNewBoutique($id)
	{
	    $this->db->query("DELETE  from boutique_reg where b_id=$id");
    }

    /* admin customer delete */
    function deleteCustomer($id)
    {
    $this->db->query("DELETE from user_reg where u_id=$id");
    }

    /* admin order delete */
    function deleteOrder($id)
    {
    $this->db->query("DELETE from user_order where o_id=$id");
    }

    /* admin product delete */
    function deleteProduct($id)
    {
    $this->db->query("DELETE from product where p_id=$id");
    }

    /* admin category delete */
    function deleteCategory($id)
    {
    $this->db->query("DELETE from common_category where c_id=$id");
    }

    /* admin sub-category delete */
    function deleteSubCategory($id)
    {
    $this->db->query("DELETE from sub_category where subc_id=$id");
    }

    /* admin size delete */
    function deleteSize($id)
    {
    $this->db->query("DELETE from size where subc_id=$id");
    }

//...................................................boutique models........................................


    /* boutique profile */
    function boutiqueProfile()
    {
        $var = $_SESSION['email'];
        $query = $this->db->query("SELECT * from boutique_reg where email='".$var."'");
        return $query->result();
    }
    /* boutique profile update*/
    function boutiqueProfileUpdate()
    {
        $var = $_SESSION['email'];
        $query = $this->db->query("UPDATE boutique_reg where email='".$var."'");
        return $query->result();
    }



//...................................................customer models........................................


    /* boutique profile */
    function customerProfile()
    {
        $var = $_SESSION['email'];
        $query = $this->db->query("SELECT * from user_reg where email='".$var."'");
        return $query->result();
    }
    /* boutique profile update*/
    function customerProfileUpdate()
    {
        $var = $_SESSION['email'];
        $query = $this->db->query("UPDATE user_reg where email='".$var."'");
        return $query->result();
    }
    /* get products */
    public function getCustomerProducts()
    {
        $query=$this->db->query("SELECT * from product");
        return $query->result();
   }
}

?>