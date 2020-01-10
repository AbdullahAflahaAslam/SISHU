<?php 
/**
* 
*/
class Model_Auth extends CI_model
{
	function getAllCountry(){

			return $this->db->get('country');

	}
	//login USER PESERTADIDIK
	function login(){
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');

			//$pass = md5($this->input->post('pass'));

			$this->db->select('*');
			$this->db->from('user_privilege');
			$this->db->where('user_privilege.id_privilege', 1);
			$this->db->where('user.user', $user);
			$this->db->where('user.id_user = user_privilege.id_user');
			$data = $this->db->get('user')->row();
			if (!empty($data->pass)){
				if($pass == $this->encryption->decrypt($data->pass)){
					return 2;
				}
				else {
					return 0;
				}
			} 
			else {
				return 1;
			}

		}


		///ADMIN function Auth
		function login_admin(){

			$user = $this->input->post('user');
			$pass = $this->input->post('pass');

			//$pass = md5($this->input->post('pass'));

			$this->db->select('*');
			$this->db->from('user_privilege');
			$this->db->where('user_privilege.id_privilege', 3);
			$this->db->where('user.user', $user);
			$this->db->where('user.id_user = user_privilege.id_user');
			$data = $this->db->get('user')->row();
			if (!empty($data->pass)){
				if($pass == $this->encryption->decrypt($data->pass)){
					return 2;
				}
				else {
					return 0;
				}
			} 
			else {
				return 1;
			}
		}


		///PENGAJAR
		function login_pengajar(){
			$user = $this->input->post('user');
			$pass = $this->input->post('pass');

			//$pass = md5($this->input->post('pass'));

			$this->db->select('*');
			$this->db->from('user_privilege');
			$this->db->where('user_privilege.id_privilege', 2);
			$this->db->where('user.user', $user);
			$this->db->where('user.id_user = user_privilege.id_user');
			$data = $this->db->get('user')->row();
			if (!empty($data->pass)){
				if($pass == $this->encryption->decrypt($data->pass)){
					return 2;
				}
				else {
					return 0;
				}
			} 
			else {
				return 1;
			}
		}



		
		//cek user CekUser

		function CekUser(){

			$user =$this->input->post('user');

			$this->db->select('*');

			$this->db->where('user', $user);

			$data = $this->db->get('user')->row();

			//jika user digunakan

			if (!empty($data->user)){

				return 0;
				
			}
			///user kosong atau siap digunakan
			else {

				return 1;

			}

		}

		//create account
		function save($file_name,$id_kategori){
			$data = array(

				'FName' => $this->input->post('FName'),

				'no_ktp' => $this->input->post('no_ktp'),

				'email' => $this->input->post('email'),

				'AddLine' => $this->input->post('AddLine'),

				'city' => $this->input->post('city'),

				'province' => $this->input->post('province'),

				'country' => $this->input->post('country'),

				'poscode' => $this->input->post('poscode'),

				'id_kategori' => $id_kategori,

				'phone' => $this->input->post('phoneCode').$this->input->post('phone'),

				'file_photo' =>$file_name,

				'user' => $this->input->post('user'),

				'pass' => $this->encryption->encrypt($this->input->post('pass')));

			$this->db->insert('user', $data);
			return $this->db->insert_id();
		}



	
	/////get Data User 
	function getdataUser(){

			$pass = $this->input->post('pass');
			$user = $this->input->post('user');
			$this->db->select('*');
			$this->db->where('user', $user);
			$query = $this->db->get('user')->row();
			if (!empty($query->pass)) {
				if($pass == $this->encryption->decrypt($query->pass)){
					return $query;
				} else {
					return 0;
				}
			} else {
				return 0;
			}

		}	

		function sesId(){

			$pass = $this->input->post('pass');

			//$pass = md5($this->input->post('pass'));

			$user = strtoupper($this->input->post('user'));

			$this->db->select('*');

			$this->db->where('user', $user);

			$this->db->where('pass', $pass);

			$query = $this->db->get('user')->row();

			return $query->id_user;

		}


		function rule(){

			$pass = $this->input->post('pass'); 

			$user = strtoupper($this->input->post('user'));

			$this->db->select('*');

			$this->db->where('user', $user);

			$this->db->where('pass', $pass);

			$query = $this->db->get('user')->row();

			return $query->status;

		}

		//FUNTION RANDOM NUMBER
		function generatePass(){
			$num = "1234567890";
			$numLength=strlen($num);
			$password="";
			for ($i=0; $i<5;$i++){
				$password .=  $num[rand(0,$numLength - 1)];
			}
			return $password;
		}


		/////mengirim email
		function sendMail($email,$pesan){

			$config = Array(
				'protocol' => 'smtp',  
			    'smtp_host' => 'smtp.gmail.com', 
			    'smtp_crypto' => 'tls', 
			    'smtp_port' => 587,  
			    'smtp_user' => 'abdullah.aflaha.aslam@gmail.com',   
			    'smtp_pass' => 'aslam1234',   
			    'mailtype' => 'html',   
			    'charset' => 'utf8'
			);
			$this->load->library('email');  
			$this->email->initialize($config);
			$this->email->set_newline("\r\n");  
			$this->email->from('abdullah.aflaha.aslam@gmail.com', 'Admin SHU Baitullah Rubaiyat');   
			$this->email->to($email);   
			$this->email->subject('SISHU');   
			$this->email->message($pesan);  
			if (!$this->email->send()) {  
		    	show_error($this->email->print_debugger());   
			}else{  
			    /*echo '<script>alert ("Data Account has been sent email")</script>';*/
			}  

		}


	function forgetpass(){
			$key = $this->input->post('key');
			//$email = $this->input->post('email');
			$this->db->select('email');
			$this->db->select('user');
			$this->db->where('user', $key );
			$this->db->or_where('email', $key );
			$data = $this->db->get('user')->row();

			if (!empty($data->user)){
				if($key == $data->user){
					return 1;
				}
				elseif ($key == $data->email) {
					return 1;
				}
				else {
				return 0;
				}
			}
			else {
				return 0;
			}

		}
}	


?>