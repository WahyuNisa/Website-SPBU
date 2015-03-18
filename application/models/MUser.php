<?php
class MUser extends CI_Model {
function tampil() {
	$baca = $this->db->get('user');
	if ($baca->num_rows> 0){
		foreach ($baca->result() as $data){
			$hasil[] = $data;
		}
		return $hasil;
	}
		
}
function tampilPilihan($id) {
	$this->db->select()->from('user')->where('id_user',$id);
	$query=$this->db->get();
	return $query->first_row('array');
		
}
function editData($tbl,$key,$id,$data){
			$this->db->where($key,$id);
			$this->db->update($tbl,$data);
		}
function simpan_data_user()
{
	$username  = $this->input->post('username');  
	$password  = $this->input->post('password');  
	
	$data = array(
			'username'=>$username,
			'password'=>$password,
			
	);
	$this->db->insert('user', $data);
}
public function hapus($kd)
 {
  $this->db->where('id_user', $kd);
  $hasil=$this->db->delete('user');
  return $hasil;
 }


		
}
?>