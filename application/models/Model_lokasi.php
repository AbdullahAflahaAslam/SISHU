<?php 
/**
* 
*/
class Model_Lokasi extends CI_model
{
	function getAll(){
		return $this->db->get('t_lokasi');
	}
	
	function getByID($id){
		$this->db->select('*');
		$this->db->from('t_lokasi');
		$this->db->where('id_lokasi',$id);
		$query = $this->db->get();
		return $query;
	}

	function save(){
	$data = array(
		'add_line' => $this->input->post('add_line'),
		'province' => $this->input->post('province'),
		'city' => $this->input->post('city'));
	$this->db->insert('t_lokasi', $data);
	}

	function update(){
		$data = array(
			'add_line' => $this->input->post('add_line'),
			'province' => $this->input->post('province'),
			'city' => $this->input->post('city'));
		$this->db->where('id_lokasi',$this->input->post('id_lokasi'));
		$this->db->update('t_lokasi', $data);
	}
	function delete($id){
		$this->db->where('id_lokasi', $id);
		$this->db->delete('t_lokasi');
	}
}


?>