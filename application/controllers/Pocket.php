<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pocket extends CI_Controller {

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
	
	public function __construct(){
        parent::__construct();

         //load the model 
		 $this->load->library('session'); 
         $this->load->model('Servicesmodel','sm');
		 $this->load->database();
		 $this->session->keep_flashdata('flash_msg'); 
		 $this->load->helper(['form', 'url']); 
		 $this->load->library("pagination");

    }

	/*public function testindex(){

		$data['result']=$this->sm->get_categoriesall();
		$data['resultsub']=$this->sm->get_subcategoriesall();
		$data['resultcontents']=$this->sm->get_blogcontents();
		$data['resultfaq']=$this->sm->get_faq();
		$data['resulttest']=$this->sm->get_testimonial();
		$data['about']=$this->sm->get_aboutus();
		$data['contactus']=$this->sm->get_contactus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['featureupdate']=$this->sm->get_featureupdate();
		$data['resulthome']=$this->sm->get_homepage();
		$this->load->view('pocket/indextest.php',$data);



	}*/

	public function index()
	{
		$data['result']=$this->sm->get_categoriesallactive();
		$data['resultsuball']=$this->sm->get_subcategoriesall();
		$data['resultsub']=$this->sm->get_subcategoriesrand();
		$data['resultcontents']=$this->sm->get_blogcontents();
		$data['resultfaq']=$this->sm->get_faq();
		$data['resulttest']=$this->sm->get_testimonial();
		$data['about']=$this->sm->get_aboutus();
		$data['contactus']=$this->sm->get_contactus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['featureupdate']=$this->sm->get_featureupdate();
		$data['resulthome']=$this->sm->get_homepage();
		$data['qualities']=$this->sm->get_qualities();
		$data['menus']=$this->sm->get_menus();
		$data['siteinf']=$this->sm->get_siteinf();
		$this->load->view('pocket/index.php',$data);
	}


    public function about()
	{
		$data['contactus']=$this->sm->get_contactus();
		$data['about']=$this->sm->get_aboutus();
		$data['newsletter']=$this->sm->get_newsletter();
		$data['featureupdate']=$this->sm->get_featureupdate();
		$data['menus']=$this->sm->get_menus();
		$data['siteinf']=$this->sm->get_siteinf();
		$this->load->view('pocket/about.php',$data);
	}


public function service(){
	$data['contactus']=$this->sm->get_contactus();
	//$data['result']=$this->sm->get_categoriesall();
	$data['result']=$this->sm->get_categoriesallactive();
	$data['service']=$this->sm->get_servicesall();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['steps']=$this->sm->get_steps();
    $this->load->view('pocket/service.php',$data);
}
public function blog(){
	$data['result']=$this->sm->get_blog();
	$data['resultcontents']=$this->sm->get_blogcontents();
	$data['resulttopcontent']=$this->sm->get_blogcontentstop();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
    $this->load->view('pocket/blog.php',$data);
}

public function services(){
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$this->load->model('Servicesmodel');
	$this->load->view('services/sign-in');
	

} 

public function contact1(){
	$data['menus']=$this->sm->get_menus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
    //$this->load->view('pocket/contact.php',$data);
 $this->load->view('pocket/contact1.php',$data);

}

public function contact(){
	$data['menus']=$this->sm->get_menus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['contactus']=$this->sm->get_contactus();
	$data['about']=$this->sm->get_aboutus();
	$data['siteinf']=$this->sm->get_siteinf();
    //$this->load->view('pocket/contact.php',$data);
 $this->load->view('pocket/contact.php',$data);

}

public function dashboard(){
	
	$this->load->model('Servicesmodel');
	$this->load->view('services/dashboard');
	
} 





public function logout(){
	$this->load->model('Servicesmodel');
	redirect("welcome/services");




}


public function enquiryprocess(){
$firstname=$this->input->post('firstname');
$lastname=$this->input->post('lastname');
$email=$this->input->post('email');
$phone=$this->input->post('phone');
$businessnature=$this->input->post('natureofbusiness');
$packages=$this->input->post('packages');
$note=$this->input->post('note');
$businesswebsiteduration=$this->input->post('businesswebsiteduration');
$data = array(
	'firstname' =>"$firstname",
	'lastname' =>"$lastname",
	'email' =>"$email",
	'phone' =>"$phone",
	'businessnature' =>"$businessnature",
	'packages'=>"$packages",
	'note'=>"$note",
	'businesswebsiteduration'=>"$businesswebsiteduration"
 );
 $this->db->insert('enquiries', $data);
 /*$from_email = "sumilaifix@gmail.com";
 $to_email = 'sumilaifix@gmail.com';
 
 $config = Array(
    'protocol' => 'smtp',
    'smtp_host' => 'ssl://smtp.googlemail.com',
    'smtp_port' => 465,
    'smtp_user' => 'sumilaifix@gmail.com',
    'smtp_pass' => 'sumila@2023',
    'mailtype'  => 'html', 
    'charset'   => 'iso-8859-1'
);
 $this->load->library('email',$config);
 $this->email->from($from_email,"$firstname $lastname");
 $this->email->to($to_email);
 $this->email->subject('Pocket Friendly Enquiries');
 $this->email->message('The email send using codeigniter library');
 //Send mail
 if($this->email->send()){
	 
 else{
	 
}*/
echo "Your enquiry send successfully";
}



public function contactenquiryprocess(){
	$name=$this->input->post('name');
	$companyname=$this->input->post('companyname');
	$email=$this->input->post('email');
	$phone=$this->input->post('phone');
	$message=$this->input->post('message');	
	$data = array(
		'name' =>"$name",
		'companyname' =>"$companyname",
		'email' =>"$email",
		'phone' =>"$phone",
		'message' =>"$message",
		//'packages'=>"$packages",
		//'note'=>"$note",
		//'businesswebsiteduration'=>"$businesswebsiteduration"
	 );
	 $this->db->insert('contactenquiries',$data);
	 /*$from_email = "sumilaifix@gmail.com";
	 $to_email = 'sumilaifix@gmail.com';
	 
	 $config = Array(
		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_port' => 465,
		'smtp_user' => 'sumilaifix@gmail.com',
		'smtp_pass' => 'sumila@2023',
		'mailtype'  => 'html', 
		'charset'   => 'iso-8859-1'
	);
	 $this->load->library('email',$config);
	 $this->email->from($from_email,"$name");
	 $this->email->to($to_email);
	 $this->email->subject('Pocket Friendly Enquiries');
	 $this->email->message('The email send using codeigniter library');
	 //Send mail
	 if($this->email->send()){
		
	 }
	 else{
		 
	}*/
	echo "Your enquiry send successfully";
	}



	public function contactenquiryprocesspopup(){
		$name=$this->input->post('name');
		$companyname=$this->input->post('companyname');
		$email=$this->input->post('email');
		$phone=$this->input->post('phone');
		$message=$this->input->post('message');	
		$business=$this->input->post('business');
		$package=$this->input->post('package');
		$natureofbusiness=$this->input->post('business');
		$data = array(
			'name' =>"$name",
			'companyname' =>"$companyname",
			'email' =>"$email",
			'phone' =>"$phone",
			'message' =>"$message",
			'packageid'=>"$package",
			'natureofbusiness'=>"$natureofbusiness",
			//'businesswebsiteduration'=>"$businesswebsiteduration"
		 );
		 $this->db->insert('contactenquiries',$data);
		 /*$from_email = "sumilaifix@gmail.com";
		 $to_email = 'sumilaifix@gmail.com';
		 
		 $config = Array(
			'protocol' => 'smtp',
			'smtp_host' => 'ssl://smtp.googlemail.com',
			'smtp_port' => 465,
			'smtp_user' => 'sumilaifix@gmail.com',
			'smtp_pass' => 'sumila@2023',
			'mailtype'  => 'html', 
			'charset'   => 'iso-8859-1'
		);
		 $this->load->library('email',$config);
		 $this->email->from($from_email,"$name");
		 $this->email->to($to_email);
		 $this->email->subject('Pocket Friendly Enquiries');
		 $this->email->message('The email send using codeigniter library');
		 //Send mail
		 if($this->email->send()){
			
		 }
		 else{
			 
		}*/
		echo "Your enquiry send successfully";
		}








public function servicedetails(){

    $serid=$this->uri->segment(3);
	//echo "hhhh";
	$data['servicedetails']=$this->sm->get_servicedetals($serid);
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['about']=$this->sm->get_aboutus();
	//$data['categories']=$this->sm->get_categoriesall();
	$data['categories']=$this->sm->get_categoriesallactive();
	$data['lowestpackage']=$this->sm->get_lowestpackage($serid);
	$data['easeyourproblems']=$this->sm->get_problems();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	$data['result']=$this->sm->get_servicesdetails();
	$data['resultsub']=$this->sm->get_subcategoriesall();

	$this->load->view('pocket/service-details.php',$data);

}

public function newslettersubscribe(){
	
	$newsletteremailid=$this->input->post('emailidnews');
	$data=array('subscribeemailid'=>$newsletteremailid);
	$this->db->insert('newslettersubscribe', $data);
	echo ($this->db->affected_rows() != 1) ? 'Error in Subscription' : 'Your emailid subscribed Successfully';

}

public function hosting(){
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
	$data['featureupdate']=$this->sm->get_featureupdate();
	$data['about']=$this->sm->get_aboutus();
	$data['menus']=$this->sm->get_menus();
	$data['siteinf']=$this->sm->get_siteinf();
	//$data['contactus']=$this->sm->get_contactus();
	$this->load->view('pocket/hosting.php',$data);

}


public function indexload(){
	$this->load->view('pocket/post_view');
 }

 /**
  * This method returns all the data.
  *
  * @return Response
 */
 public function loadRecord_old($rowno=0){

	 $rowperpage = 3;

	 if($rowno != 0){
	   $rowno = ($rowno-1) * $rowperpage;
	 }

	 $allcount = $this->db->count_all('posts');

	 $this->db->limit($rowperpage, $rowno);
	 $users_record = $this->db->get('posts')->result_array();

	 $config['base_url'] = base_url().'Pocket/loadRecord';
	 //$config['use_page_numbers'] = TRUE;
	 $config['total_rows'] = $allcount;
	 $config['per_page'] = $rowperpage;

	 $config['full_tag_open']    = '<div class="pagging text-center"><nav><ul class="pagination">';
	 $config['full_tag_close']   = '</ul></nav></div>';
	 $config['num_tag_open']     = '<li class="page-item"><span class="page-link">';
	 $config['num_tag_close']    = '</span></li>';
	 $config['cur_tag_open']     = '<li class="page-item active"><span class="page-link">';
	 $config['cur_tag_close']    = '<span class="sr-only">(current)</span></span></li>';
	 $config['next_tag_open']    = '<li class="page-item"><span class="page-link">';
	 $config['next_tag_close']  = '<span aria-hidden="true"></span></span></li>';
	 $config['prev_tag_open']    = '<li class="page-item"><span class="page-link">';
	 $config['prev_tag_close']  = '</span></li>';
	 $config['first_tag_open']   = '<li class="page-item"><span class="page-link">';
	 $config['first_tag_close'] = '</span></li>';
	 $config['last_tag_open']    = '<li class="page-item"><span class="page-link">';
	 $config['last_tag_close']  = '</span></li>';

	 $this->pagination->initialize($config);

	 $data['pagination'] = $this->pagination->create_links();
	 $data['result'] = $users_record;
	 $data['row'] = $rowno;

	 echo json_encode($data);
}




public function loadRecord($rowno=0){

    // Row per page
    $rowperpage = 5;

    // Row position
    if($rowno != 0){
      $rowno = ($rowno-1) * $rowperpage;
    }
 
    // All records count
    $allcount = $this->sm->getrecordCount();

    // Get records
    $users_record = $this->sm->getData($rowno,$rowperpage);
 
    // Pagination Configuration
    $config['base_url'] = base_url().'Pocket/loadRecord';
    $config['use_page_numbers'] = TRUE;
    $config['total_rows'] = $allcount;
    $config['per_page'] = $rowperpage;

    // Initialize
    $this->pagination->initialize($config);

    // Initialize $data Array
    $data['pagination'] = $this->pagination->create_links();
    $data['result'] = $users_record;
    $data['row'] = $rowno;

    echo json_encode($data);
 
  }

//}





	
}
