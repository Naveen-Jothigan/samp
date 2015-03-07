<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class toukcar_model extends CI_Model {

	public function __construct()
	{
            parent::__construct();
		$this->load->library('session');
		
	}
       function loginuser()
	{
	$username = $this->security->xss_clean($this->input->post('email'));
	$password = $this->security->xss_clean($this->input->post('password'));
	$this->db->where('p_email', $username);
        $this->db->where('pswd', $password);
        $query = $this->db->get('profile');
        if($query->num_rows == 1)
        {
    	return $query->result();
	
	}
        return false;
        }
	
	function search_check($searchterm,$limit,$start)
	{
		$from=$searchterm['from'];
		$to=$searchterm['to'];
		$date=$searchterm['date'];
		$time=$searchterm['time'];
		$this->db->limit($limit,$start);
		$this->db->where('depature_text', $from);
		$this->db->where('destin_text', $to);
		if($date)
		{
		$this->db->where('start_date', $date);
		}
		if($time)
		{
		$this->db->where('start_time', $time);
		}
		$query=$this->db->get('rides');		
		$ret= $query->result();
		foreach ($ret as $row)
                {
                    $data[] = $row;
                }
		return $data;
        }
	public function record_count($searchterm)
	{
		$from=$searchterm['from'];
		$to=$searchterm['to'];
		$date=$searchterm['date'];
		$time=$searchterm['time'];
		$this->db->where('depature_text', $from);
		$this->db->where('destin_text', $to);
		if($date)
		{
		$this->db->where('start_date', $date);
		}
		if($time)
		{
		$this->db->where('start_time', $time);
		}
		return $this->db->count_all_results("rides");
		
	}
	public function searchterm_handler($from,$to,$date,$time)
	{
		$searchterm=array();
		$searchterm=array(
				  'from'=>$from,
				  'to'=>$to,
				  'date'=>$date,
				  'time'=>$time
				  );
		
		
		if($searchterm['from'] != '')
		{
		
		$this->session->set_userdata('searchterm', $searchterm);
		return $searchterm;
		}
		elseif($this->session->userdata('searchterm'))
		{
		$searchterm = $this->session->userdata('searchterm');
		return $searchterm;
		}
		else
		{
		$searchterm ="";
		return $searchterm;
		}
	}
	
	function user_register()
	{
		$verificationText=random_string('alnum',10);
		$email=$this->input->post('email');
		$this->db->where('p_email',$email);
		$query=$this->db->get('profile');
		if ($query->num_rows() > 0) {
		return false;
		}else{
		$data=array(
		'p_fname'=>$this->input->post('firstname'),
		'p_lname'=>$this->input->post('lastname'),
		'gender'=>$this->input->post('gender'),
		'p_email'=>$email,
		'pswd'=>$this->input->post('password'),
		'conf_pswd'=>$this->input->post('conform_password'),
		'birthyear'=>$this->input->post('dob'),
		'uni_code'=>$verificationText
		);
		$this->db->insert('profile',$data);
		$this->email_send($verificationText,$email);
		$this->db->where('p_email',$email);
		$query=$this->db->get('profile');
		return $query->result();
        
        }
	}
	function email_send($verificationText,$email)
	{
		$this->load->library('email');
		$this->email->initialize(array(
		'protocol' => 'smtp',
		'smtp_host' => 'ssl://smtp.googlemail.com',
		'smtp_port' => 465,
		'smtp_user' => 'ppkk927@gmail.com', 
		'smtp_pass' => '126198922', 
		'crlf' => "\r\n",
		'newline' => "\r\n"

        ));
	
        $this->email->from('TOUKTOUK.COM');
       	$this->email->to($email);
        $this->email->subject('test');
        $this->email->subject("Email Verification");
	$msg =$this->email->message("Dear User,\nPlease click on below URL or paste into your browser to verify your Email Address\n\n http://localhost/files/ci/welcome/email_verify/".$verificationText."\n"."\n\nThanks\nAdmin Team");
	$this->email->send();
        
	}
	
	function profile_data($data)
	{
		$this->db->where('id',$data);
		$query=$this->db->get('profile');
		
		if($query->num_rows() > 0)
		{
		foreach($query->result() as $row1)
		{
			$data1[]=$row1;
		}
		return $data1;
		}
		return false;
	}
	
	function publish($id)
	{
		$ride_data=array(
		'user_id'=>$id,
		'ride_type'=>$this->input->post('trip'),
		'depature_text'=>$this->input->post('start'),
		'destin_text'=>$this->input->post('end'),
		'start_date'=>$this->input->post('depature_date'),
		'start_time'=>$this->input->post('depature_time'),
		'return_date'=>$this->input->post('distict_date'),
		'return_time'=>$this->input->post('distict_time'),
		'pickup1_text'=>$this->input->post('point1'),
		'pickup2_text'=>$this->input->post('point2'),
		'pickup3_text'=>$this->input->post('point3'),
		'pickup4_text'=>$this->input->post('point4'),
		'depature_lat'=>$this->input->post('start_lat'),
		'depature_long'=>$this->input->post('start_lon'),
		'destin_lat'=>$this->input->post('end_lat'),
		'destin_long'=>$this->input->post('end_lon'),
		'pickup1_lat'=>$this->input->post('point1_lat'),
		'pickup1_long'=>$this->input->post('point1_lon'),
		'pickup2_lat'=>$this->input->post('point2_lat'),
		'pickup2_long'=>$this->input->post('point2_lon'),
		'pickup3_lat'=>$this->input->post('point3_lat'),
		'pickup3_long'=>$this->input->post('point3_lon'),
		'pickup4_lat'=>$this->input->post('point4_lat'),
		'pickup4_long'=>$this->input->post('point4_lon'),
		'price'=>$this->input->post('cost'),
		'no_seat'=>$this->input->post('seat'),
		'pref_music'=>$this->input->post('music'),
		'pref_ac'=>$this->input->post('ac'),
		'pref_lug'=>$this->input->post('luggages'),
		'pref_smoke'=>$this->input->post('smoke'),
		'pref_pet'=>$this->input->post('pets'),
		'ladies_only'=>$this->input->post('ladies_only')
		);
		$this->db->insert('rides',$ride_data);
		return true;
	}
	 function upload_images1($id,$path1)
	{
		$this->db->where('id',$id);
		$data=array(
		      'rc1bk_img'=>$path1
			      );
		$this->db->update('profile',$data);
		return true;
	}
	function upload_images2($id,$path2)
	{
		$this->db->where('id',$id);
		$data=array(
		      'licen_img'=>$path2
			      );
		$this->db->update('profile',$data);
		return true;
	}
	function upload_images3($id,$path3)
	{
		$this->db->where('id',$id);
		$data=array(
		      'car_insu_img'=>$path3
			      );
		$this->db->update('profile',$data);
		return true;
	}
	
	
}