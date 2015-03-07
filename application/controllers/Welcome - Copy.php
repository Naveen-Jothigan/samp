<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Welcome extends CI_Controller {
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
		$this->load->model('toukcar_model','tcm');
		$this->load->library('session');
		$this->load->helper('url');
		$this->load->helper('string');
		$this->load->library('pagination');
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
		$this->load->view('index',$data);
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
		
		$config = array();
			$config["base_url"] = base_url() . "welcome/search";
			$total_row = $this->tcm->record_count($from,$to,$date,$time);
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
			$data["results"] = $this->tcm->search_check($from,$to,$date,$time,$config["per_page"], $page);
			$data["str_links"] = $this->pagination->create_links();
			$this->load->view('search', $data);
		//if($from != '' && $to != '' )
		//{
		//	$data['results']=$this->tcm->search_check($from,$to,$date,$time);
		//	$this->load->view('search', $data);
		//}else{
		//	
		//	$this->load->view('search',$data);
		//}
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
		$this->load->view('profile');
	}
	function publish_offer($id)
	{
		$publish=$this->tcm->publish($id);
		if($publish)
		{
			redirect('welcome/profile');
		}
	}
	
}
?>