<?php 
/**
* 
*/
class Model_Materi extends CI_model
{
	function getAll(){

		return $this->db->get('t_materi');
	}

	function getKatMateri(){
		$this->db->select('*');
		$this->db->from('t_materi,t_kategori');
		$this->db->where('t_kategori.id_kategori = t_materi.id_kategori');
		$query = $this->db->get();
		return $query;
	}

	function getKategori(){
		return $this->db->get('t_kategori');
	}
	 
	 //untuk mendapatkan kategori paling baru
	function getTopKategori(){
		$this->db->select('*');
		$this->db->from('t_kategori');
		$this->db->order_by("id_kategori", "DESC");
		$this->db->limit(1);
		$query = $this->db->get();
		return $query->row()->id_kategori;
	
	}

	function getKategoriByID($id){
		$this->db->select('*');
		$this->db->from('t_kategori');
		$this->db->where('id_kategori',$id);
		$query = $this->db->get();
		return $query;
	}

	function delete($id){
		$this->db->where('id_materi', $id);
		$this->db->delete('t_materi');
	}


	//untuk update kategori user yang kategorinya di delete
	function UpdateUser_Kategori($id,$id_kategori){
		$data = array(
			'id_kategori' => $id_kategori);
		$this->db->where('id_kategori',$id);
		$this->db->update('user', $data);
	}


	//save materi dan keterangan
	function save(){
		$data = array(
			'nama_materi' => $this->input->post('nama_materi'),
			'id_kategori' => $this->input->post('id_kategori'),
			'Keterangan' => $this->input->post('Keterangan'));
		$this->db->insert('t_materi', $data);
		return $this->db->insert_id();

	}
	//update materi
	function savefile($id_materi,$file_materi){
		$data = array(
			'file_materi' =>$file_materi);
		$this->db->where('id_materi',$id_materi);
		$this->db->update('t_materi', $data);
	}

	function saveKategori(){
		$data = array(
			'Kategori' => $this->input->post('Kategori'),
			'keterangan' => $this->input->post('keterangan'));
		$this->db->insert('t_kategori', $data);
	}

	function getMateriByIdKat($id){
		$this->db->select('*');
		$this->db->from('t_materi');
		$this->db->where('id_kategori',$id);
		$query = $this->db->get();
		return $query;
	}

	function getMateriById($id){
		$this->db->select('*');
		$this->db->from('t_materi,t_kategori');
		$this->db->where('t_kategori.id_kategori= t_materi.id_kategori');
		$this->db->where('t_materi.id_materi',$id);
		$query = $this->db->get();
		return $query;
	}
	


	function updateKategori(){
		$data = array(
			'Kategori' => $this->input->post('Kategori'),
			'keterangan' => $this->input->post('keterangan'));
		$this->db->where('id_kategori',$this->input->post('id_kategori'));
		$this->db->update('t_kategori', $data);
	}
	function updateMateri(){
		$data = array(
			'id_kategori' => $this->input->post('id_kategori'),
			'nama_materi' => $this->input->post('nama_materi'),
			'Keterangan' => $this->input->post('Keterangan'));
		$this->db->where('id_materi',$this->input->post('id_materi'));
		$this->db->update('t_materi', $data);
	}

	function DeleteKategori($id){

		$query1 = " DELETE FROM t_konfirmasi   WHERE id_materi  IN (SELECT id_materi FROM t_materi WHERE  id_kategori = ".$id." )";
		$this->db->query($query1);
		$query2 = " DELETE FROM t_jadwal   WHERE id_materi  IN (SELECT id_materi FROM t_materi WHERE  id_kategori = ".$id." )";
		$this->db->query($query2);
		$query3 = " DELETE FROM t_materi   WHERE id_kategori  = ".$id." ";
		$this->db->query($query3);
		
		$this->db->where('id_kategori', $id);
		$this->db->delete('t_kategori');
	}

	function DeleteMateri($id){
		$this->db->where('id_materi', $id);
		$this->db->delete(array('t_konfirmasi','t_jadwal','t_materi'));
	}

}


?>