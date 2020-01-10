<?php 
/**
* 
*/
class Model_Jadwal extends CI_model
{
	function getAll(){

			$this->db->select('*');
			$this->db->from('t_jadwal, t_lokasi,t_materi,user');
			$this->db->where('t_lokasi.id_lokasi = t_jadwal.id_lokasi');
			$this->db->where('t_materi.id_materi = t_jadwal.id_materi');
			$this->db->where('user.id_user = t_jadwal.id_user');			
			$this->db->order_by('t_jadwal.id_jadwal', 'desc');
			$query = $this->db->get();
			return $query;
	}
	
	

	/*function getUserConfirm($idJadwal){
		$this->db->select('id_user');
		$this->db->from('t_konfirmasi');
		$this->db->where('id_jadwal',$idJadwal);
		return  $this->db->get()->result();
	}*/

	//untuk melihat user yang belum konfirmasi berdasarkan id jadwal
	function getUserNotConfirm($idJadwal){
		$query = "SELECT * FROM user, user_privilege WHERE user.id_user NOT IN (SELECT t_konfirmasi.id_user FROM t_konfirmasi WHERE t_konfirmasi.		id_jadwal = ".$idJadwal." AND absensi = 2) AND user_privilege.id_user = user.id_user AND user_privilege.id_privilege = 1";
		//$query = "SELECT * FROM user WHERE id_user  NOT IN (SELECT id_user FROM t_konfirmasi WHERE  id_jadwal = ".$idJadwal.")";
		return  $this->db->query($query);
	}

	function getKonfirmasiById($id){
		$this->db->select('*');
		$this->db->from('user, t_konfirmasi');
		$this->db->where('t_konfirmasi.id_jadwal',$id);
		$this->db->where('user.id_user = t_konfirmasi.id_user');
		$query = $this->db->get();
		return $query;
	}

	//cek apakah user sudah konfirmasi
	function cekConfirm($id_user,$id_jadwal){
		$this->db->select('*');
		$this->db->from('t_konfirmasi');
		$this->db->where('id_jadwal',$id_jadwal);
		$this->db->where('id_user',$id_user);
		$query = $this->db->get();
		return $query;
	}

	//untuk mengambil data yang pernah di ikuti berdasarkan id user
	function getKonfirmasiByIdUser($id){
		$query = " SELECT * FROM t_materi WHERE id_materi  IN (SELECT id_materi FROM t_konfirmasi WHERE  id_user = ".$id." ) ORDER BY id_kategori ASC";
		return  $this->db->query($query);
	}


	//untuk mengambil data yang belum pernah di ikuti berdasarkan id user
	function getNotKonfirmasiByIdUser($id){
		$query = "SELECT * FROM t_materi WHERE id_materi NOT IN (SELECT id_materi FROM t_konfirmasi WHERE  id_user = ".$id.")ORDER BY id_kategori ASC";
		return  $this->db->query($query);
	}

	function getJadwalById($id){
		$this->db->select('*');
		$this->db->from('t_jadwal,t_materi,t_lokasi');
		$this->db->where('t_jadwal.id_jadwal',$id);
		$this->db->where('t_materi.id_materi = t_jadwal.id_materi');
		$this->db->where('t_lokasi.id_lokasi = t_jadwal.id_lokasi');
		$query = $this->db->get();
		return $query;
	}

	//simpan absensi
	function simpanAbsensi($id_user){
		$data = array(
			'id_user' => $id_user,
			'id_jadwal' => $this->input->post('id_jadwal'),
			'id_materi' => $this->input->post('id_materi'),
			'absensi' => 2);
		$this->db->insert('t_konfirmasi', $data);
	}

	//update absensi jika sudah ada
	function updateAbsensi($id_user, $id_jadwal){
		$data = array(
			'absensi' =>2);
		$this->db->where('id_jadwal',$id_jadwal);
		$this->db->where('id_user',$id_user);
		$this->db->update('t_konfirmasi', $data);
	}


	function cekAbsensi($id_user,$id_jadwal){
		$this->db->select('*');
		$this->db->from('t_konfirmasi');
		$this->db->where('id_user',$id_user);
		$this->db->where('id_jadwal',$id_jadwal);
		$query = $this->db->get();
		return $query;
	}

	//delete absensi
	function DeleteAbsensi($id){
		$this->db->where('id_konfirmasi', $id);
		$this->db->delete('t_konfirmasi');
	}


	function save(){
		$data = array(
			'id_materi' => $this->input->post('id_materi'),
			'id_lokasi' => $this->input->post('id_lokasi'),
			'id_user' => $this->input->post('id_pengajar'),
			'tanggal' => $this->input->post('tanggal'),
			'jam' => $this->input->post('jam'),
			'id_admin' => $this->input->post('id_admin'),
			'keterangan' => $this->input->post('keterangan'));
		$this->db->insert('t_jadwal', $data);
	}
	

	function delete($id){
		$this->db->where('id_jadwal', $id);
		$this->db->delete(array('t_konfirmasi','t_jadwal'));
	}

	function update($id){
		$data = array(
			'id_materi' => $this->input->post('id_materi'),
			'id_lokasi' => $this->input->post('id_lokasi'),
			'id_user' => $this->input->post('id_pengajar'),
			'tanggal' => $this->input->post('tanggal'),
			'jam' => $this->input->post('jam'),
			'tanggal' => $this->input->post('tanggal'),
			'keterangan' => $this->input->post('keterangan'));
		$this->db->where('id_jadwal',$this->input->post('id_jadwal'));
		$this->db->update('t_jadwal', $data);
	}

	function InputNotifikasi(){
		$data = array(
			'judul' => $this->input->post('judul'),
			'jenis' => $this->input->post('jenis'),
			'keterangan' => $this->input->post('keterangan'));
		$this->db->insert('t_notifikasi', $data);
	}


	//jek jadwal
	function cekJadwal(){
		$user =$this->input->post('id_pengajar');
		$tanggal = $this->input->post('tanggal');
		$jam = $this->input->post('jam');
		$this->db->select('*');
		$this->db->where('id_user', $user);
		$this->db->where('tanggal', $tanggal);
		$this->db->where('jam', $jam);
		$data = $this->db->get('t_jadwal')->row();
		//jika pengajar tumbukan jam tanggal
		if (!empty($data->id_jadwal)){
			return 0;

		}
		///jika pengajar longgar
		else {
			return 1;
		}
	}
}


?>