<?php
class MSpbu extends CI_Model {
function tampil() {
	$baca = $this->db->get('spbu');
	if ($baca->num_rows> 0){
		foreach ($baca->result() as $data){
			$hasil[] = $data;
		}
		return $hasil;
	}
		
}
function tampilPilihan($id) {
	$this->db->select()->from('spbu')->where('id_data',$id);
	$query=$this->db->get();
	return $query->first_row('array');
		
}
function editData($tbl,$key,$id,$data){
			$this->db->where($key,$id);
			$this->db->update($tbl,$data);
		}
function simpan_data_spbu()
{
	$id_spbu  = $this->input->post('id_spbu');  
	$lokasi  = $this->input->post('lokasi');
	$jam = $this->input->post('jam')
	$gambar = $this->input->post('gambar')
	$id_user = $this->input->post('id_user')
	
	$data = array(
			'id_spbu'=>$id_spbu,
			'lokasi'=>$lokasi,
			'jam'=>$jam,
			'gambar'=>$gambar,
			
	);
	$this->db->insert('spbu', $data);
}
public function hapus($kd)
 {
  $this->db->where('id_data', $kd);
  $hasil=$this->db->delete('spbu');
  return $hasil;
 }


		
}
?>