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
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/sign-in',$data);
} 


public function dashboard(){	
	$this->load->model('Servicesmodel');
	//echo $this->session->userdata('username');
	$this->db->select('*');
	$this->db->from('category');
	$query = $this->db->get();
	$data['rowcountcat'] = $query->num_rows();

	$this->db->select('*');
	$this->db->from('subcategory');
	$query = $this->db->get();
	$data['rowcountsub'] = $query->num_rows();


	$this->db->select('*');
	$this->db->from('blog');
	$query = $this->db->get();
	$data['rowcountblog'] = $query->num_rows();

	$this->db->select('*');
	$this->db->from('contactenquiries');
	$query = $this->db->get();
	$data['rowcountcontactenquiries'] = $query->num_rows();

	$this->db->select('*');
	$this->db->from('enquiries');
	$query = $this->db->get();
	$data['rowcountenquiries'] = $query->num_rows();

	$this->db->select('*');
	$this->db->from('testimonials');
	$query = $this->db->get();
	$data['rowcounttestimonials'] = $query->num_rows();


	$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();

	$data['contactus']=$this->sm->get_contactus();
	if( $this->session->has_userdata('username')) {
					
			  }
			  else{
				redirect("welcome/services");
			  }
			  $data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/dashboard',$data);
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
	$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
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
	$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['contactus']=$this->sm->get_contactus();
	$this->load->view('services/edit-category',$data);
}

