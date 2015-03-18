<?php
class MKomentar extends CI_Model {
function tampil() {
	$baca = $this->db->get('komentar');
	if ($baca->num_rows> 0){
		foreach ($baca->result() as $data){
			$hasil[] = $data;
		}
		return $hasil;
	}
		
}
function tampilPilihan($id) {
	$this->db->select()->from('komentar')->where('id_komentar',$id);
	$query=$this->db->get();
	return $query->first_row('array');
		
}
function editData($tbl,$key,$id,$data){
			$this->db->where($key,$id);
			$this->db->update($tbl,$data);
		}
function simpan_data_komentar()
{
	$id_komentar  = $this->input->post('id_komentar');  
	$nama  = $this->input->post('nama');
	$komentar = $this->input->post('komentar');
	$id_data = $this->input->post('id_data');
	
	$data = array(
			'id_komentar'=>$id_komentar,
			'nama'=>$nama,
			'komentar'=>$komentar,
			'id_data'=>$id_data,
			
	);
	$this->db->insert('komentar', $data);
}
public function hapus($kd)
 {
  $this->db->where('id_komentar', $kd);
  $hasil=$this->db->delete('komentar');
  return $hasil;
 }


		
}
?>