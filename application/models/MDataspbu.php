<?php
class MDataspbu extends CI_Model {


function tampil() {
	$baca = $this->db->get('dataspbu');
	if ($baca->num_rows> 0) {
		foreach ($baca->result()as $data) {
			$hasil[] = $data;
		}
		return $hasil;
	}
	
}
function simpan_data_dataspbu()
{
	$id_spbu = $this->input->post('id_spbu');
	$id_fasilitas = $this->input->post('id_fasilitas');
	$id_produk = $this->input->post('id_produk');
	$alamat = $this->input->post('alamat');
	$jam = $this->input->post('jam');
	$data = array(
			'id_spbu'=>$id_spbu,
			'id_fasilitas'=>$id_fasilitas,
			'id_produk'=>$id_produk,
			'alamat'=>$alamat,
			'jam'=>$jam,
	);
	$this->db->insert('dataspbu', $data);
}
public function hapus($kd)
	{
	$this->db->where('id_spbu', $kd);
	$hasil=$this->db->delete('dataspbu');
	return $hasil;
	}
	function tampilData($namaTabel){
			$this->db->select()->from($namaTabel);
			$query=$this->db->get();
			return $query->result_array();
		}
	
	function tampilKomen($id){
		$this->db->select()->from('komentar')->where('id_data',$id);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	function tampilJoin($id){
		$this->db->select('*');
		$this->db->from('spbu');
		$this->db->join('fas', 'fas.id_data = spbu.id_data');
		$this->db->where('spbu.id_data',$id);
		$query = $this->db->get();
		
		//$this->db->select('*')->from->('spbu')->join('fas','fas.id_data=spbu.id_data');
		//$dt=$this->db->get();
		return $query->result_array();
	}
	
	function tambahData($tbl,$data){
			$this->db->insert($tbl,$data);
		}
		
	function cari($t,$p,$k){
		$this->db->select()->from($t)->like($p,$k);
		$query=$this->db->get();
		return $query->result_array();
	}
	
	function cari2($t,$p,$k){
		$this->db->select()->from('fas')->join('spbu','spbu.id_data=fas.id_data')->like($p,$k);
		$query=$this->db->get();
		return $query->result_array();
	}
	function tampilDua($namaTabel1,$namaTabel2,$namaTabel3){
			$this->db->select($namatabel1.'.*,'.$namaTabel2.'.*'.$namaTabel3.'.*')->from($namatabel1)->join($namatabel2.','.$namatabel1.'.id_user='.$namatabel2.'.id_user');			
			$dt=$this->db->get();
			return $dt->result_array();
		}
}


		
?>