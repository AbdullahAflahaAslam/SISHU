<?php 
/**
* 
*/
class Model_User extends CI_model
{
	function getDataBy($id){

		$this->db->select('*');
		$this->db->from('user,t_kelas');
		$this->db->where('user.id_user',$id);
		$this->db->where('t_kelas.id_kelas = user.id_kategori');
		return $this->db->get();
	}

	function getDataBy2($id){

		$this->db->select('*');
		$this->db->from('user,t_kategori');
		$this->db->where('user.id_user',$id);
		//$this->db->where('t_kategori.id_kategori = user.id_kategori');
		return $this->db->get();
	}

	function getUserByKey($key){
		$this->db->where('user', $key );
		$this->db->or_where('email', $key );
		return $this->db->get('user');
	}

	//cek apakah kategori user sudah sesuai
	/*function cekKategori($id){
		$query = "SELECT * FROM t_user WHERE id  IN (SELECT id_materi FROM t_konfirmasi WHERE  id_user = ".$id." ORDER BY id_jadwal ASC) ORDER BY id_materi DESC LIMIT 1 ";
		return  $this->db->query($query);
	}*/


	//get user by KELAS
	function getAll(){
		$this->db->select('*');
		$this->db->from('user_privilege');
		$this->db->where('user_privilege.id_privilege', 1);
		$this->db->where('user_privilege.id_user = user.id_user');
		return $this->db->get('user');
	}

 
	//get all data user
	function getUserByKategori($id_kategori){
		$this->db->select('*');
		$this->db->from('user_privilege');
		$this->db->where('user_privilege.id_privilege', 1);
		$this->db->where('user_privilege.id_user = user.id_user');
		$this->db->where('user.id_kategori ',$id_kategori);
		return $this->db->get('user');
	}

	function getAllPengajar(){
		$this->db->select('*');
		$this->db->from('user_privilege');
		$this->db->where('user_privilege.id_privilege', 2);
		$this->db->where('user_privilege.id_user = user.id_user');
		return $this->db->get('user');
	}
	function getAllAdmin(){
		$this->db->select('*');
		$this->db->from('user_privilege');
		$this->db->where('user_privilege.id_privilege', 3);
		$this->db->where('user_privilege.id_user = user.id_user');
		return $this->db->get('user');
	}


	function savekonfirmasi($id_jadwal, $id_user){
		$data = array(
			'id_jadwal' => $id_jadwal,
			'id_user' => $id_user,
			'id_materi'=>$this->input->post('id_materi'),
			'absensi'=> 0);
		$this->db->insert('t_konfirmasi', $data);
	
	}
	function deletekonfirmasi($id_jadwal, $id_user){
		$this->db->where('id_user', $id_user);
		$this->db->where('id_jadwal', $id_jadwal);
		$this->db->delete('t_konfirmasi');
	}


	function getLastMateri($id){
		$query = "SELECT * FROM t_materi WHERE id_materi  IN (SELECT id_materi FROM t_konfirmasi WHERE  id_user = ".$id." ORDER BY id_jadwal ASC) ORDER BY id_materi DESC LIMIT 1 ";
		return  $this->db->query($query);
	}
	function getKonfirmasi(){
		$this->db->select('*');
		$this->db->from('user,t_konfirmasi,t_materi,t_jadwal');
		$this->db->where('t_materi.id_materi = t_konfirmasi.id_materi');
		$this->db->where('user.id_user = t_konfirmasi.id_user');
		$this->db->where('t_jadwal.id_jadwal = t_konfirmasi.id_jadwal');
		//$this->db->where('t_lokasi.id_lokasi = t_jadwal.id_lokasi');
		$query = $this->db->get();
		return $query;
	}

	function getTotalKajian($id){
		$this->db->select('*');
		$this->db->from('t_konfirmasi');
		$this->db->where('id_user',$id);
		$query = $this->db->get();
		return$query->num_rows();
	}

	//get Peserta belum absen pada jadwal itu
	/*function getBelumAbsen($idJadwal){
		$this->db->select('*');
		$this->db->from('user,t_konfirmasi');
		$this->db->where('t_konfirmasi.id_jadwal',$idJadwal);
		$this->db->where('user.id_user != t_konfirmasi.id_user');
		$query = $this->db->get();
		return $query;
	}*/
	
	function InputLog($id_user, $ket){
		$data = array(
			'id_user' => $id_user,
			'keterangan' =>$ket,
			'tanggal' => date('Y-m-d'));
		$this->db->insert('t_log', $data);
	}

	//get log aktifitas
	function getLog($id){
		$this->db->where('id_user',$id);
		$this->db->order_by("tanggal", "DESC");
		$this->db->limit(3);
		return $this->db->get('t_log');
	}
	function getAllLog($id){
		$this->db->where('id_user',$id);
		$this->db->order_by("id_log", "DESC");
		return $this->db->get('t_log');
	}

	//Notifikasi Pengumuman
	function getNotif(){
		$this->db->select('*');
		$this->db->order_by("id_notifikasi", "DESC");
		$this->db->limit(3);
		return $this->db->get('t_notifikasi');
	}


	///input Peserta
	function save($password,$id_kategori){
		$data = array(

				'FName' => $this->input->post('FName'),

				'MName' => $this->input->post('MName'),

				'LName' => $this->input->post('LName'),

				'no_ktp' => $this->input->post('no_ktp'),

				'email' => $this->input->post('email'),

				'city' => $this->input->post('city'),

				'country' => $this->input->post('country'),

				'poscode' => $this->input->post('poscode'),

				'phone' => $this->input->post('phoneCode').$this->input->post('phone'),

				'wilayah_shu' => $this->input->post('wilayah_shu'),

				'penanggung_jawab' => $this->input->post('penanggung_jawab'),

				'id_kategori' => $id_kategori,

				'user' => $this->input->post('phone'),

				'pass' => $this->encryption->encrypt($password));

			$this->db->insert('user', $data);
			return $this->db->insert_id();
	}