public function editsubcategory(){
	if($this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$subcatid=$this->uri->segment(3);
	//die;
	$this->load->model('Servicesmodel');
	$this->db->where('subcategoryid',$subcatid);
	$this->db->from('subcategory');
    $query = $this->db->get();
    $data['result']=$query->row();
	
	$data['cat_detail']=$this->sm->get_categoriesall();
	$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['contactus']=$this->sm->get_contactus();
	$this->load->view('services/edit-subcategory',$data);
}






public function categoryaddprocess(){

   
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
	$alttag1=$this->input->post('alttag1');
	$productimg=$_FILES['file']['name'];
	$data = array(
		'categoryname' =>"$productcategory",
		'categorydescription' =>"$productdesc",
		'categoryimage'=>$productimg,'alttagimg1'=>"$alttag1"		
	 );
	 $this->db->insert('category', $data);
	 echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product' : '<b>Product Category added Successfully</b>';





}



function upload_filecatedit() {

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

	$alttag1=$this->input->post('alttag1');
	$productcategory=$this->input->post('productcategory');
	$productcategoryid=$this->input->post('productcategoryid');
	$productdesc=$this->input->post('productdescription');
	$productimg=$_FILES['file']['name'];
	if ($productimg==''){

		$data = array(
			'categoryname' =>"$productcategory",
			'categorydescription' =>"$productdesc",
			'alttagimg1'=>"$alttag1"	
		 );

	}else{
	$data = array(
		'categoryname' =>"$productcategory",
		'categorydescription' =>"$productdesc",
		'categoryimage'=>$productimg,
		'alttagimg1'=>"$alttag1"		
	 );
	}
	 $this->db->where('categoryid',$productcategoryid);
	 $this->db->update('category', $data);
	 echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Category not edited') : $this->session->set_flashdata('flash_msg', 'Category edited successfully');


}



function upload_filesub() {

	//upload file
	
	$config['upload_path'] = 'uploads/subcategory';
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
			if (file_exists('uploads/subcategory' . $_FILES['filesub']['name'])) {
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

	if (isset($_FILES['filesubimg']['name'])) {
		if (0 < $_FILES['filesubimg']['error']) {
			echo 'Error during file upload' . $_FILES['filesubimg']['error'];
		} else {
			if (file_exists('uploads/subcategory' . $_FILES['filesubimg']['name'])) {
				echo 'File already exists : uploads/' . $_FILES['filesubimg']['name'];
			} else {
				
				if (!$this->upload->do_upload('filesubimg')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}



	
	$productimg=$_FILES['filesub']['name'];
	$productimgsub=$_FILES['filesubimg']['name'];
	 $productcategory=$this->input->post('prdcat');
	 $prdsubcat=$this->input->post('prdsubcat');
	 $prdsubdesc=$this->input->post('prdsubdesc');
	 $price=$this->input->post('price');
	 $subcatshortdesc=$this->input->post('prdsubshortdesc');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 //form_data.append('filesubimg',file_databanner);
	// form_data.append('price',price);
	 $data = array(
		 'subcategoryname' =>"$prdsubcat",
		 'categoryid' =>"$productcategory",
		 'subcatdesc'=>"$prdsubdesc",
		 'subcategoryimage'=>$productimg,
		 		'subcatbannerimage'=>$productimgsub,
				'subcatshortdesc'=>$subcatshortdesc,
				'price'=>$price,
				'currency'=>'AMD','alttagimg1'=>"$alttag1",
				'alttagimg2'=>"$alttag2",
	  );
	  $this->db->insert('subcategory', $data);

	  echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product Sub Category' : '<b>Product Sub Category added Successfully</b>';







}




function upload_filesubedit() {

	//upload file
	
	$config['upload_path'] = 'uploads/subcategory';
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
			if (file_exists('uploads/subcategory' . $_FILES['filesub']['name'])) {
				echo 'File already exists : uploads/subcategory' . $_FILES['filesub']['name'];
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


	if (isset($_FILES['filesubimg']['name'])) {
		if (0 < $_FILES['filesubimg']['error']) {
			echo 'Error during file upload' . $_FILES['filesubimg']['error'];
		} else {
			if (file_exists('uploads/subcategory' . $_FILES['filesubimg']['name'])) {
				echo 'File already exists : uploads/subcategory' . $_FILES['filesubimg']['name'];
			} else {
				
				if (!$this->upload->do_upload('filesubimg')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
	} else {
		echo 'Please choose a file';
	}
	
	
	$productimg=$_FILES['filesub']['name'];
	 $productimgsub=$_FILES['filesubimg']['name'];
	 $productcategory=$this->input->post('prdcat');
	 $prdsubcat=$this->input->post('prdsubcat');
	 $prdsubdesc=$this->input->post('prdsubdesc');
	 $subcatid=$this->input->post('subcatid');
	 //$prdsubdesc=$this->input->post('prdsubdesc');
	 $price=$this->input->post('price');
	 $subcatshortdesc=$this->input->post('prdsubshortdesc');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 if (($productimg!='') && ($productimgsub!='')){
	 $data = array(
		 'subcategoryname' =>"$prdsubcat",
		 'categoryid' =>"$productcategory",
		 'subcatdesc'=>"$prdsubdesc",
		 'subcategoryimage'=>$productimg,
		 'subcatbannerimage'=>$productimgsub,
		 'subcatshortdesc'=>$subcatshortdesc,
				'price'=>$price,
				'currency'=>'AMD','alttagimg1'=>"$alttag1",
				'alttagimg2'=>"$alttag2",		
	  );
	}else if (($productimg!='') && ($productimgsub=='')){
		$data = array(
			'subcategoryname' =>"$prdsubcat",
			'categoryid' =>"$productcategory",
			'subcatdesc'=>"$prdsubdesc",
			'subcategoryimage'=>$productimg,
			//'subcatbannerimage'=>$productimgsub,
			'subcatshortdesc'=>$subcatshortdesc,
				   'price'=>$price,
				   'currency'=>'AMD','alttagimg1'=>"$alttag1",
				   'alttagimg2'=>"$alttag2",		
		 );

	}
	else if (($productimg=='') && ($productimgsub!='')){
		$data = array(
			'subcategoryname' =>"$prdsubcat",
			'categoryid' =>"$productcategory",
			'subcatdesc'=>"$prdsubdesc",
			//'subcategoryimage'=>$productimg,
			'subcatbannerimage'=>$productimgsub,
			'subcatshortdesc'=>$subcatshortdesc,
				   'price'=>$price,
				   'currency'=>'AMD','alttagimg1'=>"$alttag1",
				   'alttagimg2'=>"$alttag2",		
		 );

		 //print_r($data);

	}
	else{
		$data = array(
			'subcategoryname' =>"$prdsubcat",
			'categoryid' =>"$productcategory",
			'subcatdesc'=>"$prdsubdesc",
			'subcatshortdesc'=>$subcatshortdesc,
				'price'=>$price,
				'currency'=>'AMD','alttagimg1'=>"$alttag1",
				'alttagimg2'=>"$alttag2",			
		 );

	}
	  $this->db->where('subcategoryid',$subcatid);
	  $this->db->update('subcategory', $data);

	  //echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product Sub Category' : '<b>Product Sub Category added Successfully</b>';
	  echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Sub Category not edited') : $this->session->set_flashdata('flash_msg', 'Sub Category edited successfully');



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
	$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();	
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
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
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
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
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_enquiries($config["per_page"],$page);
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
$this->load->view('services/listenquiries',$data);	
}


public function deleteenquiries(){
	$id=$_GET['id'];
	$this->db->where('enquiryid',$id);
	$this->db->delete('enquiries');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Enquiries' : 'Enquiries deleted Successfully';
}

public function deletecontactenquiries(){
	$id=$_GET['id'];
	$this->db->where('enquiryid',$id);
	$this->db->delete('contactenquiries');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Contact Enquiries' : 'Contact Enquiries deleted Successfully';

}

public function listcontactenquiries(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listcontactenquiries";
$config["total_rows"] = $this->sm->get_countcontactenquiries();
$config["per_page"] = 2;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_contactenquiries($config["per_page"],$page);
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();	
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
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
	$data['contactus']=$this->sm->get_contactus(); 
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/addservices',$data);

}

function addtestimonials(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('testimonials');
    $query = $this->db->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/addtestimonials',$data);


}

function edittestimonials(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$testid=$this->uri->segment(3);
	$this->load->model('Servicesmodel');
	$this->db->where('testimonialid',$testid);
	$this->db->from('testimonials');
    $query = $this->db->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/edittestimonials',$data);


}
function editblog(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$blogid=$this->uri->segment(3);
	$this->load->model('Servicesmodel');
	$this->db->where('contentid',$blogid);
	$this->db->from('blogcontents');
    $query = $this->db->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/editblogcontents',$data);


}





function addblogcontent(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('blogcontents');
    $query = $this->db->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/addblogcontents',$data);


}
function editblogcontent(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$blogid=$this->uri->segment(3);
	$this->db->where('contentid',$blogid);
	$this->db->from('blogcontents');
    $query = $this->db->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/editblogcontent',$data);


}






function addfaq(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('faq');
    $query = $this->db->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/addfaq',$data);

}

function editfaq(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$id=$this->uri->segment(3);
	//echo $id;
	//die;
	$this->load->model('Servicesmodel');
	$this->db->from('faq');
	$this->db->where('faqid',$id);
    $query = $this->db->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/editfaq',$data);

}




function addmenu(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('menus');
    $query = $this->db->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['pmenus']=$this->sm->get_parentmenus();
	//print_r($data['pmenus']);
	$this->load->view('services/addmenu',$data);

}

function editmenu(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$id=$this->uri->segment(3);
	//echo $id;
	//die;
	$this->load->model('Servicesmodel');
	$this->db->from('menus');
	$this->db->where('menuid',$id);
    $query = $this->db->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['pmenus']=$this->sm->get_parentmenus();
	$this->load->view('services/editmenu',$data);

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
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/editservices',$data);

}


function edithomepage(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('homepage');
    $query = $this->db->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/edithomepage',$data);

}

function editaboutus(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('aboutus');
    $query = $this->db->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/editaboutus',$data);

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

public function addfaqprocess(){
	$faqtitle=$this->input->post('faqtitle');
	//$subtitle=$this->input->post('subtitle');
	$description=$this->input->post('description');
	$data = array(
		'faqtitle' =>"$faqtitle",
		//'subtitle' =>"$subtitle",
		'faqdescription'=>"$description",
		//'Image1'=>$image1,'Image2'=>$image2		
	 );
	 //print_r($data);
	 $this->db->insert('faq', $data);

	 echo ($this->db->affected_rows() != 1) ? 'Error in Adding Faq' : '<b>Faq added Successfully</b>';
}

public function addmenuprocess(){


	$menuname=$this->input->post('menuname');
	$menutype=$this->input->post('menutype');
	$menuurl=$this->input->post('menuurl');
	$status=$this->input->post('status');
	$pmenu=$this->input->post('pmenu');
	$data = array(
		'menuname' =>"$menuname",
		'menutype' =>"$menutype",
		'url'=>"$menuurl",
		'status'=>$status,'parentmenuid'=>$pmenu		
	 );
	 //print_r($data);
	 $this->db->insert('menus', $data);

	 echo ($this->db->affected_rows() != 1) ? 'Error in Adding Menu' : '<b>Menu added Successfully</b>';


}

public function editmenuprocess(){

	$menuid=$this->input->post('menuid');
	$menuname=$this->input->post('menuname');
	$menutype=$this->input->post('menutype');
	$menuurl=$this->input->post('menuurl');
	$status=$this->input->post('status');
	$pmenu=$this->input->post('pmenu');
	$data = array(
		'menuname' =>"$menuname",
		'menutype' =>"$menutype",
		'url'=>"$menuurl",
		'status'=>$status,'parentmenuid'=>$pmenu		
	 );
	 //print_r($data);
	 $this->db->where('menuid',$menuid);
	 $this->db->update('menus', $data);

	  ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Menu') : $this->session->set_flashdata('flash_msg', 'Menu Edited Successfully');

 redirect("welcome/listmenus");


}








public function addqualityprocess(){
	$title=$this->input->post('title');
	//$subtitle=$this->input->post('subtitle');
	$orderno=$this->input->post('orderno');
	$data = array(
		'quality' =>"$title",
		//'subtitle' =>"$subtitle",
		'orderno'=>"$orderno",
		//'Image1'=>$image1,'Image2'=>$image2		
	 );
	 //print_r($data);
	 $this->db->insert('quality', $data);

	 echo ($this->db->affected_rows() != 1) ? 'Error in Adding Quality' : '<b>Quality added Successfully</b>';


}

public function editfaqprocess(){
	$faqtitle=$this->input->post('faqtitle');
	$faqid=$this->input->post('faqid');
	$description=$this->input->post('description');
	$data = array(
		'faqtitle' =>"$faqtitle",
		//'subtitle' =>"$subtitle",
		'faqdescription'=>"$description",
		//'Image1'=>$image1,'Image2'=>$image2		
	 );
	 //print_r($data);
	 $this->db->where('faqid',$faqid);
	 $this->db->update('faq', $data);

	 echo ($this->db->affected_rows() != 1) ? 'Error in Editing Faq' : '<b>Faq edited Successfully</b>';
}









public function editservicesprocess(){

	$this->db->where('serviceid',1);
	$this->db->select('*');
    $this->db->from('services');
    $query = $this->db->get();
   $imgdetails=$query->row();
   $image1old=$imgdetails->Image1;
   $image2old=$imgdetails->Image2;
   //$image3=$imgdetails->serviceimg;

   //$image1=time().$_FILES['image1']['name'];
   //$image2=time().$_FILES['image2']['name'];
	$config['upload_path'] = 'uploads/services';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	//$config['file_name'] = $image1;
	$config1['upload_path'] = 'uploads/services';
	$config1['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config1['max_size'] = '1024'; //1 MB
	//$config1['file_name'] = $image2;

	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/services' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/services' . $_FILES['image1']['name'];
			} else {
				
				if (!$this->upload->do_upload('image1')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		//$image1=time().$_FILES['image1']['name'];

			$image1=$_FILES['image1']['name'];
	} else {
	$image1=$image1old;
	}
	
	$this->load->library('upload', $config1);
	$this->upload->initialize($config1);

	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/services' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/services' . $_FILES['image2']['name'];
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
		$image2=$image2old;
	}
	
	
	 $maintitle=$this->input->post('maintitle');
	 $subtitle=$this->input->post('subtitle');
	 $description=$this->input->post('description');
	 $metatag=$this->input->post('metatag');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $data = array(
		'maintitle' =>"$maintitle",
		'subtitle' =>"$subtitle",
		'description'=>"$description",
		'metatag'=>"$metatag",
		'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		'Image1'=>$image1
		,'Image2'=>$image2
				
	 );
	 /*if (($image1!='') && ($image2!='')){
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
			
			'Image2'=>$image2		
		 );
	   }
	   if (($image1=='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
					
		 );
	   }*/
	  //print_r($data);
	  //die;
	  $this->db->where('serviceid',1);
	  $this->db->update('services', $data);
	  echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Services') : $this->session->set_flashdata('flash_msg', 'Services Edited Successfully');
	  //echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product Services' : '<b>Product Services added Successfully</b>';


}


public function editsiteinformation(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('siteinformation');
    $query = $this->db->get();
    $data['result']=$query->row();
	$data['contactus']=$this->sm->get_contactus(); 
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/editsiteinformation',$data);




}

public function siteinfeditprocess(){
	$this->db->select('*');
    $this->db->from('siteinformation');
    $query = $this->db->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->faviconimg;
   $image22=$imgdetails->logoimg;
   //$image3=$imgdetails->serviceimg;

   $config['upload_path'] = 'uploads/logo';
   $config['allowed_types'] = 'gif|jpg|png|jpeg';	
   $config['max_size'] = '1024'; //1 MB
   $this->load->library('upload', $config);
   $this->upload->initialize($config);
   if (isset($_FILES['image1']['name'])) {
	   if (0 < $_FILES['image1']['error']) {
		   echo 'Error during file upload' . $_FILES['image1']['error'];
	   } else {
		   if (file_exists('uploads/logo' . $_FILES['image1']['name'])) {
			   echo 'File already exists : uploads/logo' . $_FILES['image1']['name'];
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
	   $image1=$image11;
   }
   

   if (isset($_FILES['image2']['name'])) {
	   if (0 < $_FILES['image2']['error']) {
		   echo 'Error during file upload' . $_FILES['image2']['error'];
	   } else {
		   if (file_exists('uploads/logo' . $_FILES['image2']['name'])) {
			   echo 'File already exists : uploads/logo' . $_FILES['image2']['name'];
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
	   $image2=$image22;
   }
   if ($image1==''){
	$image1=$image11;
   }
   if ($image2==''){
	$image2=$image22;
   }

   $sitedescription=$this->input->post('sitedescription');
   $sitename=$this->input->post('sitename');
   /*$servicetitle3=$this->input->post('servicetitle3');
   $servicetitle=$this->input->post('servicetitle');
   $qualitytitle=$this->input->post('qualitytitle');	
	$maintitle=$this->input->post('maintitle');
	$subtitle=$this->input->post('subtitle');
	$metatag=$this->input->post('metatag');*/



   
   $data = array(
	'sitedescription' =>"$sitedescription",
	'sitename' =>"$sitename",
	//'description'=>"$description",
	//'metatag'=>"$metatag",
	//'alttagimg1'=>"$alttag1",
	//'alttagimg2'=>"$alttag2",
	'faviconimg'=>$image2
	,'logoimg'=>$image1
			
 );

 $this->db->where('siteinfid',1);
 $this->db->update('siteinformation', $data);
 echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Site Information') : $this->session->set_flashdata('flash_msg', 'Site Information Edited Successfully');

 redirect("welcome/editsiteinformation");



}

public function edithomepageprocess(){
	$this->db->select('*');
    $this->db->from('homepage');
    $query = $this->db->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->homepageimg1;
   $image22=$imgdetails->homepageimg2;
   $image33=$imgdetails->serviceimg;





	$config['upload_path'] = 'uploads/homepage';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/homepage' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/homepage' . $_FILES['image1']['name'];
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
		$image1=$image11;
	}
	
	

	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/homepage' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/homepage' . $_FILES['image2']['name'];
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
		$image2=$image22;
	}
	
	if (isset($_FILES['image3']['name'])) {
		if (0 < $_FILES['image3']['error']) {
			echo 'Error during file upload' . $_FILES['image3']['error'];
		} else {
			if (file_exists('uploads/homepage' . $_FILES['image3']['name'])) {
				echo 'File already exists : uploads/homepage' . $_FILES['image3']['name'];
			} else {
				
				if (!$this->upload->do_upload('image3')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image3=$_FILES['image3']['name'];
	} else {
		$image3=$image33;
	}
	if ($image1==''){
		$image1=$image11;
	   }
	   if ($image2==''){
		$image2=$image22;
	   }
	   if ($image3==''){
		$image3=$image33;
	   }

	$servicetitle1=$this->input->post('servicetitle1');
	$servicetitle2=$this->input->post('servicetitle2');
	$servicetitle3=$this->input->post('servicetitle3');
	$servicetitle=$this->input->post('servicetitle');
	$qualitytitle=$this->input->post('qualitytitle');	
	 $maintitle=$this->input->post('maintitle');
	 $subtitle=$this->input->post('subtitle');
	 $metatag=$this->input->post('metatag');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $alttag3=$this->input->post('alttag3');
	 $data = array(
		'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		'alttagimg3'=>"$alttag3",
		'metatag'=>$metatag,
		'title1' =>"$maintitle",
		'title2' =>"$subtitle",
		//'description'=>"$description",
		'servicetitle1'=>$servicetitle1, 'servicetitle2'=>$servicetitle2,'servicetitle3'=>$servicetitle3,
		'homepageimg1'=>$image1,'homepageimg2'=>$image2,'serviceimg'=>$image3,'servicetitle'=>$servicetitle,'qualitytitle'=>$qualitytitle		
	 );




	/* if (($image1!='') && ($image2!='')){
	 $data = array(
		 'maintitle' =>"$maintitle",
		 'subtitle' =>"$subtitle",
		 'description'=>"$description",
		 'servicetitle1'=>'$servicetitle1', 'servicetitle2'=>'$servicetitle2','servicetitle3'=>'$servicetitle3',
		 'Image1'=>$image1,'Image2'=>$image2,'servicetitle'=>'$servicetitle','qualitytitle'=>'$qualitytitle'		
	  );
	}
	if (($image1!='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			'Image1'=>$image1, 'servicetitle1'=>'$servicetitle1', 'servicetitle2'=>'$servicetitle2','servicetitle3'=>'$servicetitle3',
			'Image1'=>$image1,'Image2'=>$image2,'servicetitle'=>'$servicetitle','qualitytitle'=>'$qualitytitle'		
		 );
	   }
	   if (($image1=='') && ($image2!='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
			
			'Image2'=>$image2, 'Image1'=>$image1,'Image2'=>$image2,'servicetitle'=>'$servicetitle','qualitytitle'=>'$qualitytitle','servicetitle1'=>'$servicetitle1', 'servicetitle2'=>'$servicetitle2','servicetitle3'=>'$servicetitle3',		
		 );
	   }
	   if (($image1=='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description", 'Image1'=>$image1,'Image2'=>$image2,'servicetitle'=>'$servicetitle','qualitytitle'=>'$qualitytitle','servicetitle1'=>'$servicetitle1', 'servicetitle2'=>'$servicetitle2','servicetitle3'=>'$servicetitle3',
				
		 );
	   }*/
	  //print_r($data);
	  $this->db->where('homepageid',2);
	  $this->db->update('homepage', $data);
//echo $this->db->last_query();
//die;
	  //echo ($this->db->affected_rows() != 1) ? 'Error in Adding Product Services' : '<b>Product Services added Successfully</b>';
	 ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Home Page') : $this->session->set_flashdata('flash_msg', 'Home Page Edited Successfully');

}


public function editaboutusprocess(){
	$this->db->select('*');
    $this->db->from('aboutus');
    $query = $this->db->get();
   $imgdetails=$query->row();
   $image11=$imgdetails->missionlogo;
   $image22=$imgdetails->visionlogo;
   $image33=$imgdetails->aboutusbanner;
	$config['upload_path'] = 'uploads/aboutus';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/aboutus' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/aboutus' . $_FILES['image1']['name'];
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
		$image1=$image11;
	}
	
	

	if (isset($_FILES['image2']['name'])) {
		if (0 < $_FILES['image2']['error']) {
			echo 'Error during file upload' . $_FILES['image2']['error'];
		} else {
			if (file_exists('uploads/aboutus' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/aboutus' . $_FILES['image2']['name'];
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
		$image2=$image22;
	}
	
	if (isset($_FILES['image3']['name'])) {
		if (0 < $_FILES['image3']['error']) {
			echo 'Error during file upload' . $_FILES['image3']['error'];
		} else {
			if (file_exists('uploads/aboutus' . $_FILES['image3']['name'])) {
				echo 'File already exists : uploads/aboutus' . $_FILES['image3']['name'];
			} else {
				
				if (!$this->upload->do_upload('image3')) {
					//echo $this->upload->display_errors();
				} else {
					//echo 'File successfully uploaded : uploads/' . $_FILES['file']['name'];
				}
			}
		}
		$image3=$_FILES['image3']['name'];
	} else {
		$image3=$image33;
	}
	
	 $maintitle=$this->input->post('maintitle');
	 $mission=$this->input->post('mission');
	 $vision=$this->input->post('vision');
	 $yearsexperience=$this->input->post('yearsexperience');
	 $happyclients=$this->input->post('happyclients');
	 $expertmembers=$this->input->post('expertmembers');
	 $aboutusshortdesc=$this->input->post('aboutusshortdesc');
	 $projectsdone=$this->input->post('projectsdone');
	 $aboutcompany=$this->input->post('aboutcompany');
	 $metatag=$this->input->post('metatag');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $alttag3=$this->input->post('alttag3');
	 $data = array(
		'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		'alttagimg3'=>"$alttag3",
		'metatag'=>$metatag,
		'title' =>"$maintitle",
		'mission' =>"$mission",
		'aboutcompany'=>"$aboutcompany",
		'vision'=>$vision,
		'mission'=>$mission,
		'yearsexperience'=>$yearsexperience,
		'happyclients'=>$happyclients,
		'expertmembers'=>$expertmembers,
		'aboutusshortdesc'=>$aboutusshortdesc,
		'projectsdone'=>$projectsdone,'missionlogo'=>$image1,'visionlogo'=>$image2,'aboutusbanner'=>$image3,

		//'Image1'=>$image1,'Image2'=>$image2		
	 );
	 /*if (($image1!='') && ($image2!='')){
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
			
			'Image2'=>$image2		
		 );
	   }
	   if (($image1=='') && ($image2=='')){
		$data = array(
			'maintitle' =>"$maintitle",
			'subtitle' =>"$subtitle",
			'description'=>"$description",
				
		 );
	   }*/
	  //print_r($data);
	  $this->db->where('aboutusid',1);
	  $this->db->update('aboutus', $data);
	  echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing About Us') : $this->session->set_flashdata('flash_msg', 'About Us Edited Successfully');
	  //echo ($this->db->affected_rows() != 1) ? 'Error in Editing About Us Contents' : '<b>About Us Contents added Successfully</b>';


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
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
$this->load->view('services/listservices',$data);	


}


public function listsiteinformation(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listsiteinformation";
/*$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_services($config["per_page"],$page);*/
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
$this->load->view('services/listsiteinformation',$data);	


}




public function listsocialmedialinks(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listsiteinformation";
/*$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_services($config["per_page"],$page);*/
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['socialmedia']=$this->sm->get_socialmedialinks();
$this->load->view('services/listsocialmedialinks',$data);	


}


public function socialmedialinksprocess(){

	$whatsuplink=$this->input->post('whatsuplink');
	$linkldn=$this->input->post('linkldn');
	$youtube=$this->input->post('youtube');
	$facebook=$this->input->post('facebook');
	$instagram=$this->input->post('instagram');
	$twitter=$this->input->post('twitter');



	$data = array(
		'whatsuplink'=>"$whatsuplink",
	'linkldn'=>"$linkldn",
		'youtube'=>"$youtube",
		'facebook'=>$facebook,
		 'instagram' =>"$instagram",
		'twitter' =>"$twitter"
		 //'authorname'=>"$name",
		 //'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle		
	  );


  //}
 
  //$id=$this->input->post('blogid'); 
  //$this->db->where('contentid',$id);
   $this->db->update('socialmedialinks', $data);

  ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Social media Links') : $this->session->set_flashdata('flash_msg', 'Social media Links Edited Successfully');

  redirect("welcome/listsocialmedialinks");


}

public function editsocialmedialinks(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('socialmedialinks');
    $query = $this->db->get();
    $data['result']=$query->row();
	$data['contactus']=$this->sm->get_contactus(); 
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/editsocialmedialinks',$data);


}


public function listservicesdetails(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}

$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['result']=$this->sm->get_servicesdetails();
$this->load->view('services/listservicesdetails',$data);	


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
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['contactus']=$this->sm->get_contactus();
$this->load->view('services/listaboutus',$data);	


}

public function listhomepage(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listhomepage";
$config["total_rows"] = $this->sm->get_countservices();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_homepageadmin();
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$this->load->view('services/listhomepage',$data);	


}

public function listcontactus(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$data['result']=$this->sm->get_contactus();
	$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/listcontactus',$data);	

}

public function listfaq(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listfaq";
$config["total_rows"] = $this->sm->get_countfaq();
$config["per_page"] = 2;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_faqadmin($config["per_page"],$page);
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$this->load->view('services/listfaq',$data);	


}

public function listmenus(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listmenus";
$config["total_rows"] = $this->sm->get_countmenu();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_menuadmin($config["per_page"],$page);
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$this->load->view('services/listmenus',$data);	


}









public function listquality(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listquality";
$config["total_rows"] = $this->sm->get_countquality();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_qualityadmin($config["per_page"],$page);
$data['contactus']=$this->sm->get_contactus();
$data['newsletter']=$this->sm->get_newsletter();
$this->load->view('services/listquality',$data);	


}




public function listblogcontents(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listblogcontents";
$config["total_rows"] = $this->sm->get_countblog();
$config["per_page"] = 5;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_blogadmin($config["per_page"],$page);
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
$this->load->view('services/listblog',$data);	


}
public function listtestimonials(){


	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
$config = array();
$config["base_url"] = base_url() . "Welcome/listtestimonials";
$config["total_rows"] = $this->sm->get_counttestimonials();
$config["per_page"] = 10;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
$data['result']=$this->sm->get_testimonialsadmin($config["per_page"],$page);
$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
$this->load->view('services/listtestimonials',$data);
}


function delfaq(){

	$id=$_GET['id'];
	$this->db->where('faqid',$id);
	$this->db->delete('faq');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Faq' : 'Faq deleted Successfully';


}

function delmenu(){

	$id=$_GET['id'];
	$this->db->where('menuid',$id);
	$this->db->delete('menus');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Menu' : 'Menu deleted Successfully';


}
function delql(){

	$id=$_GET['id'];
	$this->db->where('qualityid',$id);
	$this->db->delete('quality');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Quality' : 'Quality deleted Successfully';


}


public function addtestimonialsprocess(){

	$config['upload_path'] = 'uploads/testimonial';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/testimonial/' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/testimonial/' . $_FILES['image1']['name'];
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
	
	

	
	$image1=$_FILES['image1']['name'];
	$alttag1=$this->input->post('alttag1');

	 $testtitle=$this->input->post('testtitle');
	 $rating=$this->input->post('rating');
	 $description=$this->input->post('description');
	 $name=$this->input->post('name');
	  $place=$this->input->post('place');
	  $date=$this->input->post('date');
	 $data = array(
		 'testimonial' =>"$testtitle",
		 'rating' =>"$rating",
		 'name'=>"$name",
		 'image'=>$image1,'place'=>$place,'date'=>$date,'alttagimg1'=>"$alttag1"		
	  );
	  
	  	  $this->db->insert('testimonials', $data);

	  echo ($this->db->affected_rows() != 1) ? 'Error in Adding Testimonials' : '<b>Testimonials added Successfully</b>';


}


public function deletetestimonials(){
	$id=$_GET['id'];
	$this->db->where('testimonialid',$id);
	$this->db->delete('testimonials');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Testimonials' : 'Testimonials deleted Successfully';
}

public function deleteblog(){
	$id=$_GET['id'];
	$this->db->where('contentid',$id);
	$this->db->delete('blogcontents');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Blog Contents' : 'Blog Contents deleted Successfully';
}


public function addblogcontentsprocess(){

	$config['upload_path'] = 'uploads/blog';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/blog' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/blog' . $_FILES['image1']['name'];
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
			if (file_exists('uploads/blog' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/blog' . $_FILES['image2']['name'];
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

	 $blogtitle=$this->input->post('blogtitle');
	 $toparticle=$this->input->post('toparticle');
	 $description=$this->input->post('description');
	 $name=$this->input->post('name');
	 $place=$this->input->post('place');
	  $companyname=$this->input->post('companyname');
	  $date=$this->input->post('date');
	  $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	 $data = array(
		'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		'place'=>"$place",
		'companyname'=>$companyname,
		 'description' =>"$description",
		'toparticle' =>"$toparticle",
		 'authorname'=>"$name",
		 'autorimage'=>$image1,'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle,'contentimage'=>$image2		
	  );
	  //$id=$this->uri->segment(3); 
	  //$this->db->where('contentid',$id);
	   $this->db->insert('blogcontents', $data);

	  echo ($this->db->affected_rows() != 1) ? 'Error in Adding Blogs' : '<b>Blog Added Successfully</b>';




}


public function editblogcontentsprocess(){

	$config['upload_path'] = 'uploads/blog';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/blog' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/blog' . $_FILES['image1']['name'];
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
			if (file_exists('uploads/blog' . $_FILES['image2']['name'])) {
				echo 'File already exists : uploads/blog' . $_FILES['image2']['name'];
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

	 $blogtitle=$this->input->post('blogtitle');
	 $toparticle=$this->input->post('toparticle');
	 $description=$this->input->post('description');
	 $name=$this->input->post('name');
	 $place=$this->input->post('place');
	  $companyname=$this->input->post('companyname');
	  $date=$this->input->post('date');
	  $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	  if (($image1!='') && ($image2!='')){

		$data = array(
			'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
			'place'=>"$place",
			'companyname'=>$companyname,
			 'description' =>"$description",
			'toparticle' =>"$toparticle",
			 'authorname'=>"$name",
			 'autorimage'=>$image1,'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle,'contentimage'=>$image2		
		  );

	  }else if ($image2!=''){

		$data = array(
			'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
			'place'=>"$place",
			'companyname'=>$companyname,
			 'description' =>"$description",
			'toparticle' =>"$toparticle",
			 'authorname'=>"$name",
			 'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle,'contentimage'=>$image2		
		  );


	  }else if ($image1!=''){
		$data = array(
			'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
			'place'=>"$place",
			'companyname'=>$companyname,
			 'description' =>"$description",
			'toparticle' =>"$toparticle",
			 'authorname'=>"$name",
			 'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle,'autorimage'=>$image1		
		  );


	  }else{
		$data = array(
			'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
			'place'=>"$place",
			'companyname'=>$companyname,
			 'description' =>"$description",
			'toparticle' =>"$toparticle",
			 'authorname'=>"$name",
			 'toparticle'=>$toparticle,'date'=>$date,'title'=>$blogtitle		
		  );


	  }
	 
	  $id=$this->input->post('blogid'); 
	  $this->db->where('contentid',$id);
	   $this->db->update('blogcontents', $data);
	   //echo $this->db->last_query();

	  echo ($this->db->affected_rows() != 1) ? 'Error in Editing Blogs' : '<b>Blog Edited Successfully</b>';




}
















public function edittestimonialsprocess(){

	$config['upload_path'] = 'uploads/testimonial';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/testimonial' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/testimonial' . $_FILES['image1']['name'];
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
	
	

	
	$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];

	 $testtitle=$this->input->post('testtitle');
	 $rating=$this->input->post('rating');
	 $description=$this->input->post('description');
	 $name=$this->input->post('name');
	  $place=$this->input->post('place');
	  $date=$this->input->post('date');
	  $alttag1=$this->input->post('alttag1');

	 $data = array(
		 'testimonial' =>"$description",'alttagimg1'=>"$alttag1",
		 'rating' =>"$rating",
		 'name'=>"$name",
		 'image'=>$image1,'place'=>$place,'date'=>$date,'title'=>$testtitle		
	  );
	  $id=$this->uri->segment(3); 
	  $this->db->where('testimonialid',$id);
	   $this->db->update('testimonials', $data);

	  echo ($this->db->affected_rows() != 1) ? 'Error in Editing Testimonials' : '<b>Testimonials Edited Successfully</b>';


}


public function addsolutionsprocess(){

	$config['upload_path'] = 'uploads/problems';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/problems' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/problems' . $_FILES['image1']['name'];
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

	$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];

	 $title=$this->input->post('maintitle');
	$link=$this->input->post('link');
	 $description=$this->input->post('description');
	 $alttag1=$this->input->post('alttag1');
	  //$place=$this->input->post('place');
	  //$date=$this->input->post('date');
	  
	 $data = array(
		 'description' =>"$description",
		 'link' =>"$link",
		 'title'=>"$title",
		 'picture'=>$image1,
		 'alttagimg1'=>"$alttag1"		
	  );
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  //$this->db->where('testimonialid',$id);
	   //$this->db->update('testimonials', $data);
	   $this->db->insert('problems', $data);

	  echo ($this->db->affected_rows() != 1) ? 'Error in Adding Solutions' : '<b>Solutions Added Successfully</b>';



}


public function editsolutionsprocess(){

	$config['upload_path'] = 'uploads/problems';
	$config['allowed_types'] = 'gif|jpg|png|jpeg';	
	$config['max_size'] = '1024'; //1 MB
	$this->load->library('upload', $config);
	$this->upload->initialize($config);
	if (isset($_FILES['image1']['name'])) {
		if (0 < $_FILES['image1']['error']) {
			echo 'Error during file upload' . $_FILES['image1']['error'];
		} else {
			if (file_exists('uploads/problems' . $_FILES['image1']['name'])) {
				echo 'File already exists : uploads/problems' . $_FILES['image1']['name'];
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

	$image1=$_FILES['image1']['name'];
	//$image2=$_FILES['image2']['name'];

	 $title=$this->input->post('maintitle');
	 $link=$this->input->post('link');
	 $description=$this->input->post('description');
	$problemid=$this->input->post('problemid');
	$alttag1=$this->input->post('alttag1');
	  //$date=$this->input->post('date');
	  if ($image1==''){
		$data = array(
			'description' =>"$description",
			'alttagimg1'=>"$alttag1",
			'title'=>"$title",
			//'picture'=>$image1,
			'link' =>"$link",
			//,'place'=>$place,'date'=>$date,'title'=>$testtitle		
		 );

	  }else {
	 $data = array(
		 'description' =>"$description",
		 'alttagimg1'=>"$alttag1",
		 'title'=>"$title",
		 'picture'=>$image1,
		 'link' =>"$link",
		 //,'place'=>$place,'date'=>$date,'title'=>$testtitle		
	  );
	}
	  //print_r($data);
	  $id=$this->uri->segment(3); 
	  $this->db->where('problemid',$problemid);
	   $this->db->update('problems', $data);
	   //$this->db->insert('problems', $data);

	  //echo ($this->db->affected_rows() != 1) ? 'Error in Adding Solutions' : '<b>Solutions Added Successfully</b>';
	  echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Solutions') : $this->session->set_flashdata('flash_msg', 'Solutions Edited Successfully');


}












public function listblogpage(){

	$data['result']=$this->sm->get_blogpagedetails();
	$this->db->from('contactus');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/listblogpage',$data);


}

public function newsletter(){
	$data['result']=$this->sm->get_newsletterall();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/listnewsletter',$data);
}


public function newslettersubscribers(){
	$config = array();
$config["base_url"] = base_url() . "Welcome/newslettersubscribers";
$config["total_rows"] = $this->sm->get_countnewslettersubscribers();
$config["per_page"] = 5;
$config["uri_segment"] = 3;
$this->pagination->initialize($config);
$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
$data["links"] = $this->pagination->create_links();	
	$data['result']=$this->sm->get_newslettersubscribersall($config["per_page"],$page);
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/newslettersubscribers',$data);


}

public function deletenewsletter(){
	$id=$_GET['id'];
	$this->db->where('newsletterid',$id);
	$this->db->delete('newslettersubscribe');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Newsletter Subscribers' : 'Newsletter Subscribers deleted Successfully';

}
function editnewsletter(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('newsletter');
    $query = $this->db->get();
    $data['result']=$query->row();
	$data['contactus']=$this->sm->get_contactus(); 
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/editnewsletter',$data);


}



function editgoogleanalyics(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('googleanalyticscode');
    $query = $this->db->get();
    $data['result']=$query->row();
	$data['contactus']=$this->sm->get_contactus(); 
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/editgoogleanalytics',$data);


}


function editgaprocess(){

	//$data['upgoogleanalytics']=$this->sm->upgoogleanalytics();
	$description=$this->input->post('description');
	/*$name=$this->input->post('name');
	 $place=$this->input->post('place');
	 $date=$this->input->post('date');*/
	$data = array(
		'googleanalytics' =>"$description",
		//'rating' =>"$rating",
		//'name'=>"$name",
		//'image'=>$image1,'place'=>$place,'date'=>$date,'title'=>$testtitle		
	 );
	 //$id=$this->uri->segment(3); 
	 //$this->db->where('newsletterid',$id);
	  $this->db->update('googleanalyticscode', $data);

	 //echo ($this->db->affected_rows() != 1) ? 'Error in Editing Newsletter' : '<b>Newsletter Edited Successfully</b>';

	 ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Google analytics not edited') : $this->session->set_flashdata('flash_msg', 'Google analytics  edited successfully');;

	 redirect("welcome/editgoogleanalyics");





}



function editnewsletterprocess(){
	$description=$this->input->post('description');
	/*$name=$this->input->post('name');
	 $place=$this->input->post('place');
	 $date=$this->input->post('date');*/
	$data = array(
		'newsletterdescription' =>"$description",
		//'rating' =>"$rating",
		//'name'=>"$name",
		//'image'=>$image1,'place'=>$place,'date'=>$date,'title'=>$testtitle		
	 );
	 $id=$this->uri->segment(3); 
	 $this->db->where('newsletterid',$id);
	  $this->db->update('newsletter', $data);

	 //echo ($this->db->affected_rows() != 1) ? 'Error in Editing Newsletter' : '<b>Newsletter Edited Successfully</b>';

	 echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Newsletter not edited') : $this->session->set_flashdata('flash_msg', 'Newsletter edited successfully');;



}

function editblogpageprocess(){
	$description=$this->input->post('description');
	$metatag=$this->input->post('metatag');
	/* $place=$this->input->post('place');
	 $date=$this->input->post('date');*/
	$data = array(
		'blogdescription' =>"$description",
		'metatag' =>"$metatag",
		//'name'=>"$name",
		//'image'=>$image1,'place'=>$place,'date'=>$date,'title'=>$testtitle		
	 );
	 $id=$this->uri->segment(3); 
	 $this->db->where('blogid',$id);
	  $this->db->update('blog', $data);

	 //echo ($this->db->affected_rows() != 1) ? 'Error in Editing Newsletter' : '<b>Newsletter Edited Successfully</b>';

	 //echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Blog page not edited') : $this->session->set_flashdata('flash_msg', 'Blog Page edited successfully');;
	 echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Blog page not edited') : $this->session->set_flashdata('flash_msg', 'Blog Page edited successfully');

}

function editblogpage(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('blog');
    $query = $this->db->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/editblogpagecontent',$data);


}

function editcontactus(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$blogid=$this->uri->segment(3);
	$this->db->from('contactus');
    $query = $this->db->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/editcontactus',$data);


}



	

function contactusprocess(){
	$description=$this->input->post('description');
	$phoneno=$this->input->post('phoneno');
	 $emailid=$this->input->post('emailid');
	 $place=$this->input->post('place');
	 $country=$this->input->post('country');
	 $metatag=$this->input->post('metatag');
	 $alttag1=$this->input->post('alttag1');
	 $alttag2=$this->input->post('alttag2');
	$data = array(
		'contactusdescription' =>"$description",
		'phoneno' =>"$phoneno",
		'emailid'=>"$emailid",
		//'image'=>$image1,
		'city'=>$place,'country'=>$country,
		'metatag' =>"$metatag",
		'alttagimg1'=>"$alttag1",
		'alttagimg2'=>"$alttag2",
		//'title'=>$testtitle		
	 );
	 //$id=$this->uri->segment(3); 
	 //$this->db->where('blogid',$id);
	  $this->db->update('contactus', $data);

	 //echo ($this->db->affected_rows() != 1) ? 'Error in Editing Newsletter' : '<b>Newsletter Edited Successfully</b>';

	 //echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Blog page not edited') : $this->session->set_flashdata('flash_msg', 'Blog Page edited successfully');;
	 echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Contact us page not edited') : $this->session->set_flashdata('flash_msg', 'Contact us Page edited successfully');

}


public function addservicesproblemsolutions(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('faq');
    $query = $this->db->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/addsolutions',$data);



}


public function listsolutions(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$config = array();
	$config["base_url"] = base_url() . "Welcome/listsolutions";
	$config["total_rows"] = $this->sm->get_countsolutions();
	$config["per_page"] = 10;
	$config["uri_segment"] = 3;
	$this->pagination->initialize($config);
	$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
	$data["links"] = $this->pagination->create_links();	
	$data['result']=$this->sm->get_solutions($config["per_page"], $page);
	$this->db->from('problems');
    $query = $this->db->get();
    $data['resultphone']=$query->row();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();	
	$this->load->view('services/listsolutions',$data);
}


public function deletesolution(){
	$id=$_GET['prbid'];
	$this->db->where('problemid',$id);
	$this->db->delete('problems');
	echo ($this->db->affected_rows() != 1) ? 'Error in deleting Solution' : 'Solution deleted Successfully';


}

public function editsolutions(){

	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$id=$this->uri->segment(3);
	$this->db->where('problemid',$id); 
	$this->db->from('problems');
    $query = $this->db->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/editsolutions',$data);



}

public function addhomepagequalities(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$this->db->from('quality');
    $query = $this->db->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$this->load->view('services/addqualities',$data);


}


public function edithomepagequalities(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$id=$this->uri->segment(3);
	$this->db->where('qualityid',$id);
	$this->db->from('quality');
    $query = $this->db->get();
    $data['result']=$query->result_array(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['quality']=$this->sm->get_quality($id);
	//print_r($data['quality']);
	//die;
	 
	$this->load->view('services/editqualities',$data);


}


public function editqualityprocess(){
	$title=$this->input->post('title');
	$qualityid=$this->input->post('qualityid');
	$orderno=$this->input->post('orderno');
	$data = array(
		'quality' =>"$title",
		//'subtitle' =>"$subtitle",
		'orderno'=>"$orderno",
		//'Image1'=>$image1,'Image2'=>$image2		
	 );
	 //print_r($data);
	 $this->db->where('qualityid',$qualityid);
	 $this->db->update('quality', $data);

	 //echo ($this->db->affected_rows() != 1) ? 'Error in Adding Quality' : '<b>Quality added Successfully</b>';
	 echo ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Quality') : $this->session->set_flashdata('flash_msg', 'Quality Edited Successfully');


}


public function editservicedetails(){
	if( $this->session->has_userdata('username')) {					
	}
	else{
	  redirect("welcome/services");
	}
	$this->load->model('Servicesmodel');
	$id=$this->uri->segment(3);
	//$this->db->where('qualityid',$id);
	$this->db->from('servicedetails');
    $query = $this->db->get();
    $data['result']=$query->row(); 
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['quality']=$this->sm->get_quality($id);
	//print_r($data['quality']);
	//die;
	 
	$this->load->view('services/editservicesdetails',$data);


}

public function editservicesdetailsprocess(){
	$title=$this->input->post('title');
	$solution=$this->input->post('solution');
	$data = array(
		'servicedttitle' =>"$title",
		//'subtitle' =>"$subtitle",
		'servicedtsolution'=>"$solution",
		//'Image1'=>$image1,'Image2'=>$image2		
	 );
	 //print_r($data);
	 //$this->db->where('qualityid',$qualityid);
	 $this->db->update('servicedetails', $data);

	 //echo ($this->db->affected_rows() != 1) ? 'Error in Adding Quality' : '<b>Quality added Successfully</b>';
	 ($this->db->affected_rows() != 1) ? $this->session->set_flashdata('flash_msg', 'Error in Editing Service details') : $this->session->set_flashdata('flash_msg', 'Service details Edited Successfully');
	 redirect("welcome/listservicesdetails");

}







}
