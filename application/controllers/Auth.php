<?php

/**
* 
*/
class Auth extends CI_Controller
{  
	
	function __construct()
	{
		parent::__construct();

		$this->load->model('Model_auth');
		$this->load->model('Model_jadwal');
		$this->load->model('Model_User');
		$this->load->model('Model_Kelas');

	}
 

	function login(){
		
		if(isset($_SESSION['status'])){
			if ($_SESSION['status'] == 1 || $_SESSION['status'] == 2) {
				redirect('User');
			}else{
				redirect('Admin');
			}
			
		}else{
			if(isset($_POST['login'])){
				if($this->input->post('role') == 1){
					//user login
					if($this->Model_auth->login()==2){
						$this->session->login_status = 'true';
						$_SESSION['nama'] = $this->Model_auth->getdataUser()->FName;
						$_SESSION['sesId'] = $this->Model_auth->getdataUser()->id_user;
						$_SESSION['status'] = 1;
						$_SESSION['photo'] = $this->Model_auth->getdataUser()->file_photo;
						redirect(base_url().'user');				
					}
					elseif ($this->Model_auth->login()==1) {
						echo "
						<script>
							alert('User anda tidak terdaftar');
							window.location.href='".base_url()."#login';
						</script>";
			   			//$this->load->view('auth/form_login');
					}
					else{
						echo "
						<script>
							alert('Password yang anda masukan salah');
							window.location.href='".base_url()."#login';
						</script>";
					}
				}else if ($this->input->post('role') == 2) {

					//pengajar login
					if($this->Model_auth->login_pengajar()==2){
						$this->session->login_status = 'true';
						$_SESSION['nama'] = $this->Model_auth->getdataUser()->FName;
						$_SESSION['sesId'] = $this->Model_auth->getdataUser()->id_user;
						$_SESSION['status'] = 2;
						$_SESSION['photo'] = $this->Model_auth->getdataUser()->file_photo;
						redirect(base_url().'user');					
					}
					elseif ($this->Model_auth->login()==1) {
						echo "
						<script>
							alert('User anda tidak terdaftar');
							window.location.href='".base_url()."#login';
						</script>";
					}
					else{
						echo "
						<script>
							alert('Password yang anda masukan salah');
							window.location.href='".base_url()."#login';
						</script>";
			   			
					}
				}else if($this->input->post('role') == 3){

					//admin
					if($this->Model_auth->login_admin()==2){
						$this->session->login_status = 'adminSI';
						$_SESSION['nama'] = $this->Model_auth->getdataUser()->FName;
						$_SESSION['sesId'] = $this->Model_auth->getdataUser()->id_user;
						$_SESSION['status'] = 3;
						$_SESSION['photo'] = $this->Model_auth->getdataUser()->file_photo;
						redirect(base_url().'admin');
					}
					elseif ($this->Model_auth->login_admin()==1) {
						echo "
						<script>
							alert('User anda tidak terdaftar');
							window.location.href='".base_url()."#login';
						</script>";
					}
					else{
						echo "
						<script>
							alert('Password yang anda masukan salah');
							window.location.href='".base_url()."#login';
						</script>";
						
					}
				}
				else{
					echo "
						<script>
							alert('User anda tidak terdaftar');
							window.location.href='".base_url()."#login';
						</script>";
				}
			}
		else{
			redirect('User/home');
			}
		}
	}




	function logout(){

			/*//$this->load->view('form_login');
			if($_SESSION['status']==3){
				$this->session->sess_destroy();
				$this->load->view('admin/form_login');
			}else{
				$this->session->sess_destroy();
				redirect('Auth/login');
			}*/
			$this->session->sess_destroy();
			redirect('Auth/login');	

		}

	function signup(){
		if (isset($_POST['add'])) {

				if(($_POST['pass']==$_POST['repass'])){

					//username  already use

					if($this->Model_auth->CekUser()==0){

						echo "
						<script>
							alert('Username sudah digunakan');
							window.location.href='".base_url()."/Auth/signup';
						</script>";

					}
					///creat account
					elseif ($this->Model_auth->CekUser()==1){

						//upload
						$new_name = "PhotoProfile_".$_POST['user']."_".$_POST['FName'];
						$config['upload_path']          = './file/PhotoProfile/';
						$config['allowed_types']        = 'jpg|jpeg|png';
						$config['max_size']             = 5000;
						$config['file_name']			= $new_name;
						$config['overwrite']			= true;
						$fileName = $config['file_name'];
						$this->load->library('upload', $config);

						///jika upload gagal
						if ( ! $this->upload->do_upload('file_photo')) {

							$param = "";
							$id_kategori =  $this->Model_Kelas->getTopKelas();
							$id_user = $this->Model_auth->save($param,$id_kategori);
							$id_privilege = 1;
		       				$this->Model_User->save_privilege($id_privilege, $id_user);
							echo "
								<script>
									alert('Success Created');
									window.location.href='".base_url()."';
								</script>";

						}
						//jika berhasil
						else{ 

							$data['status'] = $this->upload->display_errors();
							$param = $config['file_name'].$this->upload->data('file_ext');
							$id_user = $this->Model_auth->save($param);
							$id_privilege = 1;
		       				$this->Model_User->save_privilege($id_privilege, $id_user);
							echo "
								<script>
									alert('Success Created');
									window.location.href='".base_url()."';
								</script>";

						}
					}


				}

				else{
					echo "
						<script>
							alert('Password yang anda masukan tidak sama');
							window.location.href='".base_url()."/Auth/signup';
						</script>";
				}

				

		} else {


				//$this->template->load('template','signup',$data);
				$data['status'] = "";
				$data['country']=$this->Model_auth->getAllCountry()->result();
				$this->load->view('auth/form_signup',$data);



		}

	}
	

	function RememberPass(){
		if(isset($_POST['submit'])){
			if($this->Model_auth->forgetpass()==1){
				$key =  $this->input->post('key');
				$data['user']= $this->Model_User->getUserByKey($key);
				//$pass = $this->model_auth->getPass();
				$email = $this->Model_User->getUserByKey($key)->row()->email;
				$pesan =  $this->load->view('auth/Password_Reminder',$data,true);
				//print_r($pesan );
				$this->Model_auth->sendMail($email,$pesan);
				echo "
					<script>
						window.location.href='".base_url()."#login';
					</script>";
			}
			else{
				echo "
					<script>
						alert('User atau Email anda tidak terdaftar');
						window.location.href='".base_url()."#login';
					</script>";
		   		
			}
		}
		else{
			echo "
				<script>
					window.location.href='".base_url()."#login';
				</script>";
		}
	}



}


?>