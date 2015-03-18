<?php
class MProduk extends CI_Model {
function tampil() {
	$baca = $this->db->get('produk');
	if ($baca->num_rows> 0){
		foreach ($baca->result() as $data){
			$hasil[] = $data;
		}
		return $hasil;
	}
		
}
function tampilPilihan($id) {
	$this->db->select()->from('produk')->where('id_produk',$id);
	$query=$this->db->get();
	return $query->first_row('array');
		
}
function editData($tbl,$key,$id,$data){
			$this->db->where($key,$id);
			$this->db->update($tbl,$data);
		}
function simpan_data_produk()
{
	$id_produk  = $this->input->post('id_produk');  
	$id_data  = $this->input->post('id_data');
	$nama = $this->input->post('nama');
	
	$data = array(
			'id_produk'=>$id_produk,
			'id_data'=>$id_data,
			'nama'=>$nama,
			
	);
	$this->db->insert('produk', $data);
}
public function hapus($kd)
 {
  $this->db->where('id_produk', $kd);
  $hasil=$this->db->delete('produk');
  return $hasil;
 }


		
}
?>