<?php
class MFas extends CI_Model {
function tampil() {
	$baca = $this->db->get('fas');
	if ($baca->num_rows> 0){
		foreach ($baca->result() as $data){
			$hasil[] = $data;
		}
		return $hasil;
	}
		
}
function tampilPilihan($id) {
	$this->db->select()->from('fas')->where('id_fasilitas',$id);
	$query=$this->db->get();
	return $query->first_row('array');
		
}
function editData($tbl,$key,$id,$data){
			$this->db->where($key,$id);
			$this->db->update($tbl,$data);
		}
function simpan_data_fas()
{
	$id_data  = $this->input->post('id_data');  
	$nama  = $this->input->post('nama');  
	
	$data = array(
			'id_data'=>$id_data,
			'nama'=>$nama,
			
	);
	$this->db->insert('fas', $data);
}
public function hapus($kd)
 {
  $this->db->where('id_fasilitas', $kd);
  $hasil=$this->db->delete('fas');
  return $hasil;
 }


		
}
?>