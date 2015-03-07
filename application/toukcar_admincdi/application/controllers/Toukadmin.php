
<?php //if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Toukadmin extends CI_Controller {
//session_start();	
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
	 * @see http://codeigniter.com/user_guide/general/urls.html
	 */
	public function __construct()
	{
		parent::__construct();
		//$this->load->model('Ajax_img','ai');
		//$this->load->library('session');
		//$this->load->helper('url');
		//$this->load->helper('string');
		//$this->load->library('pagination');
	}
	public function index()
	{		
		
		//$emailid=$this->session->userdata('emailid');
		//$data['emailid']=$emailid;
		//if($emailid == '')
		//{
		//$this->load->view('header');	
		//}else{
		//$this->load->view('headerlogin',$data);		
		//}
		$this->load->view('header');
		$this->load->view('index');
		
	}
	public function rides(){
		$this->load->view('header');
		$this->load->view('rides');
	}
	public function profile(){
		$this->load->view('header');
		$this->load->view('index');
	}
	public function show_img()
	{
		 $catid=$this->input->post('catid');
		
		//$id=$_POST['catid'];
		$sql1="select * from profile where id='$catid'";
		$res=mysql_query($sql1);
		while($row=mysql_fetch_array($res))
		{

			
			$govtimg=$row['govtprof_img'];
			$licenimg=$row['licen_img'];
			$rcbkimg=$row['rc1bk_img'];
			$carimg=$row['car_insu_img'];	  
		}
			
		echo'{"govtprof_img":"'.$govtimg.'","licen_img":"'.$licenimg.'","rc1bk_img":"'.$rcbkimg.'","car_insu_img":"'.$carimg.'","catid":"'.$catid.'"}';				
	}

	
public function status_submit(){
	
	$id=$this->input->post('catid');
	//print_r($_POST);
	//print_r($id);
	//exit();
	
	
	if($this->input->post('cat')=='govtproof'){
	$form_data = array(
	
	
	'govtproof_status' => "1"
              
              );
	
	$this->db->where('id',$id);
	$this->db->update('profile',$form_data);
	
	    }
	    if($_POST['cat']=='licenproof'){
		$form_data = array(
		       
		       
		       'licenimg_status' => "1"
		      
		      );
		$this->db->where('id',$id);
	$this->db->update('profile',$form_data);
		
		
	    }
	     if($_POST['cat']=='carproof'){
		
		$form_data = array(
		       
		       
		       'car_insu_status' => "1"
		      
		      );
		$this->db->where('id',$id);
	$this->db->update('profile',$form_data);
		
	    }
	     
	     if(($this->input->post('cat'))=='rcproof'){
		$form_data = array(
		       
		       
		       'rcbkimg_status' => "1"
		      
		      );
		$this->db->where('id',$id);
	$this->db->update('profile',$form_data);
		
	    }
	}
public function deactive_govtpf(){
	
	$id=$this->input->post('catid');
	//print_r($_POST);
	//print_r($id);
	//exit();
	
	
	if($this->input->post('cat')=='degovtproof'){
	$form_data = array(
	
	
	'govtproof_status' => "0"
              
              );
	
	$this->db->where('id',$id);
	$this->db->update('profile',$form_data);
	
	    }
	    
	if($this->input->post('cat')=='de_licen'){
	$form_data = array(
	
	
	'licenimg_status' => "0"
              
              );
	
	$this->db->where('id',$id);
	$this->db->update('profile',$form_data);
	
	    }
	    if($this->input->post('cat')=='de_carinsu'){
	$form_data = array(
	
	
	'car_insu_status' => "0"
              
              );
	
	$this->db->where('id',$id);
	$this->db->update('profile',$form_data);
	
	    }
	      if($this->input->post('cat')=='de_rcbook'){
	$form_data = array(
	
	
	'rcbkimg_status' => "0"
              
              );
	
	$this->db->where('id',$id);
	$this->db->update('profile',$form_data);
	
	    }
}
	
	
//	public function login()
//	{
//		
//		$result = $this->tcm->loginuser();
//		if(!$result){
//		redirect('welcome/sign_up');
//        }else{
//                $this->session->set_userdata('emailid', $this->input->post('email'));
//		redirect('welcome/dashboard');
//		
//		
//        } 
//	}
//	function logout()
//	{
//		$this->session->unset_userdata('emailid');
//		session_destroy();
//		redirect('welcome/index');
//	}
//	function find_ride()
//	{
//		$emailid=$this->session->userdata('emailid');
//		$data['emailid']=$emailid;
//		if($emailid == '')
//		{
//		$this->load->view('header');	
//		}else{
//		$this->load->view('headerlogin',$data);		
//		}
//		$this->load->view('find_ride');
//	}
//	function offer_ride()
//	{
//		$emailid=$this->session->userdata('emailid');
//		$data['emailid']=$emailid;
//		if($emailid == '')
//		{
//		$this->load->view('header');	
//		}else{
//		$this->load->view('headerlogin',$data);		
//		}
//		$this->load->view('offer_ride');
//	}
//	function search()
//	{
//		
//		
//		$emailid=$this->session->userdata('emailid');
//		$data['emailid']=$emailid;
//		if($emailid == '')
//		{
//		$this->load->view('header');	
//		}else{
//		$this->load->view('headerlogin',$data);		
//		}
//		$from=$this->input->post('fn');
//		$to=$this->input->post('tn');
//		$date=$this->input->post('date');
//		$time=$this->input->post('time');
//		if($from != '' && $to != '' )
//		{
//			$data['results']=$this->tcm->search_check($from,$to,$date,$time);
//			$this->load->view('search', $data);
//		}else{
//			$config = array();
//			$config["base_url"] = base_url() . "welcome/search";
//			$total_row = $this->tcm->record_count();
//			$config["total_rows"] = $total_row;
//			$config["per_page"] = 3;
//			$config["uri_segment"] = 3;
//			$config['use_page_numbers'] = TRUE;
//			$config['cur_tag_open'] = '&nbsp;<a class="current">';
//			$config['cur_tag_close'] = '</a>';
//			$config['next_link'] = 'Next';
//			$config['prev_link'] = 'Previous';
//			$this->pagination->initialize($config);
//			$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
//			$data["results"] = $this->tcm->fetch_data($config["per_page"], $page);
//			$data["str_links"] = $this->pagination->create_links();
//			$this->load->view('search',$data);
//		}
//	}
//	function dashboard()
//	{
//		$emailid=$this->session->userdata('emailid');
//		$data['emailid']=$emailid;
//		if($emailid == '')
//		{
//		$this->load->view('header');	
//		}else{
//		$this->load->view('headerlogin',$data);		
//		}
//		$this->load->view('dashboard');
//	}
//	function sign_up()
//	{
//		$this->load->view('sign_up');
//	}
//	function new_user_register()
//	{
//		$register=$this->tcm->user_register();
//		if(!$register)
//		{
//		$data['msg']= "mail error";
//		}else{
//		$data['msg']= "mail has been sent";	
//		}
//		redirect('welcome/dashboard');
//	}
//        function email_verify($verificationcode)
//	{
//	echo$sql = "update profile set status='1' WHERE uni_code='$verificationcode'";
//	$this->db->query($sql, array($verificationcode));
//	return $this->db->affected_rows();
//	redirect('welcome/dashboard');
//	}
	
}
?>
