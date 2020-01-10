<?php 
/**
* 
*/
class Model_Kelas extends CI_model
{
	function getAll(){
		$this->db->select('*');
		$this->db->from('t_kelas,t_kategori,t_lokasi');
		$this->db->where('t_kelas.id_kategori = t_kategori.id_kategori');
		$this->db->where('t_kelas.id_lokasi = t_lokasi.id_lokasi');
		$query = $this->db->get();
		return $query;
	}


	function getKelasBy($id){
		$this->db->select('*');
		$this->db->from('t_kelas,t_lokasi,t_kategori');
		$this->db->where('t_kelas.id_kelas',$id);
		$query = $this->db->get();
		return $query;
	}

	function save(){
	$data = array(
		'nama_kelas' => $this->input->post('nama_kelas'),
		'angkatan' => $this->input->post('angkatan'),
		'id_lokasi' => $this->input->post('id_lokasi'),
		'id_kategori' => $this->input->post('id_kategori'));
	$this->db->insert('t_kelas', $data);
	}
	function update(){
		$data = array(
			'nama_kelas' => $this->input->post('nama_kelas'),
			'angkatan' => $this->input->post('angkatan'),
			'id_lokasi' => $this->input->post('id_lokasi'),
			'id_kategori' => $this->input->post('id_kategori'));
		$this->db->where('id_kelas',$this->input->post('id_kelas'));
		$this->db->update('t_kelas', $data);
	}

	function getLokasi(){
		return $this->db->get('t_lokasi');
	}

	function DeleteKelas($id){
		$this->db->where('id_kelas', $id);
		$this->db->delete('t_kelas');
	}
	
	function getTopKelas(){
		$this->db->select('*');
		$this->db->from('t_kelas');
		$this->db->order_by("id_kelas", "DESC");
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row()->id_kelas;
	
	}
}


?>