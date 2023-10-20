
<?php 
defined('BASEPATH') OR exit('No direct script access allowed'); 
class CustomError extends CI_Controller { 
    public function __construct() { 
        parent:: __construct(); 
        $this -> load -> helper('url'); 
    } 
  
    public function index() { 
       $this -> output -> set_status_header('404'); 
        //echo "hello";
       $this -> load -> view('pocket/errorpage.php'); 
    } 
}
