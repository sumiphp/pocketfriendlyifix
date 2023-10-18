<?php class Servicesmodel extends CI_Model {

        /*public $title;
        public $content;
        public $date;

        public function get_last_ten_entries()
        {
                $query = $this->db->get('entries', 10);
                return $query->result();
        }

        public function insert_entry()
        {
                $this->title    = $_POST['title']; // please read the below note
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->insert('entries', $this);
        }

        public function update_entry()
        {
                $this->title    = $_POST['title'];
                $this->content  = $_POST['content'];
                $this->date     = time();

                $this->db->update('entries', $this, array('id' => $_POST['id']));
        }*/

public function get_user($username,$password){


    $this->db->where('username',$username);
    $this->db->where('password',$password);
    $this->db->select('*');
    $this->db->from('login');

    //$this->db->order_by('donor_id','desc');

    $query=$this->db->get();
    


//echo $this->db->last_query();
    if ($query->num_rows() > 0){
        return 1;
    }
    else{
        return 0;
    }
}


function get_count(){

    $this->db->select('*');
    $this->db->from('category');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();

}

function get_categories($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('category');
    $query = $this->db->get();
    return $query->result_array();
}


function get_categoriesall(){
    $this->db->select('*');
    $this->db->from('category');
    $query = $this->db->get();
    return $query->result_array();
}


function get_subcategoriesall(){
    $this->db->select('*');
    $this->db->from('subcategory');
    $query = $this->db->get();
    return $query->result_array();
}


function get_servicesall(){
    $this->db->select('*');
    $this->db->from('services');
    $query = $this->db->get();
    return $query->row();

}

function get_aboutus(){
    $this->db->select('*');
    $this->db->from('aboutus');
    $query = $this->db->get();
    return $query->row();
}

function get_subcategories($limit,$start){
$this->db->limit($limit,$start);
$this->db->select('*');
$this->db->from('subcategory');
$query = $this->db->get();
return $query->result_array(); 
}

function get_countsub(){
    $this->db->select('*');
    $this->db->from('subcategory');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();
}


function get_enquiries($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('enquiries');
    $query = $this->db->get();
    return $query->result_array(); 
}

function get_countenquiries(){
    $this->db->select('*');
    $this->db->from('enquiries');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();
}


function get_contactenquiries($limit,$start){
$this->db->limit($limit,$start);
$this->db->select('*');
$this->db->from('contactenquiries');
$query = $this->db->get();
return $query->result_array(); 
}

function get_countcontactenquiries(){
    $this->db->select('*');
    $this->db->from('contactenquiries');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();
}


function get_services($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('services');
    $query = $this->db->get();
    return $query->result_array();


}

function get_countservices(){
    $this->db->select('*');
    $this->db->from('services');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();
}

function get_aboutusadmin(){
    //$this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('aboutus');
    $query = $this->db->get();
    return $query->result_array();


}

function get_blog(){
    $this->db->select('*');
    $this->db->from('blog');
    $query = $this->db->get();
    return $query->row();
    
}

function get_blogcontents(){
    $this->db->select('*');
    $this->db->from('blogcontents');
    $query = $this->db->get();
    return $query->result_array();

}

function get_blogcontentstop(){

    $this->db->where('toparticle',1);
    $this->db->select('*');
    $this->db->from('blogcontents');
    $query = $this->db->get();
    return $query->row();


}

function get_faq(){
    $this->db->select('*');
    $this->db->from('faq');
    $query = $this->db->get();
    return $query->result_array();


}

function get_testimonial(){
    $this->db->select('*');
    $this->db->from('testimonials');
    $query = $this->db->get();
    return $query->result_array();
}


function get_contactus(){
    
    $this->db->select('*');
    $this->db->from('contactus');
    $query = $this->db->get();
    return $query->row();


}

function get_newsletter(){
    $this->db->select('*');
    $this->db->from('newsletter');
    $query = $this->db->get();
    return $query->row();

}
function get_contactusrow(){
    $this->db->select('*');
    $this->db->from('contactus');
    $query = $this->db->get();
    return $query->row();
}

function get_countfaq(){
    $this->db->select('*');
    $this->db->from('faq');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();

}


function get_faqadmin($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('faq');
    $query = $this->db->get();
    return $query->result_array(); 
    }

    function get_countblog(){
        $this->db->select('*');
        $this->db->from('blogcontents');
        $query = $this->db->get();
        return $rowcount = $query->num_rows();


    }
    function get_counttestimonials(){
        $this->db->select('*');
        $this->db->from('testimonials');
        $query = $this->db->get();
        return $rowcount = $query->num_rows();


    }

    function get_testimonialsadmin($limit,$start){
        $this->db->limit($limit,$start);
        $this->db->select('*');
        $this->db->from('testimonials');
        $query = $this->db->get();
        return $query->result_array(); 
        }
    function get_blogadmin($limit,$start){
        $this->db->limit($limit,$start);
        $this->db->select('*');
        $this->db->from('blogcontents');
        $query = $this->db->get();
        return $query->result_array(); 
        }

function get_servicedetals($serid){
    //$this->db->limit($limit,$start);
    $this->db->where('categoryid',$serid);
    $this->db->select('*');
    $this->db->from('subcategory');
    $query = $this->db->get();
    //echo $this->db->last_query();
    return $query->result_array(); 


}

function get_featureupdate(){
    //$this->db->where('categoryid',$serid);
    $this->db->select('*');
    $this->db->from('featureupdate');
    $query = $this->db->get();
    //echo $this->db->last_query();
    return $query->result_array();

}


function get_blogpagedetails(){
    $this->db->select('*');
    $this->db->from('blog');
    $query = $this->db->get();
    return $query->result_array();


}

function get_newsletterall(){
    $this->db->select('*');
    $this->db->from('newsletter');
    $query = $this->db->get();
    return $query->result_array();


}


function get_countnewslettersubscribers(){
    $this->db->select('*');
    $this->db->from('blogcontents');
    $query = $this->db->get();
    return $rowcount = $query->num_rows();


}

function get_newslettersubscribersall($limit,$start){
    $this->db->limit($limit,$start);
    $this->db->select('*');
    $this->db->from('newslettersubscribe');
    $query = $this->db->get();
    return $query->result_array();

}


function get_lowestpackage($serid){
   
    $this->db->select('*');                
    $this->db->order_by('price');
    $this->db->limit(1);
    $query = $this->db->get('subcategory');
   
 return $query->row();

}
function get_problems(){
    $this->db->select('*');
    $this->db->from('problems');
    $query = $this->db->get();
    return $query->result_array();

}


}
?>