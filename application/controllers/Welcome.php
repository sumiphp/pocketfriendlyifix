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

    /*$config['upload_path'] = 'uploads';
    $config['allowed_types'] = 'gif|jpg|png';
    
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if($this->upload->do_upload('file'))
{
$data = array('upload_data' => $this->upload->data());

//print_r($data);
}
else
{
$error = array('error' => $this->upload->display_errors());

//print_r($error);
}



	$productcategory=$this->input->post('productcategory');
	$productdesc=$this->input->post('productdescription');
	$data = array(
		'categoryname' =>"$productcategory",
		'categorydescription' =>"$productdesc",		
	 );
	 $this->db->insert('category', $data);
	 echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product' : 'Product Category added Successfully';*/
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
	
	$config['upload_path'] = 'uploads';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	//$config['max_filename'] = '255';
	//$config['encrypt_name'] = TRUE;   // remove it for actual file name.
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['file']['name'])) {
		if (0 < $_FILES['file']['error']) {
			echo 'Error during file upload' . $_FILES['file']['error'];
		} else {
			if (file_exists('uploads/' . $_FILES['file']['name'])) {
				echo 'File already exists : uploads/' . $_FILES['file']['name'];
			} else {
				
				if (!$this->upload->do_upload('file')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	$productcategory=$this->input->post('productcategory');
	$productdesc=$this->input->post('productdescription');
	$productimg=$_FILES['file']['name'];
	$data = array(
		'categoryname' =>"$productcategory",
		'categorydescription' =>"$productdesc",
		'categoryimage'=>$productimg		
	 );
	 $this->db->insert('category', $data);
	 echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product' : '<b>Product Category added Successfully</b>';





}



function upload_filesub() {

	//upload file
	
	$config['upload_path'] = 'uploads';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';
	//$config['max_filename'] = '255';
	//$config['encrypt_name'] = TRUE;   // remove it for actual file name.
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['filesub']['name'])) {
		if (0 < $_FILES['filesub']['error']) {
			echo 'Error during file upload' . $_FILES['filesub']['error'];
		} else {
			if (file_exists('uploads/' . $_FILES['filesub']['name'])) {
				echo 'File already exists : uploads/' . $_FILES['filesub']['name'];
			} else {
				
				if (!$this->upload->do_upload('filesub')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	/*$productcategory=$this->input->post('productcategory');
	$productdesc=$this->input->post('productdescription');
	$productimg=$_FILES['file']['name'];
	$data = array(
		'categoryname' =>"$productcategory",
		'categorydescription' =>"$productdesc",
		'categoryimage'=>$productimg		
	 );
	 $this->db->insert('category', $data);
	 echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product' : '<b>Product Category added Successfully</b>';
	 */
	$productimg=$_FILES['filesub']['name'];
	 $productcategory=$this->input->post('prdcat');
	 $prdsubcat=$this->input->post('prdsubcat');
	 $prdsubdesc=$this->input->post('prdsubdesc');
	 $data = array(
		 'subcategoryname' =>"$prdsubcat",
		 'categoryid' =>"$productcategory",
		 'subcatdesc'=>"$prdsubdesc",
		 'subcategoryimage'=>$productimg		
	  );
	  $this->db->insert('subcategory', $data);

	  echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product Sub Category' : '<b>Product Sub Category added Successfully</b>';










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
	/*$productcategory=$this->input->post('prdcat');
	$prdsubcat=$this->input->post('prdsubcat');
	$prdsubdesc=$this->input->post('prdsubdesc');
	$data = array(
		'subcategoryname' =>"$prdsubcat",
		'categoryid' =>"$productcategory",
		'subcatdesc'=>"$prdsubdesc",		
	 );
	 $this->db->insert('subcategory', $data);
	 echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product Subcategory' : 'Product Sub Category added Successfully';*/
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

function editservices(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('services');
    $query = $this->db->get();
    $data['result']=$query->row(); 
	$this->load->view('services/editservices',$data);

}

public function addservicesprocess(){

	$config['upload_path'] = 'uploads';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	
	

	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/' . $_FILES['image2']['name'];
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	$image1=$_FILES['image1']['name'];
	$image2=$_FILES['image2']['name'];

	 $maintitle=$this->input->post('maintitle');
	 $subtitle=$this->input->post('subtitle');
	 $description=$this->input->post('description');
	 $data = array(
		 'maintitle' =>"$maintitle",
		 'subtitle' =>"$subtitle",
		 'description'=>"$description",
		 'Image1'=>$image1,'Image2'=>$image2		
	  );
	  //print_r($data);
	  $this->db->insert('services', $data);

	  echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product Services' : '<b>Product Services added Successfully</b>';


}



public function editservicesprocess(){

	$config['upload_path'] = 'uploads';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image1=$_FILES['image1']['name'];
	} else {
		$image1='';
	}
	
	

	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/' . $_FILES['image2']['name'];
			} else {
				
				if (!$this->upload->do_upload('image2')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image2=$_FILES['image2']['name'];
	} else {
		$image2='';
	}
	
	
	 $maintitle=$this->input->post('maintitle');
	 $subtitle=$this->input->post('subtitle');
	 $description=$this->input->post('description');
	 if (($image1!='') && ($image2!='')){
	 $data = array(
		 'maintitle' =>"$maintitle",
		 'subtitle' =>"$subtitle",
		 'description'=>"$description",
		 'Image1'=>$image1,'Image2'=>$image2		
	  );
	}
	if (($image1!='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			'Image1'=>$image1		
		 );
	   }
	   if (($image1=='') && ($image2!='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			//'Image1'=>$image1
			'Image2'=>$image2		
		 );
	   }
	   if (($image1=='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			//'Image1'=>$image1
			//'Image2'=>$image2		
		 );
	   }
	  //print_r($data);
	  $this->db->where('serviceid',1);
	  $this->db->update('services', $data);

	  echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product Services' : '<b>Product Services added Successfully</b>';


}



















public function listservices(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listservices";
$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_services($config["per_page"],$page);
$this->load->view('services/listservices',$data);	


}




public function deleteservices(){
	$id=$_GET['id'];
	$this->db->where('serviceid',$id);
	$this->db->delete('services');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Services' : 'Services deleted Successfully';
}


public function listaboutus(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listaboutus";
$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_aboutusadmin();
$this->load->view('services/listaboutus',$data);	


}







}
