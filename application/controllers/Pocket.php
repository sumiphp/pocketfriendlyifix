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
	/*public function __construct()
    {
        parent::__construct();
		$this->load->model('Servicesmodel.php');
    }*/
	public function __construct(){
        parent::__construct();

         //load the model 
		 $this->load->library('session'); 
         $this->load->model('Servicesmodel','sm');
		 $this->load->database();
		 $this->session->keep_flashdata('flash_msg'); 
		 $this->load->helper(['form', 'url']); 

    }


	public function index()
	{
		$data['result']=$this->sm->get_categoriesall();
		$data['resultsub']=$this->sm->get_subcategoriesall();
		$data['resultcontents']=$this->sm->get_blogcontents();
		$data['resultfaq']=$this->sm->get_faq();
		$data['resulttest']=$this->sm->get_testimonial();
		$data['about']=$this->sm->get_aboutus();
		$data['contactus']=$this->sm->get_contactus();
		$data['newsletter']=$this->sm->get_newsletter();
		$this->load->view('pocket/index.php',$data);
	}


    public function about()
	{
		$data['contactus']=$this->sm->get_contactus();
		$data['about']=$this->sm->get_aboutus();
		$data['newsletter']=$this->sm->get_newsletter();
		$this->load->view('pocket/about.php',$data);
	}


public function service(){
	$data['contactus']=$this->sm->get_contactus();
	$data['result']=$this->sm->get_categoriesall();
	$data['service']=$this->sm->get_servicesall();
	$data['newsletter']=$this->sm->get_newsletter();
    $this->load->view('pocket/service.php',$data);
}
public function blog(){
	$data['result']=$this->sm->get_blog();
	$data['resultcontents']=$this->sm->get_blogcontents();
	$data['resulttopcontent']=$this->sm->get_blogcontentstop();
	$data['contactus']=$this->sm->get_contactus();
	$data['newsletter']=$this->sm->get_newsletter();
    $this->load->view('pocket/blog.php',$data);
}

public function services(){
	
	$this->load->model('Servicesmodel');
	$this->load->view('services/sign-in');
	

} 

public function contact(){
	$data['newsletter']=$this->sm->get_newsletter();
	$data['contactus']=$this->sm->get_contactus();
    $this->load->view('pocket/contact.php',$data);


}


public function dashboard(){
	
	$this->load->model('Servicesmodel');
	$this->load->view('services/dashboard');
	
} 





public function logout(){
	$this->load->model('Servicesmodel');
	redirect("index.php/welcome/services");




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
 $from_email = "sumilaifix@gmail.com";
 $to_email = 'sumilaifix@gmail.com';
 //Load email library
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
	 //$this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
 }
 else{
	 //$this->session->set_flashdata("email_sent","You have encountered an error");
 //$this->load->view('contact_email_form');
}
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
	 $from_email = "sumilaifix@gmail.com";
	 $to_email = 'sumilaifix@gmail.com';
	 //Load email library
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
		 //$this->session->set_flashdata("email_sent","Congragulation Email Send Successfully.");
	 }
	 else{
		 //$this->session->set_flashdata("email_sent","You have encountered an error");
	 //$this->load->view('contact_email_form');
	}
	echo "Your enquiry send successfully";
	}
	
}
