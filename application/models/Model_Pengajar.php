<?php 
/**
* 
*/
class Model_Pengajar extends CI_model
{
		
	
	function save($password){
		$data = array(

				'FName' => $this->input->post('FName'),

				'add_line' => $this->input->post('add_line'),

				'city' => $this->input->post('city'),

				'province' => $this->input->post('province'),

				'country' => $this->input->post('country'),

				'email' => $this->input->post('email'),

				'phone' => $this->input->post('phoneCode').$this->input->post('phone'),

				'user' => $this->input->post('phone'),

				'pass' => $password);

			$this->db->insert('t_pengajar', $data);
	}

	//cek username pengajar
	function filename_exists($username){
		$this->db->select('*'); 
	    $this->db->from('t_pengajar');
	    $this->db->where('user', $username);
	    $query = $this->db->get();
	    $result = $query->result_array();
	    return $result;
	}

	function delete($id){
		$this->db->where('id_pengajar', $id);
		$this->db->delete('t_pengajar');
	}

	function getDataBy($id){
		$this->db->where('id_pengajar',$id);
		return $this->db->get('t_pengajar');
	}

	function update(){
		$data = array(

				'FName' => $this->input->post('FName'),

				'add_line' => $this->input->post('add_line'),

				'city' => $this->input->post('city'),

				'province' => $this->input->post('province'),

				'country' => $this->input->post('country'),

				'email' => $this->input->post('email'),

				'phone' => $this->input->post('phone'),

				'user' => $this->input->post('user'));

		$this->db->where('id_pengajar', $this->input->post('id_pengajar'));
		$this->db->update('t_pengajar', $data);
	}

}


?> 