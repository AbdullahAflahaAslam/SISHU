<?php

/**
* 
*/
class Admin extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('Model_jadwal');
		$this->load->model('Model_materi');
		$this->load->model('Model_lokasi');
		$this->load->model('Model_User');
		$this->load->model('Model_auth');
		$this->load->model('Model_Pengajar');
		$this->load->model('Model_Kelas');

	}


	function index(){
		cekadmin();
		$id = $_SESSION['sesId'];
		//$data['encode'] = $this->encryption->encrypt($_SESSION['nama']);
		//$data['decode'] = $this->encryption->decrypt('');
		//$this->encrypt->encode()
		//$this->encrypt->decode() 
		$data['jadwal']= $this->Model_jadwal->getAll()->result();
		$data['notifikasi']=$this->Model_User->getNotif()->result();
		$data['log']=$this->Model_User->getLog($id)->result();
		$this->template->load('Template','user/Show_Person',$data);
		
	}

	function Grafik(){
		cekadmin();
		/*$data['pass'] = $this->model_auth->generatePass();*/
		$this->template->load('Template','admin/Dashbor');
	}

	function Dasbor(){
		cekadmin();
		/*$data['pass'] = $this->model_auth->generatePass();*/
		$this->template->load('Template','admin/Dashbor');
	}
 

	///pengajar ONLY
	function DetailPengajar(){
		cekadmin();
		$id = $this->uri->segment(3);
		$data['pengajar']= $this->Model_User->getDataBy($id)->result();
		$this->template->load('Template','pengajar/DetailPengajar',$data);
	}
	function InputPengajar(){
		cekadmin();
		if(isset($_POST['Simpan'])){
			
			$username = $this->input->post('phone');
    		$exists = $this->Model_User->filename_exists($username);
			$count = count($exists);

			if (empty($count)) {
				$password = $this->Model_auth->generatePass();
				$id_kategori =  null;
		        $id_user = $this->Model_User->save($password, $id_kategori);
		        $id_privilege = 2 ; 
		        $this->Model_User->save_privilege($id_privilege, $id_user);
		        
		        //input log
		        $id = $_SESSION['sesId'];
				$pesan="Menambah Data Pengajar";
				$this->Model_User->InputLog($id,$pesan);
		        
				//send mail
				$email = $this->Model_User->getDataBy($id_user)->row()->email;
				$data['user'] =  $this->Model_User->getDataBy($id_user);
				$data['privilege'] = $id_privilege;
				$pesan =  $this->load->view('admin/Create_User',$data,true);
				//print_r($pesan );
				$this->Model_auth->sendMail($email,$pesan); 


		        echo "
					<script>
						alert('Data Pengajar Berhasil Disimpan');
						window.location.href='".base_url()."Admin/DataPengajar/';
					</script>";
		    } else {
		    	echo "
					<script>
						alert('User Anda Sudah Terdaftar');
						window.location.href='".base_url()."Admin/InputPengajar/';
					</script>";
		    }

		}else if (isset($_POST['Back'])) {
			 echo "
					<script>
						window.location.href='".base_url()."Admin/DataPengajar/';
					</script>";
		}
		else{
			$data['status'] = "";
			$data['country']=$this->Model_auth->getAllCountry()->result();
			$this->template->load('Template','pengajar/input',$data);
		}

	}

	function DataPengajar(){
		cekadmin();
		$data['pengajar']= $this->Model_User->getAllPengajar()->result();
		$this->template->load('Template','pengajar/index',$data);
	}
	function EditPengajar(){
		cekadmin();
		$id = $this->uri->segment(3);
		if(isset($_POST['Simpan'])){
			$username = $this->input->post('user');
    		$exists = $this->Model_User->filename_exists($username);
			$count = count($exists);

			if ($count<=1) {
				$id = $this->input->post('id_user');
				if ($this->input->post('userLast')==$this->input->post('user')) {
					$this->Model_User->update_data();

			        //input log
			        $id_user = $_SESSION['sesId'];
					$pesan="Edit Data Pengajar dengan  ID Pengajar ".$id;
					$this->Model_User->InputLog($id_user,$pesan);
					echo "
					<script>
						alert('Data Pengajar Berhasil Dirubah');
						window.location.href='".base_url()."Admin/DataPengajar/';
					</script>";
				}else{
					echo "
					<script>
						alert('User Anda Sudah Terdaftar');
						window.location.href='".base_url()."Admin/EditPengajar/".$id."';
					</script>";
				}
		        
		    } else {
		        echo "
					<script>
						alert('User Anda Sudah Terdaftar');
						window.location.href='".base_url()."Admin/EditPengajar/".$id."';
					</script>";
		    }
		}else if(isset($id)){
			$data['pengajar']= $this->Model_User->getDataBy($id)->result();
			$this->template->load('Template','pengajar/edit',$data);
		}else{
			echo "
				<script>
					alert('Pastikan Data terdaftar');
					window.location.href='".base_url()."Admin/DataPengajar/';
				</script>";
		}
	}


	function DeletePengajar(){
		cekadmin();
		$id = $this->uri->segment(3);
		//$this->Model_User->DeletKonfirmasiByJadwal($id);
		$this->Model_User->DeletePengajar($id);
		//input log
		$id_user = $_SESSION['sesId'];
		$pesan="Hapus Data Pengajar dengan ID Pengajar ".$id;
		$this->Model_User->InputLog($id_user,$pesan);
		 echo "
			<script>
				alert('Data Pengajar Berhasil Dihapus');
				window.location.href='".base_url()."Admin/DataPengajar/';
			</script>";
	}

	///ADMIN ONLY

	function InputAdmin(){
		cekadmin();
		if(isset($_POST['Simpan'])){
			$username = $this->input->post('phone');
    		$exists = $this->Model_User->filename_exists($username);
			$count = count($exists);
			if (empty($count)) {

				//konfirmasi password
				if ($this->input->post('password') == $this->input->post('conf_password')) {
					$password = $this->input->post('password');
					$id_kategori =  null;
			        $id_user = $this->Model_User->save($password,$id_kategori);
			        $id_privilege = 3 ;
			        $this->Model_User->save_privilege($id_privilege, $id_user);


			        //input log
			        $id = $_SESSION['sesId'];
					$pesan="Menambah Data Admin";
					$this->Model_User->InputLog($id,$pesan);

					//send mail
			        $email = $this->Model_User->getDataBy($id_user)->row()->email;
			        $data['user'] =  $this->Model_User->getDataBy($id_user);
			        $data['privilege'] = $id_privilege;
			       	$pesan =  $this->load->view('admin/Create_User',$data,true);
					//print_r($pesan );
					$this->Model_auth->sendMail($email,$pesan); 

			        echo "
						<script>
							alert('Data Admin Berhasil Disimpan');
							window.location.href='".base_url()."Admin/DataAdmin/';
						</script>";
				}else{
					 echo "
					<script>
						alert('Password yang anda masukan tidak sama');
						window.location.href='".base_url()."Admin/InputAdmin/';
					</script>";
				}
				
				
		    } else {
		        echo "
					<script>
						alert('Username Sudah Digunakan');
						window.location.href='".base_url()."Admin/InputAdmin/';
					</script>";
		    }
			

		}else if (isset($_POST['Back'])) {
			echo "
				<script>
					window.location.href='".base_url()."Admin/Peserta/';
				</script>";
		}
		else{
			$data['status'] = "";
			$data['country']=$this->Model_auth->getAllCountry()->result();
			$this->template->load('Template','admin/input',$data); 
		}
	}
 
	function DataAdmin(){
		cekadmin();
		$data['admin']= $this->Model_User->getAllAdmin()->result(); 
		//$data['jumlah'] = $this->Model_User->getTotalKajian(9);
		$this->template->load('Template','admin/index',$data);
	}
	function EditAdmin(){
		cekadmin();
		$id = $this->uri->segment(3);
		if(isset($_POST['Simpan'])){

			$username = $this->input->post('user');
    		$exists = $this->Model_User->filename_exists($username);
			$count = count($exists);
			$id = $this->input->post('id_user');
			//jika ada 1 user yg sama
			if ($count <=1) {
				//jika yg sama adalah diri sendiri
				if ($this->input->post('userLast')==$this->input->post('user')) {
					$this->Model_User->update_data();

			        //input log
			        $id_user = $_SESSION['sesId'];
					$pesan="Merubah Data Admin";
					$this->Model_User->InputLog($id_user,$pesan);

					echo "
						<script>
							alert('Data Admin berhasil dirubah');
							window.location.href='".base_url()."Admin/DataAdmin/".$id."';
						</script>";
				}else{
					echo "
					<script>
						alert('User Anda Sudah Digunakan');
						window.location.href='".base_url()."Admin/EditAdmin/".$id."';
					</script>";
				}
		        
		    } else {
		    	echo "
					<script>
						alert('User Anda Sudah Digunakan');
						window.location.href='".base_url()."Admin/EditAdmin/".$id."';
					</script>";
		        
		    }
		}else if(isset($id)){	
			$data['admin']= $this->Model_User->getDataBy($id)->result();
			$this->template->load('Template','admin/edit',$data);
		}/*else{
			echo "
				<script>
					alert('Pastikan Data terdaftar');
					window.location.href='".base_url()."Admin/DataAdmin/';
				</script>";
		}*/
	}

	function DetailAdmin(){
		cekadmin();
		$id = $this->uri->segment(3);
		if (isset($id)) {
			$data['admin']= $this->Model_User->getDataBy($id)->result();
			$this->template->load('Template','admin/DetailAdmin',$data);
		}else{
			echo "
				<script>
					alert('Pastikan Data terdaftar');
					window.location.href='".base_url()."Admin/DataAdmin/';
				</script>";
		}
	}
	function DeleteAdmin(){
		cekadmin();
		$id = $this->uri->segment(3);
		$this->Model_User->delete($id);
		//input log
		$id_user = $_SESSION['sesId'];
		$pesan="Menghapus Data Admin dengan ID user".$id;
		$this->Model_User->InputLog($id_user,$pesan);

		echo "
			<script>
				alert('Data Admin Berhasil Dihapus');
				window.location.href='".base_url()."Admin/DataADmin/';
			</script>";
	}



	//Peserta ONLY
	function InputPeserta(){
		cekadmin();
		if(isset($_POST['Simpan'])){

			$username = $this->input->post('phone');
    		$exists = $this->Model_User->filename_exists($username);
			$count = count($exists);
			if (empty($count)) {
				$password = $this->Model_auth->generatePass();
				$id_kategori =  $this->Model_Kelas->getTopKelas();
		        $id_user = $this->Model_User->save($password, $id_kategori);
		        $id_privilege = 1 ;
		        $this->Model_User->save_privilege($id_privilege, $id_user);

		        //input log
		        $id = $_SESSION['sesId'];
				$pesan="Menambah Data Peserta";
				$this->Model_User->InputLog($id,$pesan);

				//send mail
				$email = $this->Model_User->getDataBy($id_user)->row()->email;
				$data['user'] =  $this->Model_User->getDataBy($id_user);
				$data['privilege'] = $id_privilege;
				$pesan =  $this->load->view('admin/Create_User',$data,true);
				//print_r($pesan );
				$this->Model_auth->sendMail($email,$pesan); 


		        echo "
					<script>
						alert('Data Peserta Berhasil Disimpan');
						window.location.href='".base_url()."Admin/DataPeserta/';
					</script>";
				
		    } else {
		        echo "
					<script>
						alert('Username Sudah Digunakan');
						window.location.href='".base_url()."Admin/InputPeserta/';
					</script>";
		    }
			

		}else if (isset($_POST['Back'])) {
			echo "
				<script>
					window.location.href='".base_url()."Admin/Peserta/';
				</script>";
		}
		else{
			$data['status'] = "";
			$data['country']=$this->Model_auth->getAllCountry()->result();
			$this->template->load('Template','user/input',$data); 
		}
	}

	//melihat data seluruh peserta
	function DataPeserta(){
		cekadmin();
		$data['peserta']= $this->Model_User->getAll()->result(); 
		$jum= $this->Model_User->getAll()->num_rows(); 
		for ($i=0; $i < $jum; $i++) { 
			$jumlah = $this->Model_User->getTotalKajian( $data['peserta'][$i]->id_user);
			$data['total'][$i] = $jumlah;
		}
		//$data['jumlah'] = $this->Model_User->getTotalKajian(9);
		$this->template->load('Template','user/DataPeserta',$data);
	}

	//melihat detail peserta
	function DetailPeserta(){
		cekadmin();
		$id = $this->uri->segment(3);
		if (isset($id)) {
			$data['peserta']= $this->Model_User->getDataBy($id)->result();
			$this->template->load('Template','user/DetailPeserta',$data);
		}else{
			echo "
				<script>
					alert('Pastikan Data terdaftar');
					window.location.href='".base_url()."Admin/DataPeserta/';
				</script>";
		}
		
	}

	function EditPeserta(){
		cekadmin();
		$id = $this->uri->segment(3);
		if(isset($_POST['Simpan'])){
			$username = $this->input->post('user');
    		$exists = $this->Model_User->filename_exists($username);
			$count = count($exists);

			if ($count <=1) {
				$id = $this->input->post('id_user');
				if ($this->input->post('userLast')==$this->input->post('user')) {
					 $this->Model_User->update_data();

			        //input log
			        $id_user = $_SESSION['sesId'];
					$pesan="Merubah Data Peserta";
					$this->Model_User->InputLog($id_user,$pesan);

					echo "
						<script>
							alert('Data Peserta berhasil dirubah');
							window.location.href='".base_url()."Admin/DataPeserta/".$id."';
						</script>";
				}else{
					echo "
					<script>
						alert('User Anda Sudah Terdaftar');
						window.location.href='".base_url()."Admin/EditPeserta/".$id."';
					</script>";
				}
		       
		    } else {
		    	echo "
					<script>
						alert('User Anda Sudah Terdaftar');
						window.location.href='".base_url()."Admin/EditPeserta/".$id."';
					</script>";
		        
		    }
		}else if(isset($id)){	
			$data['peserta']= $this->Model_User->getDataBy($id)->result();
			$this->template->load('Template','user/edit',$data);
		}else{
			echo "
				<script>
					alert('Pastikan Data terdaftar');
					window.location.href='".base_url()."Admin/DataPeserta/';
				</script>";
		}
	}

	function DeletePeserta(){
		cekadmin();
		$id = $this->uri->segment(3);
		$this->Model_User->delete($id);
		//input log
		$id_user = $_SESSION['sesId'];
		$pesan="Menghapus Data Peserta dengan ID user".$id;
		$this->Model_User->InputLog($id_user,$pesan);

		echo "
			<script>
				alert('Data Peserta Berhasil Dihapus');
				window.location.href='".base_url()."Admin/DataPeserta/';
			</script>";
	}



	//Daftar Hadir ONLY
	function InputAbsen(){
		cekadmin();
		$count= "";
		if(isset($_POST['Simpan'])){
			foreach ($_POST['ceklist'] as $absensi) {
				$id_jadwal = $this->input->post('id_jadwal');
				
				if (empty($this->Model_jadwal->cekAbsensi($absensi,$id_jadwal))) {
					//jika tidak ada
					//print_r($this->Model_jadwal->cekAbsensi($absensi,$id_jadwal )->result());
					$this->Model_jadwal->simpanAbsensi($absensi);
				}else{
					//jika sudah ada update
					//print_r('ada');
					$this->Model_jadwal->updateAbsensi($absensi,$id_jadwal );

				}
				// jika belum simpan
				//
			}
			echo "
				<script> 
					alert('Tambah Absesni Berhasil');
					window.location.href='".base_url()."Admin/DaftarHadir/';
				</script>";

		}else{
			$idJadwal = $this->uri->segment(3);
			$data['jadwal']= $this->Model_jadwal->getJadwalById($idJadwal)->result();
			$data['peserta']= $this->Model_jadwal->getUserNotConfirm($idJadwal)->result(); 
			$this->template->load('Template','admin/InputAbsen',$data);
		}
				
	}
	function DaftarHadir(){
		cekadmin();
		$data['jadwal']= $this->Model_jadwal->getAll()->result();
		$this->template->load('Template','admin/DaftarHadir',$data);
	}

	//cetak CetakDaftarHadir
	function CetakDaftarHadir(){
		if(isset($_POST['Simpan'])){
			$id_kategori = $this->input->post('id_kategori');
			$data['peserta']= $this->Model_User->getUserByKategori($id_kategori)->result();
			$this->load->view('admin/Cetak',$data);
		}else{
			
			$data['kelas'] = $this->Model_Kelas->getAll()->result();
			$this->template->load('Template','admin/Cetak_Daftar_Hadir',$data);
		}
	}


	function Absensi(){
		cekadmin();
		$id = $this->uri->segment(3);
		$data['jadwal']= $this->Model_jadwal->getJadwalById($id)->result();
		$data['konfirmasi'] = $this->Model_jadwal->getKonfirmasiById($id)->result();
		$data['jumlah'] = $this->Model_jadwal->getKonfirmasiById($id)->num_rows();
		$data['idJadwal'] = $id;
		$this->template->load('Template','admin/Absensi',$data);
	}

	function DeleteAbsensi(){
		cekadmin();
		$id = $this->uri->segment(3);
		$id_jadwal = $this->uri->segment(4);
		$this->Model_jadwal->DeleteAbsensi($id);
		echo "
			<script>
				alert('Data Absensi Berhasil Dihapus');
				window.location.href='".base_url()."Admin/Absensi/".$id_jadwal."';
			</script>";
	}


	function DetailMateriPeserta(){
		cekadmin();
		$id = $this->uri->segment(3);
		$data['materi']= $this->Model_jadwal->getKonfirmasiByIdUser($id)->result();
		$data['materi_belum']= $this->Model_jadwal->getNotKonfirmasiByIdUser($id)->result();
		$data['peserta'] = $this->Model_User->getDataBy($id)->result();
 		$this->template->load('Template','user/DetailMateriPeserta',$data);
		//$this->load->view('user/DetailMateriPeserta');
	}

	



	///materi ONLY
	function Kategori(){
		cekPengajar();
		$data['ketegori'] = $this->Model_materi->getKategori()->result();
		$this->template->load('Template','materi/index',$data);
	}


	function InputKategori(){
		cekPengajar();
		if(isset($_POST['Simpan'])){
			$this->Model_materi->saveKategori();
			//input log
			$id_user = $_SESSION['sesId'];
			$pesan="Menambah Materi ";
			$this->Model_User->InputLog($id_user,$pesan);
		echo "
			<script>
				alert('Tambah Kategori Berhasil');
				window.location.href='".base_url()."Admin/Kategori/';
			</script>";

		}else if (isset($_POST['Back'])) {
			echo "
			<script>
				window.location.href='".base_url()."Admin/Kategori/';
			</script>"; 
		}
		else{
			$this->template->load('Template','materi/input_kategori');
		}
	}

	function DeleteKategori(){
		cekPengajar();
		$id = $this->uri->segment(3);
		$this->Model_materi->DeleteKategori($id);

		//update user whare kagetgori didelete
		$id_kategori =  $this->Model_materi->getTopKategori();
		$this->Model_materi->UpdateUser_Kategori($id,$id_kategori);

		//input log
		$id_user = $_SESSION['sesId'];
		$pesan="Delete Materi ";
		$this->Model_User->InputLog($id_user,$pesan);

		echo "
			<script>
				alert('Kategori Berhasil Dihapus');
				window.location.href='".base_url()."Admin/Kategori/';
			</script>";
	}

	function EditKategori(){
		cekPengajar();
		$id = $this->uri->segment(3);
		if(isset($_POST['Simpan'])){
			$this->Model_materi->updateKategori();

			//input log
			$id_user = $_SESSION['sesId'];
			$pesan="Merubah Data Materi ";
			$this->Model_User->InputLog($id_user,$pesan);

			echo "
				<script>
					alert('Kategori Berhasil Dirubah');
					window.location.href='".base_url()."Admin/Kategori/';
				</script>";

		}
		else if (isset($id)) {
			$data['kategori'] = $this->Model_materi->getKategoriByID($id)->result();
			$this->template->load('Template','materi/edit_kategori',$data);
		}else{
			echo "
				<script>
					window.location.href='".base_url()."Admin/Kategori/';
				</script>";
		}
	}

	function Materi(){
		$id = $this->uri->segment(3);
		$data['kategori'] =  $this->Model_materi->getKategoriByID($id)->result();
		$data['materi']= $this->Model_materi->getMateriByIdKat($id)->result();
		$this->template->load('Template','materi/materi',$data); 
	}

	function DetailMateri(){
		$id = $this->uri->segment(3);
		$data['materi']= $this->Model_materi->getMateriById($id)->result();
		$this->template->load('Template','materi/DetailMateri',$data);
	}

	function InputMateri(){ 
		cekPengajar();
		if(isset($_POST['Simpan'])){
			$id_kategori =  $this->input->post('id_kategori');
			$id_materi = $this->Model_materi->save();
			if (!is_dir('./file/materi/'.$id_kategori))	 {
	    		mkdir('./file/materi/'. $id_kategori, 0777, TRUE);
			}
			$new_name = $id_materi;
			$config['upload_path']          = './file/materi/'.$id_kategori.'/';
			$config['allowed_types']        = 'pdf|doc|docx';
			$config['max_size']             = 100000;
			$config['file_name']			= $new_name;
			$config['overwrite']			= true;
			$fileName = $config['file_name'];

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('file_materi')) {
				$file_materi ="";
				$this->Model_materi->savefile($id_materi,$file_materi);
				echo "
					<script>
						alert('Tambah Materi Berhasil');
						window.location.href='".base_url()."Admin/Kategori/';
					</script>";
			}else{
				$file_materi = $fileName.$this->upload->data('file_ext');
				$this->Model_materi->savefile($id_materi,$file_materi);
				echo "
					<script>
						alert('Tambah Materi Berhasil');
						window.location.href='".base_url()."Admin/Kategori/';
					</script>";

			}

			//input log
			$id_user = $_SESSION['sesId'];
			$pesan="Menambah Sub Materi ";
			$this->Model_User->InputLog($id_user,$pesan);
			
		}/*else if (isset($_POST['Back'])) {
			redirect(base_url()."Admin/Kategori/");
		}*/
		else{
			$data['kategori'] = $this->Model_materi->getKategori()->result();
			$data['materi']= $this->Model_materi->getAll()->result();
			$this->template->load('Template','materi/input',$data);
		}

	}

	function EditMateri(){
		cekPengajar();
		$id = $this->uri->segment(3);
		if(isset($_POST['Simpan'])){
			$id_kategori =  $this->input->post('id_kategori');
			$id_materi =$this->input->post('id_materi');
			$this->Model_materi->updateMateri();


			if (!is_dir('./file/materi/'.$id_kategori))	 {
	    		mkdir('./file/materi/'. $id_kategori, 0777, TRUE);
			}
			$new_name = $id_materi;
			$config['upload_path']          = './file/materi/'.$id_kategori.'/';
			$config['allowed_types']        = 'pdf|doc|docx';
			$config['max_size']             = 100000;
			$config['file_name']			= $new_name;
			$config['overwrite']			= true;
			$fileName = $config['file_name'];

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('file_materi')) {
				$file_materi =$this->input->post('file_materi');;
				$this->Model_materi->savefile($id_materi,$file_materi);

				echo "
					<script>
						alert('Edit Materi Berhasil');
						window.location.href='".base_url()."Admin/Materi/".$id_kategori ."';
					</script>";
			}else{
				$file_materi = $fileName.$this->upload->data('file_ext');
				$this->Model_materi->savefile($id_materi,$file_materi);
				echo "
					<script>
						alert('Edit Materi Berhasil');
						window.location.href='".base_url()."Admin/Materi/".$id_kategori ."';
					</script>";

			}

			//input log
			$id_user = $_SESSION['sesId'];
			$pesan="Merubah Sub Materi ";
			$this->Model_User->InputLog($id_user,$pesan);
			echo "
				<script>
					alert('Materi Berhasil Dirubah');
					window.location.href='".base_url()."Admin/Kategori/';
				</script>";

		}/*else if (isset($_POST['Back'])) {
			redirect(base_url()."Admin/Kategori/");
		}*/
		else if(isset($id)){
			$data['materi']= $this->Model_materi->getMateriById($id)->result();
			$data['kategori'] =  $this->Model_materi->getKategori()->result();
			$this->template->load('Template','materi/edit_materi',$data);
		}else{
			echo "
				<script>
					window.location.href='".base_url()."Admin/Kategori/';
				</script>";
		}
	}

	function DeleteMateri(){
		cekPengajar();
		$id = $this->uri->segment(3);
		$this->Model_materi->DeleteMateri($id);
		$id_user = $_SESSION['sesId'];
		$pesan="Delete Materi ";
		$this->Model_User->InputLog($id_user,$pesan);
		echo "
			<script>
				alert('Sub Materi Berhasil Dihapus');
				window.location.href='".base_url()."Admin/Kategori/';
			</script>";
	}


	///Kelas Only
	function Kelas(){
		cekPengajar();
		$data['lokasi'] =$this->Model_lokasi->getAll()->result();
		$data['kelas'] = $this->Model_Kelas->getAll()->result();
		$this->template->load('Template','kelas/index',$data);
	}

	function DetailKelas(){
		$id = $this->uri->segment(3);
		$data['kelas']= $this->Model_Kelas->getKelasBy($id)->result();
		$this->template->load('Template','kelas/DetailKelas',$data);
	}

	function InputKelas(){ 
		cekPengajar();
		if(isset($_POST['Simpan'])){
			$id_materi = $this->Model_Kelas->save();
			//input log
			$id_user = $_SESSION['sesId'];
			$pesan="Menambah Kelas ";
			$this->Model_User->InputLog($id_user,$pesan);
			echo "
			<script>
				alert('Data Berhasil Disimpan');
				window.location.href='".base_url()."Admin/Kelas/';
			</script>";
		}/*else if (isset($_POST['Back'])) {
			redirect(base_url()."Admin/Kategori/");
		}*/
		else{
			$data['kategori'] = $this->Model_materi->getKategori()->result();
			$data['lokasi']= $this->Model_lokasi->getAll()->result();
			$this->template->load('Template','kelas/input',$data);
		}

	}

	function EditKelas(){

		$id = $this->uri->segment(3);
		if(isset($_POST['Simpan'])){
			$id_materi = $this->Model_Kelas->update();
			//input log
			$id_user = $_SESSION['sesId'];
			$pesan="Edit Kelas ";
			$this->Model_User->InputLog($id_user,$pesan);
			echo "
			<script>
				alert('Data Berhasil Dirubah');
				window.location.href='".base_url()."Admin/Kelas/';
			</script>";
		}/*else if (isset($_POST['Back'])) {
			redirect(base_url()."Admin/Kategori/");
		}*/
		else if(isset($id)){
			$data['kategori'] = $this->Model_materi->getKategori()->result();
			$data['lokasi']= $this->Model_lokasi->getAll()->result();
			$data['kelas']= $this->Model_Kelas->getKelasBy($id)->result();
			$this->template->load('Template','kelas/edit_kelas',$data);
		}else{
			echo "
				<script>
					window.location.href='".base_url()."Admin/Kelas/';
				</script>";
		}
	}

	function DeleteKelas(){
		cekPengajar();
		$id = $this->uri->segment(3);
		$this->Model_Kelas->DeleteKelas($id);

		//input log
		$id_user = $_SESSION['sesId'];
		$pesan="Delete Kelas ";
		$this->Model_User->InputLog($id_user,$pesan);
		echo "
			<script>
				alert('Kelas Berhasil Dihapus');
				window.location.href='".base_url()."Admin/Kelas/';
			</script>";
	}




    ///	Jadwal ONLY
	function Jadwal(){
		cekadmin();
		$data['now']=date('Y-m-d');
		$data['jadwal']= $this->Model_jadwal->getAll()->result();
		$this->template->load('Template','jadwal/index',$data);
	}
	function EditJadwal(){
		cekadmin();
		$id = $this->uri->segment(3);
		if(isset($_POST['Simpan'])){
			$this->Model_jadwal->update($id);

			 //input log
			$id_user = $_SESSION['sesId'];
			$pesan="Edit Jadwal ";
			$this->Model_User->InputLog($id_user,$pesan);

			echo "
			<script>
				alert('Data Berhasil Dirubah');
				window.location.href='".base_url()."Admin/EditJadwal/';
			</script>";
			

		}else if (isset($_POST['Back'])) {
			echo "
			<script>
				window.location.href='".base_url()."Admin/Jadwal/';
			</script>";
		}
		else if (isset($id)) {
			$data['materi']= $this->Model_materi->getAll()->result();
			$data['lokasi']= $this->Model_lokasi->getAll()->result();
			$data['pengajar']= $this->Model_User->getAllPengajar()->result();
			$data['jadwal']= $this->Model_jadwal->getJadwalById($id)->result();
			$this->template->load('Template','jadwal/edit',$data);
		}else{
			echo "
			<script>
				alert('Data Berhasil Dirubah');
				window.location.href='".base_url()."Admin/Jadwal/';
			</script>";
		}
		
	}
	function DetailJadwal(){
		cekadmin();
		$id = $this->uri->segment(3);
		$data['konfirmasi'] = $this->Model_jadwal->getKonfirmasiById($id)->num_rows();
		$data['jadwal']= $this->Model_jadwal->getJadwalById($id)->result();
		$this->template->load('Template','jadwal/DetailJadwal',$data);
	}
	function InputJadwal(){
		
		cekadmin();
		if(isset($_POST['Simpan'])){

			if ($this->Model_jadwal->cekJadwal()==1) {
				$this->Model_jadwal->save();
				 //input log
				$id = $_SESSION['sesId'];
				$pesan="Menambah Jadwal ";
				$this->Model_User->InputLog($id,$pesan);

				echo "
				<script>
					alert('Jadwal Berhasil Disimpan');
					window.location.href='".base_url()."Admin/Jadwal/';
				</script>";
			}else{
				echo "
				<script>
					alert('Jadwal Pengajar Sudah digunakan. Harap ganti pengajar atau Hari pelaksanaan');
					window.location.href='".base_url()."Admin/InputJadwal/';
				</script>";
			}

			

		}else if (isset($_POST['Back'])) {
			echo "
			<script>
				window.location.href='".base_url()."Admin/Jadwal/';
			</script>";
		}
		else{ 
			$data['materi']= $this->Model_materi->getKatMateri()->result();
			$data['lokasi']= $this->Model_lokasi->getAll()->result(); 
			$data['pengajar']= $this->Model_User->getAllPengajar()->result();
			//print_r($data['materi'][0]);
			$this->template->load('Template','jadwal/input',$data);
		}

	}


	function DeleteJadwal(){
		cekadmin();
		$id = $this->uri->segment(3);
		$this->Model_jadwal->delete($id);
		echo "
			<script>
				alert('Data Berhasil Dihapus');
				window.location.href='".base_url()."Admin/Jadwal/';
			</script>";
	}




	//lokasi ONLY
	function Lokasi(){
		cekadmin();
		$data['lokasi']= $this->Model_lokasi->getAll()->result();
		$this->template->load('Template','lokasi/index',$data);
	}



	function InputLokasi(){
		cekadmin();
		if(isset($_POST['Simpan'])){
			$this->Model_lokasi->save();
			echo "
			<script>
				alert('Tambah Lokasi Berhasil');
				window.location.href='".base_url()."Admin/Lokasi/';
			</script>";

		}
		else if (isset($_POST['Back'])) {
			echo "
			<script>
				window.location.href='".base_url()."Admin/Lokasi/';
			</script>";
		}
		else{
			//$data['materi']= $this->Model_materi->getAll()->result();
			//$data['lokasi']= $this->Model_lokasi->getAll()->result();
			//$data['pengajar']= $this->Model_Pengajar->getAll()->result();
			$this->template->load('Template','lokasi/input');
		}
	}
	function DeleteLokasi(){
		cekadmin();
		$id = $this->uri->segment(3);
		$this->Model_lokasi->delete($id);
		echo "
			<script>
				alert('Lokasi Berhasil Dihapus');
				window.location.href='".base_url()."Admin/Lokasi/';
			</script>";
	}

	function EditLokasi(){
		cekadmin();
		$id = $this->uri->segment(3);
		if(isset($_POST['Simpan'])){
			$this->Model_lokasi->update();
			echo '<script>alert ("Data Berhasil Dirubah")</script>';
			$data['lokasi']= $this->Model_lokasi->getAll()->result();
			$this->template->load('Template','lokasi/index',$data);

		}else if (isset($_POST['Back'])) {
			echo "
			<script>
				window.location.href='".base_url()."Admin/Lokasi/';
			</script>";
		}
		else if (isset($id)) {
			$data['lokasi']= $this->Model_lokasi->getByID($id)->result();
			$this->template->load('Template','lokasi/edit',$data);
		}else{
			echo "
			<script>
				window.location.href='".base_url()."Admin/Lokasi/';
			</script>";
		}
	}



	//notifikasi pengumuman
	function InputNotifikasi(){
		cekadmin();
		if(isset($_POST['Simpan'])){
			$this->Model_jadwal->InputNotifikasi();
			echo "
			<script>
				alert('Pengumuman Berhasil diKirim');
				window.location.href='".base_url()."Admin/';
			</script>";

		}else if (isset($_POST['Back'])) {
			echo "
			<script>
				window.location.href='".base_url()."Admin/';
			</script>";
		}
		else{
			$this->template->load('Template','admin/InputNotifikasi');
		}
	}



	//Setting password admin
	function Setting(){
		cekadmin();
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
						window.location.href='".base_url()."Admin/Setting/';
					</script>";
				}else{
					echo "
					<script>
						alert('Password yang anda masukan salah');
						window.location.href='".base_url()."Admin/Setting/';
					</script>";
				}
			}else{
				echo "
					<script>
						alert('Username sudah digunakan');
						window.location.href='".base_url()."Admin/Setting/';
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
						window.location.href='".base_url()."Admin/Setting/';
					</script>";
				}else{
					echo "
					<script>
						alert('Password yang anda masukan salah');
						window.location.href='".base_url()."Admin/Setting/';
					</script>";
					
				}
			}else{
				echo "
					<script>
						alert('Konfirmasi Password Tidak Sesuai');
						window.location.href='".base_url()."Admin/Setting/';
					</script>";
			}
			
		}elseif (isset($_POST['back'])) {
			echo "
					<script>
						window.location.href='".base_url()."Admin/Setting/';
					</script>";
		}
		else{
			$data['user']=  $this->Model_User->getDataBy($id)->result();
			$this->template->load('Template','user/Setting',$data);
		}
		
	}


	//Kelengkapan Haji
	function Kelengkapan(){ 
		cekadmin();
		$id =$this->input->post('id_user');
		//create direktori
			if (!is_dir('./file/'.$id)) {
	    		mkdir('./file/' . $id, 0777, TRUE);
			}
		if (isset($_POST['upload_ktp'])) {
			
			//file KTP
			$ktp = $_SESSION['sesId']."_file_ktp";
			$config['upload_path']          = './file/'.$id.'/';
			$config['allowed_types']        = 'gif|jpg|png|jpeg';
			$config['max_size']             = 10000;
			$config['file_name']			= $ktp;
			$config['overwrite']			= true;
			//$file_ktp = $config['file_name'];

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('file_ktp')) {
				$data['status'] = $this->upload->display_errors();
				$data['user']= $this->Model_User->getDataBy($id)->result();
				echo "
					<script>
						window.location.href='".base_url()."Admin/EditPeserta/".$id ."';
					</script>";
			}else{
				//save data in user tabel
				$file_ktp = $config['file_name'].$this->upload->data('file_ext');
				$this->Model_User->update_ktp($file_ktp);

				$data['status'] = "File KTP Uploaded";
				$data['user']= $this->Model_User->getDataBy($id)->result();
				echo "
					<script>
						window.location.href='".base_url()."Admin/EditPeserta/".$id ."';
					</script>";
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
			$config['max_size']             = 10000;
			$config['file_name']			= $kk;
			$config['overwrite']			= true;
			

			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('file_kk')) {
				$data['status'] = $this->upload->display_errors();
				$data['user']= $this->Model_User->getDataBy($id)->result();
				echo "
					<script>
						window.location.href='".base_url()."Admin/EditPeserta/".$id ."';
					</script>";
			}else{
				//save data in user tabel
				$file_kk = $config['file_name'].$this->upload->data('file_ext');
				$this->Model_User->update_kk($file_kk);

				$data['status'] = "File KK Uploaded";
				$data['user']= $this->Model_User->getDataBy($id)->result();
				echo "
					<script>
						window.location.href='".base_url()."Admin/EditPeserta/".$id ."';
					</script>";
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
			$config['max_size']             = 10000;
			$config['file_name']			= $buku_nikah;
			$config['overwrite']			= true;
			
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('file_buku_nikah')) {
				$data['status'] = $this->upload->display_errors();
				$data['user']= $this->Model_User->getDataBy($id)->result();
				echo "
					<script>
						window.location.href='".base_url()."Admin/EditPeserta/".$id ."';
					</script>";
			}else{
				//save data in user tabel
				$file_buku_nikah = $config['file_name'].$this->upload->data('file_ext');
				$this->Model_User->update_buku_nikah($file_buku_nikah);

				$data['status'] = "File Buku Nikah Uploaded";
				$data['user']= $this->Model_User->getDataBy($id)->result();
				echo "
					<script>
						window.location.href='".base_url()."Admin/EditPeserta/".$id ."';
					</script>";
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
			$config['max_size']             = 10000;
			$config['file_name']			= $miningitis;
			$config['overwrite']			= true;
			
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('file_miningitis')) {
				$data['status'] = $this->upload->display_errors();
				$data['user']= $this->Model_User->getDataBy($id)->result();
				echo "
					<script>
						alert('Upload file berhasil');
						window.location.href='".base_url()."Admin/EditPeserta/".$id ."';
					</script>";
			}else{
				//save data in user tabel
				$file_miningitis = $config['file_name'].$this->upload->data('file_ext');
				$this->Model_User->update_miningitis($file_miningitis);

				$data['status'] = "File Uploaded";
				$data['user']= $this->Model_User->getDataBy($id)->result();
				echo "
					<script>
						alert('Upload file berhasil');
						window.location.href='".base_url()."Admin/EditPeserta/".$id ."';
					</script>";
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
			$config['max_size']             = 10000;
			$config['file_name']			= $surat_ijin;
			$config['overwrite']			= true;
			
			$this->load->library('upload', $config);
			if ( ! $this->upload->do_upload('file_surat_ijin')) {
				$data['status'] = $this->upload->display_errors();
				$data['user']= $this->Model_User->getDataBy($id)->result();
				echo "
					<script>
						alert('Upload file berhasil');
						window.location.href='".base_url()."Admin/EditPeserta/".$id ."';
					</script>";
			}else{
				//save data in user tabel
				$file_surat_ijin = $config['file_name'].$this->upload->data('file_ext');
				$this->Model_User->update_surat_ijin($file_surat_ijin);

				$data['status'] = "File Uploaded";
				$data['user']= $this->Model_User->getDataBy($id)->result();
				echo "
					<script>
						alert('Upload file berhasil');
						window.location.href='".base_url()."Admin/EditPeserta/".$id ."';
					</script>";
			}

		}
		//simpan
		else{
			$data['status'] = "";
			$data['user']= $this->Model_User->getDataBy($id)->result();
			echo "
					<script>
						window.location.href='".base_url()."Admin/EditPeserta/".$id ."';
					</script>";
		}
		
		
	}


	//Funtion RESET PASSWORD
	function ResetPassword(){
		$id_user = $this->input->post('id_user');
		$new_password = $this->Model_auth->generatePass();

		if (isset($_POST['Reset'])) {
			 //update
			$this->Model_User->update_password($new_password);
			 //sendmail
			$data['user']= $this->Model_User->getDataBy($id_user);
			$email = $this->Model_User->getDataBy($id_user)->row()->email;
			$pesan =  $this->load->view('admin/Password_Reset',$data,true);
			//print_r($pesan );
			$this->Model_auth->sendMail($email,$pesan);

			 echo "
				<script>
					alert('Reset Password Berhasil');
					window.location.href='".base_url()."Admin/EditAdmin/".$id_user ."';
				</script>";
		}else{
			echo "
			<script>
				window.location.href='".base_url()."Admin/EditAdmin/".$id_user ."';
			</script>";
		}

	}


}


?>