	function save_privilege($id_privilege,$id_user){
		$data = array(

				'id_privilege' => $id_privilege,

				'id_user' => $id_user);

			$this->db->insert('user_privilege', $data);
	}

	///update data peserta BY ADMIN
	function update_data(){
		$data = array(
			'FName' => $this->input->post('FName'),
			'MName' => $this->input->post('MName'),
			'LName' => $this->input->post('LName'),
			'no_ktp' => $this->input->post('no_ktp'),
			'email' => $this->input->post('email'),
			'AddLine' => $this->input->post('AddLine'),
			'city' => $this->input->post('city'),
			'province' => $this->input->post('province'),
			'country' => $this->input->post('country'),
			'phone' => $this->input->post('phone'),
			'wilayah_shu' => $this->input->post('wilayah_shu'),
			'penanggung_jawab' => $this->input->post('penanggung_jawab'),
			'poscode' => $this->input->post('poscode'),
			'user' => $this->input->post('user'),
			'pass' => $this->encryption->encrypt($this->input->post('pass')));
		$this->db->where('id_user',$this->input->post('id_user'));
		$this->db->update('user', $data);
	}

	function update_password($new_password){
		$data = array(
			'pass' => $this->encryption->encrypt($new_password));
		$this->db->where('id_user',$this->input->post('id_user'));
		$this->db->update('user', $data);
	}


	//update Profile User

	function update_profile(){
		$data = array(
			'FName' => $this->input->post('FName'),
			'MName' => $this->input->post('MName'),
			'LName' => $this->input->post('LName'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'no_ktp' => $this->input->post('no_ktp'),
			'email' => $this->input->post('email'),
			'AddLine' => $this->input->post('AddLine'),
			'city' => $this->input->post('city'),
			'country' => $this->input->post('country'),
			'poscode' => $this->input->post('poscode'));
		$this->db->where('id_user',$this->input->post('id_user'));
		$this->db->update('user', $data);
	}

	//update Kelas
	function update_kelas(){
		$data = array(
			'id_kategori' => $this->input->post('id_kategori'));
		$this->db->where('id_user',$this->input->post('id_user'));
		$this->db->update('user', $data);
	}


	function update_photo($file){
		$data = array(
			'file_photo' => $file);
		$this->db->where('id_user',$this->input->post('id_user'));
		$this->db->update('user', $data);
	}
	//delete4 user
	function delete($id){
		$this->db->where('id_user', $id);
		$this->db->delete(array('user_privilege','t_log','user'));
	}

	//delete pengajar
	function DeletePengajar($id){

		$query = " DELETE FROM t_konfirmasi WHERE id_jadwal  IN (SELECT id_jadwal FROM t_jadwal WHERE  id_user = ".$id." )";
		$this->db->query($query);
		$this->db->where('id_user', $id);
		$this->db->delete(array('t_mengampu','t_jadwal','t_log','user_privilege','user'));
	}
	///

	function SettingAccount(){
		$data = array(
			'user' => $this->input->post('user'),
			'FName'=> $this->input->post('FName'));
		$this->db->where('id_user',$this->input->post('id_user'));
		$this->db->update('user', $data);
	}

	function SettingPass(){
		$data = array(
			'pass' => $this->encryption->encrypt($this->input->post('new_password')));
		$this->db->where('id_user',$this->input->post('id_user'));
		$this->db->update('user', $data);
	}



	function filename_exists($username){
		$this->db->select('*'); 
	    $this->db->from('user');
	    $this->db->where('user', $username);
	    $query = $this->db->get();
	    $result = $query->result_array();
	    return $result;
	}

	function cekUsername(){
		$user =$this->input->post('user');
		$id = $this->input->post('id_user');
		$this->db->select('*');
		$this->db->where('user', $user);
		$this->db->where('id_user !=',$id);
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


	//Simpan Upload Kelengkapan
	function update_ktp($file_ktp){
		$data = array(
			'file_ktp' => $file_ktp);
		$this->db->where('id_user',$this->input->post('id_user'));
		$this->db->update('user', $data);
	}
	//KK
	function update_kk($file_kk){
		$data = array(
			'file_kk' => $file_kk);
		$this->db->where('id_user',$this->input->post('id_user'));
		$this->db->update('user', $data);
	}

	// buku nikah
	function update_buku_nikah($file_buku_nikah){
		$data = array(
			'file_buku_nikah' => $file_buku_nikah);
		$this->db->where('id_user',$this->input->post('id_user'));
		$this->db->update('user', $data);
	}
	//minigitis
	function update_miningitis($file_miningitis){
		$data = array(
			'file_miningitis' => $file_miningitis);
		$this->db->where('id_user',$this->input->post('id_user'));
		$this->db->update('user', $data);
	}
	//surat ijin umrah
	function update_surat_ijin($file_surat_ijin){
		$data = array(
			'file_surat_ijin' => $file_surat_ijin);
		$this->db->where('id_user',$this->input->post('id_user'));
		$this->db->update('user', $data);
	}
	//tanggal umrah
	function update_tanggal_umrah(){
		$data = array(
			'tanggal_umroh' => $this->input->post('tanggal_umroh'));
		$this->db->where('id_user',$this->input->post('id_user'));
		$this->db->update('user', $data);
	}
}


?>