<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('toukcar_model','tcm');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->library('pagination');
		error_reporting(E_ALL ^ (E_NOTICE | E_WARNING));
		
	}
	
	public function index()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header');	
		}else{
		$this->load->view('headerlogin',$data);		
		}
		$this->load->view('index');
	}
	
	public function login()
	{
		
		$result = $this->tcm->loginuser();
		if(!$result){
		redirect('welcome/sign_up');
        }else{
                $session_data=array();
		foreach($result as $row1)
		{
			$session_data=array(
			'id'=>$row1->id,
			'name'=>$row1->p_fname,
			'email'=>$row1->p_email
			);
		}
		
		$this->session->set_userdata('logged_in', $session_data);
		redirect('welcome/profile');
		
		
        } 
	}
	function logout()
	{
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('welcome/index');
	}
	function find_ride()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header');	
		}else{
		$this->load->view('headerlogin',$data);		
		}
		$this->load->view('find_ride');
	}
	function offer_ride()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header');	
		}else{
		$this->load->view('headerlogin',$data);		
		}
		$this->load->view('offer_ride');
	}
	function search()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header');	
		}else{
		$this->load->view('headerlogin',$data);		
		}
		$from=$this->input->post('fn');
		$to=$this->input->post('tn');
		$date=$this->input->post('date');
		$time=$this->input->post('time');
		$searchterm = $this->tcm->searchterm_handler($from,$to,$date,$time);
		
		$config = array();
		$config["base_url"] = base_url() . "welcome/search";
		$total_row = $this->tcm->record_count($searchterm);
		$config["total_rows"] = $total_row;
		$config["per_page"] = 1;
		$config["uri_segment"] = 3;
		$config['use_page_numbers'] = TRUE;
		$config['cur_tag_open'] = '&nbsp;<a class="current">';
		$config['cur_tag_close'] = '</a>';
		$config['next_link'] = 'Next';
		$config['prev_link'] = 'Previous';
		$this->pagination->initialize($config);
		$page = ($this->uri->segment(3)) ? $this->uri->segment(3) : 0;
		$data["results"] = $this->tcm->search_check($searchterm,$config["per_page"], $page);
		$data["str_links"] = $this->pagination->create_links();
		
		$this->load->view('search', $data);
		
	}
	function dashboard()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header');	
		}else{
		$this->load->view('headerlogin',$data);		
		}
		$data1['results']=$this->tcm->profile_data($data['id']);
		$this->load->view('dashboard',$data1);
	}
	function sign_up()
	{
		$this->load->view('sign_up');
	}
	function new_user_register()
	{
		$register=$this->tcm->user_register();
		if(!$register)
		{
		$data['msg']= "E-mail already exit try login";
		$this->load->view('sign_up',$data);
		}else{
		$session_data=array();
		foreach($register as $row1)
		{
			$session_data=array(
			'id'=>$row1->id,
			'name'=>$row1->p_fname,
			'email'=>$row1->p_email
			);
		}
		$this->session->set_userdata('logged_in', $session_data);
		redirect('welcome/profile');
		}
		
	}
        function email_verify($verificationcode)
	{
		echo$sql = "update profile set status='1' WHERE uni_code='$verificationcode'";
		$this->db->query($sql, array($verificationcode));
		$this->db->affected_rows();
		redirect('welcome/dashboard');
	}
	 function profile()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header'); 
		}else{
		$this->load->view('headerlogin',$data);  
		}
		$data1['results']=$this->tcm->profile_data($data['id']);
		$this->load->view('profile',$data1);
	}	
	function picture()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header'); 
		}else{
		$this->load->view('headerlogin',$data);  
		}
		$this->load->view('picture');
	}	
 
	function preferences()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header'); 
		}else{
		$this->load->view('headerlogin',$data);  
		}
		$this->load->view('preferences');
	}
 
	function update($id)
	{
		$this->db->where('id',$id);
		$data= array(
		'p_fname'=>$this->input->post('fname'),
		'p_lname'=>$this->input->post('lname'),
		'p_email'=>$this->input->post('email'),
		'mobile'=>$this->input->post('phone'),
		'birthyear'=>$this->input->post('dob'),
		'comments'=>$this->input->post('comment'),
		'govtprof_img'=>$this->input->post('govt_prof'),
		);
		$this->db->update('profile',$data);
		redirect("welcome/profile");
	}
 
	function update_address($id)
	{
		$this->db->where('id',$id);
		$data= array(
		'address_line1'=>$this->input->post('address_line1'),
		'address_line2'=>$this->input->post('address_line2'),
		'pincode'=>$this->input->post('postcode'),
		'city'=>$this->input->post('city'),
		'state'=>$this->input->post('state'),
		'country'=>$this->input->post('country'),
		);
		$this->db->update('profile',$data);
		redirect("welcome/profile");
	}
 
	function car()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header'); 
		}else{
		$this->load->view('headerlogin',$data);  
		}
		$this->load->view('car');
	}

	function add()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header'); 
		}else{
		$this->load->view('headerlogin',$data);  
		}
		$this->load->view('add');
		}	
	function address()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header'); 
		}else{
		$this->load->view('headerlogin',$data);  
		}
		$data1['results']=$this->tcm->profile_data($data['id']);
		$this->load->view('address',$data1);
	}	
 
	function notification()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header'); 
		}else{
		$this->load->view('headerlogin',$data);  
		}
		$this->load->view('notification');
	}	
	function verifications()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header'); 
		}else{
		$this->load->view('headerlogin',$data);  
		}
		$this->load->view('verifications');
	}	
 
	function remove()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header'); 
		}else{
		$this->load->view('headerlogin',$data);  
		}
		$this->load->view('remove');
	}	
 
	function password()
	{
		$sess_data=$this->session->userdata('logged_in');
		$data['id']=$sess_data['id'];
		$data['name']=$sess_data['name'];
		$data['email']=$sess_data['email'];
		if(!$sess_data)
		{
		$this->load->view('header'); 
		}else{
		$this->load->view('headerlogin',$data);  
		}
		$this->load->view('password');
	}	
	function change_password($id)
	{
		$password=$this->input->post('current_password');
		$this->db->where('id',$id);
		$this->db->where('pswd',$password);
		$this->db->get('profile');
		$data= array(
		'pswd'=>$this->input->post('new_password'),
		'conf_pswd'=>$this->input->post('conform_password'),
		);
		$this->db->update('profile',$data);
		redirect("welcome/profile");
	}
	function publish_offer($id)
	{
		$result=$this->tcm->publish($id);
		if($result)
		{
			redirect("welcome/profile");
		}
	}
	function upload_it($id)
	{
		$this->load->helper('form');
		$config['upload_path'] = 'application/views/';
		$config['allowed_types'] = 'gif|jpg|png';
		$this->load->library('upload', $config);
		$this->upload->initialize($config);
		$this->upload->set_allowed_types('*');
		$data['upload_data'] = '';
		if($this->upload->do_upload('image1'));
		{
		$data = $this->upload->data();
		$path1=$data['full_path'];
		$this->tcm->upload_images1($id,$path1);
		}
		if($this->upload->do_upload('image2'));
		{
		$data = $this->upload->data();
		$path2=$data['full_path'];
		$this->tcm->upload_images2($id,$path2);
		}
		if($this->upload->do_upload('image3'));
		{
		$data = $this->upload->data();
		$path3=$data['full_path'];
		$this->tcm->upload_images3($id,$path3);
		}
		$this->load->view('add', $data);
		redirect('welcome/add');
	}	
	
	
}
?>