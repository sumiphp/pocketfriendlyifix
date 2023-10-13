<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct(){
        parent::__construct();         
		 $this->load->library('session'); 
         $this->load->model('Servicesmodel','sm');
		 $this->load->library("pagination");
		 $this->load->library('upload');
		 $this->load->database();
		 //$this->session->keep_flashdata('flash_msg'); 		 
		

    }


	public function index()
	{
		$this->load->view('welcome_message');
	}

public function services(){	
	$this->load->model('Servicesmodel');
	$this->load->view('services/sign-in');
} 


public function dashboard(){	
	$this->load->model('Servicesmodel');
	//echo $this->session->userdata('username');
	if( $this->session->has_userdata('username')) {
					
			  }
			  else{
				redirect("welcome/services");
			  }
	$this->load->view('services/dashboard');
} 


public function loginprocess(){
	$services=$this->load->model('Servicesmodel');
	$this->load->library('session');
	$username=$this->input->post('username');
	$password=$this->input->post('password');	
	$pass=md5($password);
    $user_detail=$this->sm->get_user($username,$pass);
	 if ($user_detail==1){
		$this->session->set_userdata('username','admin');
		redirect("welcome/dashboard");
	 }else {
		$this->session->set_flashdata('flash_msg', 'Invalid User name and Password');
		redirect("welcome/services");
	 }
} 


public function logout(){
	$this->load->model('Servicesmodel');
	$this->session->sess_destroy();
	redirect("welcome/services");
}

public function addcategory(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('category');
    $query = $this->db->get();
    $data['result']=$query->result_array(); 
	$this->load->view('services/add-category',$data);
}

public function editcategory(){
	if($this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$catid=$this->uri->segment(3);
	//die;
	$this->load->model('Servicesmodel');
	$this->db->where('categoryid',$catid);
	$this->db->from('category');
    $query = $this->db->get();
    $data['result']=$query->row();
	
	$data['cat_detail']=$this->sm->get_categoriesall();
	$this->load->view('services/edit-category',$data);
}

public function editsubcategory(){
	if($this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$catid=$this->uri->segment(3);
	//die;
	$this->load->model('Servicesmodel');
	$this->db->where('categoryid',$catid);
	$this->db->from('category');
    $query = $this->db->get();
    $data['result']=$query->row();
	
	$data['cat_detail']=$this->sm->get_categoriesall();
	$this->load->view('services/edit-subcategory',$data);
}






public function categoryaddprocess(){

    $config['upload_path'] = './uploads/';
    $config['allowed_types'] = 'gif|jpg|png';
    //$config['max_size'] = '100';
    //$config['max_width'] = '1024';
    //$config['max_height'] = '768';
	$this->load->library('upload', $config);
	if($this->upload->do_upload('file'))
{
$data = array('upload_data' => $this->upload->data());
//$this->load->view('upload_success',$data);
print_r($data);
}
else
{
$error = array('error' => $this->upload->display_errors());
//$this->load->view('custom_view', $error);
print_r($error);
}

print_r($_POST);

	$productcategory=$this->input->post('productcategory');
	$productdesc=$this->input->post('productdescription');
	$data = array(
		'categoryname' =>"$productcategory",
		'categorydescription' =>"$productdesc",		
	 );
	 $this->db->insert('category', $data);
	 echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product' : 'Product Category added Successfully';
}
public function categoryeditprocess(){
	$productcategory=$this->input->post('productcategory');
	$productdesc=$this->input->post('productdescription');
	$catid=2;
	$data = array(
		'categoryname' =>"$productcategory",
		'categorydescription' =>"$productdesc",		
	 );
	 $this->db->where('categoryid',$catid);
	 $this->db->update('category', $data);
	 
	 echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Category not edited') : $this->session->set_flashdata('flash_msg', 'Category edited successfully');;



}


function upload_file() {

	//upload file
	$config['upload_path'] = 'uploads/';
	$config['allowed_types'] = 'gif|jpg|png';
	//$config['max_filename'] = '255';
	//$config['encrypt_name'] = TRUE;   // remove it for actual file name.
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	if (isset($_FILES['file']['name'])) {
		if (0 < $_FILES['file']['error']) {
			echo 'Error during file upload' . $_FILES['file']['error'];
		} else {
			if (file_exists('uploads/' . $_FILES['file']['name'])) {
				echo 'File already exists : uploads/' . $_FILES['file']['name'];
			} else {
				
				if (!$this->upload->do_upload('file')) {
					echo $this->upload->display_errors();
				} else {
					echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
}







public function listcategory(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listcategory";
	$config["total_rows"] = $this->sm->get_count();
	$config["per_page"] = 5;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();	
	$data['result']=$this->sm->get_categories($config["per_page"], $page);	
	$this->load->view('services/listcategory',$data);
}


public function listsubcategory(){	
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
    $config = array();
	$config["base_url"] = base_url() . "Welcome/listsubcategory";
	$config["total_rows"] = $this->sm->get_countsub();
	$config["per_page"] = 2;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();	
	$data['result']=$this->sm->get_subcategories($config["per_page"], $page);
	$this->load->view('services/listsubcategory',$data);
}

public function deletecategory(){
	$catid=$_GET['catid'];
	$this->db->where('categoryid',$catid);
	$this->db->delete('category');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Product Category' : 'Product Category deleted Successfully';
}

public function deletesubcategory(){
	$subcatid=$_GET['subcatid'];
	$this->db->where('subcategoryid',$subcatid);
	$this->db->delete('subcategory');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Product Sub Category' : 'Product Sub Category deleted Successfully';
}

public function subcategoryaddprocess(){
	$productcategory=$this->input->post('prdcat');
	$prdsubcat=$this->input->post('prdsubcat');
	$prdsubdesc=$this->input->post('prdsubdesc');
	$data = array(
		'subcategoryname' =>"$prdsubcat",
		'categoryid' =>"$productcategory",
		'subcatdesc'=>"$prdsubdesc",		
	 );
	 $this->db->insert('subcategory', $data);
	 echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product Subcategory' : 'Product Sub Category added Successfully';
}


public function listenquiries(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listenquiries";
$config["total_rows"] = $this->sm->get_countenquiries();
$config["per_page"] = 2;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_enquiries($config["per_page"],$page);
$this->load->view('services/listenquiries',$data);	
}


public function deleteenquiries(){
	$id=$_GET['id'];
	$this->db->where('enquiryid',$id);
	$this->db->delete('enquiries');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Enquiries' : 'Enquiries deleted Successfully';
}

public function listcontactenquiries(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listcontactenquiries";
$config["total_rows"] = $this->sm->get_countenquiries();
$config["per_page"] = 2;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_contactenquiries($config["per_page"],$page);	
$this->load->view('services/listcontactenquiries',$data);
}

function addservices(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('category');
    $query = $this->db->get();
    $data['result']=$query->result_array(); 
	$this->load->view('services/addservices',$data);

}

}
