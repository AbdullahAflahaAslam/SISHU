<?php 

/**
* 
*/
class User extends CI_Controller
{ 
	 
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_jadwal');
		$this->load->model('Model_materi');
		$this->load->model('Model_lokasi');
		$this->load->model('Model_User');
		$this->load->model('Model_Pengajar');
		$this->load->model('Model_Kelas');
	}


	function index(){
		ceklogin();
		$id = $_SESSION['sesId'];
		$data['jadwal']= $this->Model_jadwal->getAll()->result();
		$data['notifikasi']=$this->Model_User->getNotif()->result();
		$data['log']=$this->Model_User->getLog($id)->result();
		$this->template->load('Template','user/Show_Person',$data);
	}


	///menu menu tambahan
	function home(){
		$data['jadwal']= $this->Model_jadwal->getAll()->result();
		$data['notifikasi']=$this->Model_User->getNotif()->result();
		$data['ketegori'] = $this->Model_materi->getKategori()->result();
		$data['materi'] = $this->Model_materi->getAll()->result();
		$this->load->view('home',$data);
	}

	function Event(){
		$data['now'] = date('Y-m-d');
		$data['jadwal']= $this->Model_jadwal->getAll()->result();
		$data['notifikasi']=$this->Model_User->getNotif()->result();
		$this->load->view('event',$data);
	}
	function Materi_Umum(){
		$data['ketegori'] = $this->Model_materi->getKategori()->result();
		$data['materi'] = $this->Model_materi->getAll()->result();
		$this->load->view('materi',$data);
	}

	function ChangePhoto(){
		$id = $_SESSION['sesId'];
		if (isset($_POST['Simpan'])) {
			//create direktori
			if (!is_dir('./file/'.$id)) {
	    		mkdir('./file/' . $id, 0777, TRUE);
			}
			$new_name = $_SESSION['sesId']."_PhotoProfile";
			$config['upload_path']          = './file/'.$id.'/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 5000;
			$config['file_name']			= $new_name;
			$config['overwrite']			= true;
			$fileName = $config['file_name'];

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('PhotoProfile')) {
				$data['status'] = $this->upload->display_errors();
				$data['user']= $this->Model_User->getDataBy($id)->result();
				$this->template->load('Template','user/ChangePhoto',$data);
			}else{
				$file_photo = $config['file_name'].$this->upload->data('file_ext');
				$this->Model_User->update_photo($file_photo);
				$pesan="Merubah Foto Profil";
				$this->Model_User->InputLog($id,$pesan);
				echo "
					<script>
						alert('Foto Profile berhasil diperbaharui');
						window.location.href='".base_url()."User/Profile/';
					</script>";
			}
		}else{
			$data['status'] = "";
			$data['user']= $this->Model_User->getDataBy($id)->result();
			$this->template->load('Template','user/ChangePhoto',$data);
		}
		
		
	}
	/*function upload_image(){
		if(isset($_FILE["image_file"]["name"])){
			$config['upload_path'] = './file/PhotoProfile/';
			$config['allowed_types'] = 'jpg|png|jpeg';
			$this->load->library('upload',$config);
			if(!$this->upload->do_upload('image_file')){
				echo $this->upload->display_errors();
			}else{
				$data = $this->upload->data();
				echo '<img scr="'.base_url().'file/PhotoProfile/'.$data["file_name"].'"/>';
			}
		}
	}*/

	//konfigurasi data diri
	function Profile(){
		ceklogin(); 
		$id = $_SESSION['sesId'];

		if (isset($_POST['save'])) {

			//cek apakah password sesuai dengan pasword bawaan
			if( $this->input->post('pass_lama') == $this->input->post('pass')){
				$id=$_SESSION['sesId'];
				$this->Model_User->update_profile();
				$pesan="Merubah Data Profil";
				$this->Model_User->InputLog($id,$pesan);
				echo "
					<script>
						alert('Data berhasil diperbaharui');
						window.location.href='".base_url()."user/Profile/';
					</script>";
				//k/ct(base_url()."User/Profile");
			}else{

				///jika password tidak sesuai
				echo '<script>alert ("Password yang anda masukan salah")</script>';
				$data['kelas'] = $this->Model_Kelas->getAll()->result();
				$data['materi']= $this->Model_jadwal->getKonfirmasiByIdUser($id)->result();
				$data['jumlah']= $this->Model_jadwal->getKonfirmasiByIdUser($id)->num_rows();
				$data['lastmateri'] = $this->Model_User->getLastMateri($id)->result();
				$data['user']= $this->Model_User->getDataBy($id);
				$this->template->load('Template','user/Profile',$data);
			}
		} else{ 

				$id = $_SESSION['sesId'];
				$data['kelas'] = $this->Model_Kelas->getAll()->result();
				$data['materi']= $this->Model_jadwal->getKonfirmasiByIdUser($id)->result();
				$data['jumlah']= $this->Model_jadwal->getKonfirmasiByIdUser($id)->num_rows();
				$data['lastmateri'] = $this->Model_User->getLastMateri($id)->result();
				
				if ($this->Model_User->getDataBy($id)->result() != null) {
					$data['user']= $this->Model_User->getDataBy($id);	
				}else{
					//jika user baru dan belum pilih kategori
					$data['user']= $this->Model_User->getDataBy2($id);
				}

				//$data['top']= $this->Model_materi->getTopKategori();
				
				///var_dump($data['top']);

				$this->template->load('Template','user/Profile',$data);

		}
 
	}
	
	function ChangeKelas(){
		ceklogin(); 
		$id = $_SESSION['sesId'];

		if (isset($_POST['Save'])) {
			$this->Model_User->update_kelas();
			//input log
			$pesan="Merubah Data Profil";
			$this->Model_User->InputLog($id,$pesan);
			echo "
				<script>
					alert('Data berhasil diperbaharui');
					window.location.href='".base_url()."user/Profile/';
				</script>";
		} else{

				$id = $_SESSION['sesId'];
				$data['ketegori'] = $this->Model_materi->getKategori()->result();
				$data['materi']= $this->Model_jadwal->getKonfirmasiByIdUser($id)->result();
				$data['jumlah']= $this->Model_jadwal->getKonfirmasiByIdUser($id)->num_rows();
				$data['lastmateri'] = $this->Model_User->getLastMateri($id)->result();
				$data['user']= $this->Model_User->getDataBy($id);
				$this->template->load('Template','user/Profile',$data);

		}
	}

	function Setting(){
		ceklogin();
		$id = $_SESSION['sesId'];
		$id = $_SESSION['sesId'];
		if(isset($_POST['simpan_profile'])){
			if ($this->Model_User->cekUsername() == 1) {
				$password = $this->encryption->decrypt($this->input->post('pass'));
				if ($this->input->post('passwordAcc') == $password ) {
					//update  username
					$this->Model_User->SettingAccount();

					//save log
					$pesan="Merubah Data Akun";
					$this->Model_User->InputLog($id,$pesan);
					echo "
					<script>
						alert('Data Account berhasil dirubah');
						window.location.href='".base_url()."User/Setting/';
					</script>";
				}else{
					echo "
					<script>
						alert('Password yang anda masukan salah');
						window.location.href='".base_url()."User/Setting/';
					</script>";
				}
			}else{
				echo "
					<script>
						alert('Username sudah digunakan');
						window.location.href='".base_url()."User/Setting/';
					</script>";
			}
			
		}else if (isset($_POST['simpan_pass'])) {
			if ($this->input->post('new_password') == $this->input->post('new_password2') ) {
				$password = $this->encryption->decrypt($this->input->post('pass'));
				if ($this->input->post('password') == $password ) {
					//update password
					$this->Model_User->SettingPass();

					//log
					$pesan="Merubah Password";
					$this->Model_User->InputLog($id,$pesan);
					echo "
					<script>
						alert('Password berhasil dirubah');
						window.location.href='".base_url()."User/Setting/';
					</script>";
				}else{
					echo "
					<script>
						alert('Password yang anda masukan salah');
						window.location.href='".base_url()."User/Setting/';
					</script>";
					
				}
			}else{
				echo "
					<script>
						alert('Konfirmasi Password Tidak Sesuai');
						window.location.href='".base_url()."User/Setting/';
					</script>";
			}
			
		}
		else{
			$data['user']=  $this->Model_User->getDataBy($id)->result();
			$this->template->load('Template','User/Setting',$data);
		}
		
	}

	//Activity Log
	function Log(){
		$id = $_SESSION['sesId'];
		$data['log']= $this->Model_User->getAllLog($id)->result();
		$this->template->load('Template','user/Log',$data);
	}

	//Kelengkapan Haji
	function Kelengkapan(){ 
		ceklogin();
		$id = $_SESSION['sesId'];
		if (isset($_POST['upload_ktp'])) {
			//create direktori
			if (!is_dir('./file/'.$id)) {
	    		mkdir('./file/' . $id, 0777, TRUE);
			}

			//file KTP
			$ktp = $_SESSION['sesId']."_file_ktp";
			$config['upload_path']          = './file/'.$id.'/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 5000;
			$config['file_name']			= $ktp;
			$config['overwrite']			= true;
			//$file_ktp = $config['file_name'];

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('file_ktp')) {
				$data['status'] = $this->upload->display_errors();
				$data['user']= $this->Model_User->getDataBy($id)->result();
				$this->template->load('Template','user/Kelengkapan',$data);
			}else{
				//save data in user tabel
				$file_ktp = $config['file_name'].$this->upload->data('file_ext');
				$this->Model_User->update_ktp($file_ktp);

				$data['status'] = "File KTP Uploaded";
				$data['user']= $this->Model_User->getDataBy($id)->result();
				$this->template->load('Template','user/Kelengkapan',$data);
			}

		}//scan kk
		else if (isset($_POST['upload_kk'])) {
			//create direktori
			if (!is_dir('./file/'.$id)) {
	    		mkdir('./file/' . $id, 0777, TRUE);
			}

			//file KK
			$kk = $_SESSION['sesId']."_file_kk";
			$config['upload_path']          = './file/'.$id.'/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 5000;
			$config['file_name']			= $kk;
			$config['overwrite']			= true;
			

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('file_kk')) {
				$data['status'] = $this->upload->display_errors();
				$data['user']= $this->Model_User->getDataBy($id)->result();
				$this->template->load('Template','user/Kelengkapan',$data);
			}else{
				//save data in user tabel
				$file_kk = $config['file_name'].$this->upload->data('file_ext');
				$this->Model_User->update_kk($file_kk);

				$data['status'] = "File KK Uploaded";
				$data['user']= $this->Model_User->getDataBy($id)->result();
				$this->template->load('Template','user/Kelengkapan',$data);
			}

		}//buku nikah
		else if (isset($_POST['upload_buku_nikah'])) {
			//create direktori
			if (!is_dir('./file/'.$id)) {
	    		mkdir('./file/' . $id, 0777, TRUE);
			}

			//file upload_buku_nikah
			$buku_nikah = $_SESSION['sesId']."_file_buku_nikah";
			$config['upload_path']          = './file/'.$id.'/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 5000;
			$config['file_name']			= $buku_nikah;
			$config['overwrite']			= true;
			
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('file_buku_nikah')) {
				$data['status'] = $this->upload->display_errors();
				$data['user']= $this->Model_User->getDataBy($id)->result();
				$this->template->load('Template','user/Kelengkapan',$data);
			}else{
				//save data in user tabel
				$file_buku_nikah = $config['file_name'].$this->upload->data('file_ext');
				$this->Model_User->update_buku_nikah($file_buku_nikah);

				$data['status'] = "File Buku Nikah Uploaded";
				$data['user']= $this->Model_User->getDataBy($id)->result();
				$this->template->load('Template','user/Kelengkapan',$data);
			}

		}//miningitis
		else if (isset($_POST['upload_miningitis'])) {
			//create direktori
			if (!is_dir('./file/'.$id)) {
	    		mkdir('./file/' . $id, 0777, TRUE);
			}

			//file upload_buku_nikah
			$miningitis = $_SESSION['sesId']."_file_miningitis";
			$config['upload_path']          = './file/'.$id.'/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 5000;
			$config['file_name']			= $miningitis;
			$config['overwrite']			= true;
			
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('file_miningitis')) {
				$data['status'] = $this->upload->display_errors();
				$data['user']= $this->Model_User->getDataBy($id)->result();
				$this->template->load('Template','user/Kelengkapan',$data);
			}else{
				//save data in user tabel
				$file_miningitis = $config['file_name'].$this->upload->data('file_ext');
				$this->Model_User->update_miningitis($file_miningitis);

				$data['status'] = "File Uploaded";
				$data['user']= $this->Model_User->getDataBy($id)->result();
				$this->template->load('Template','user/Kelengkapan',$data);
			}

		}// surat ijin umrah
		else if (isset($_POST['upload_surat_ijin'])) {
			//create direktori
			if (!is_dir('./file/'.$id)) {
	    		mkdir('./file/' . $id, 0777, TRUE);
			}

			//file upload_buku_nikah
			$surat_ijin = $_SESSION['sesId']."_file_surat_ijin";
			$config['upload_path']          = './file/'.$id.'/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 5000;
			$config['file_name']			= $surat_ijin;
			$config['overwrite']			= true;
			
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('file_surat_ijin')) {
				$data['status'] = $this->upload->display_errors();
				$data['user']= $this->Model_User->getDataBy($id)->result();
				$this->template->load('Template','user/Kelengkapan',$data);
			}else{
				//save data in user tabel
				$file_surat_ijin = $config['file_name'].$this->upload->data('file_ext');
				$this->Model_User->update_surat_ijin($file_surat_ijin);

				$data['status'] = "File Uploaded";
				$data['user']= $this->Model_User->getDataBy($id)->result();
				$this->template->load('Template','user/Kelengkapan',$data);
			}

		}
		//simpan
		else if (isset($_POST['Simpan'])) {
			//save tanggal batch umrah
			$this->Model_User->update_tanggal_umrah();
			$pesan = "Update Data Kelengkapan Haji";
			$this->Model_User->InputLog($id,$pesan);
			echo "
				<script>
					alert('Data Kelengkapan Berhasil diperbaharui');
					window.location.href='".base_url()."user/';
				</script>";

		}
		else{
			$data['status'] = "";
			$data['user']= $this->Model_User->getDataBy($id)->result();
			$this->template->load('Template','user/Kelengkapan',$data);
		}
		
		
	}



	//jadwal
	function Jadwal(){
		ceklogin();
		$data['now'] = date('Y-m-d');
		$data['jadwal']= $this->Model_jadwal->getAll()->result();
		$this->template->load('Template','jadwal/index',$data);
	}

	function DetailJadwal(){
		$id = $this->uri->segment(3);
		$data['konfirmasi'] = $this->Model_jadwal->getKonfirmasiById($id)->num_rows();
		$data['jadwal']= $this->Model_jadwal->getJadwalById($id)->result();
		$this->template->load('Template','jadwal/DetailJadwal',$data);
	}


	//materi
	function Kategori(){
		ceklogin();
		$data['ketegori'] = $this->Model_materi->getKategori()->result();
		$this->template->load('Template','materi/index',$data);
	}
	function Materi(){
		ceklogin();
		$id = $this->uri->segment(3);
		$data['kategori'] =  $this->Model_materi->getKategoriByID($id)->result();
		$data['materi']= $this->Model_materi->getMateriByIdKat($id)->result();
		$this->template->load('Template','materi/materi',$data);
	}

	function DetailMateri(){
		ceklogin();
		$id = $this->uri->segment(3);
		$data['materi']= $this->Model_materi->getMateriById($id)->result();
		$this->template->load('Template','materi/DetailMateri',$data);
	}


	///lokasi
	function Lokasi(){
		ceklogin();
		$data['lokasi']= $this->Model_lokasi->getAll()->result();
		$this->template->load('Template','lokasi/index',$data);
	}


	//pengajar
	function DataPengajar(){
		ceklogin();
		$data['pengajar']= $this->Model_User->getAllPengajar()->result();
		$this->template->load('Template','pengajar/index',$data);
	}

	function DetailPengajar(){
		ceklogin();
		$id = $this->uri->segment(3);
		$data['pengajar']= $this->Model_User->getDataBy($id)->result();
		$this->template->load('Template','pengajar/DetailPengajar',$data);
	}


	//cancel KONFIRMASI
	function Cancel(){
		ceklogin();
		$id_user = $_SESSION['sesId'];
		$id_jadwal = $this->uri->segment(3);
 	
 		if ($this->Model_jadwal->cekConfirm($id_user,$id_jadwal)->result() == null){
 			echo "
				<script>
					alert('Nama Anda Tidak Terdaftar');
					window.location.href='".base_url()."User/Jadwal/';
				</script>";
 		}else{
 			$this->Model_User->deletekonfirmasi($id_jadwal,$id_user);
			$pesan="Cancel Konfirmasi Jadwal ".$id_jadwal." dengan Materi ".$this->input->post('Materi')." pada tanggal 	".$this->input->post('tanggal');
			$this->Model_User->InputLog($id_user,$pesan);

			echo "
				<script>
					alert('Anda Telah Membatalkan Kajian');
					window.location.href='".base_url()."User/Jadwal/';
				</script>";
 		}

	}

	///konfirmasi kehadiran oleh peserta
	function Konfirmasi(){ 
		ceklogin();
		$id_user = $_SESSION['sesId'];
		$id_jadwal = $this->uri->segment(3);
 
		if(isset($_POST['Konfirmasi'])){
			$this->Model_User->savekonfirmasi($id_jadwal,$id_user);
			$pesan="Konfirmasi Jadwal ".$id_jadwal." dengan Materi ".$this->input->post('Materi')." pada tanggal 	".$this->input->post('tanggal');
			$this->Model_User->InputLog($id_user,$pesan);

			echo "
				<script>
					alert('Konfirmasi Kehadiran Berhasil');
					window.location.href='".base_url()."User/Jadwal/';
				</script>";

		}else if (isset($_POST['Back'])) {
			$data['jadwal']= $this->Model_jadwal->getAll()->result();
			$this->template->load('Template','jadwal/index',$data);
		}
		else{

			if ($this->Model_jadwal->cekConfirm($id_user,$id_jadwal)->result() == null){
				$data['user']=  $this->Model_User->getDataBy($id_user)->result();
				$data['jadwal']= $this->Model_jadwal->getJadwalById($id_jadwal)->result();
				$this->template->load('Template','jadwal/konfirmasi',$data);
				
			}else{
				echo '<script>alert ("Nama Anda Sudah Terdaftar")</script>';
				$data['now'] = date('Y-m-d');
 				$data['jadwal']= $this->Model_jadwal->getAll()->result();
				$this->template->load('Template','jadwal/index',$data);
			}
		}
	
	}


}


?>