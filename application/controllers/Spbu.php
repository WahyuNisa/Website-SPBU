<?php
class Spbu extends CI_Controller {
function index()
{
$this->load->view('add_spbu');
}
function tampil_spbu() {
	$this->load->model('MSpbu');
	$data['hasil'] = $this->MSpbu->tampil();
	$this->load->view('tampil_spbu', $data);

}
function simpan_spbu()
{
	if($this->input->post('simpan')) {
		$this->load->model('MSpbu');
		$this->MSpbu->simpan_data_spbu();
		redirect ('Spbu/tampil_spbu', $data);
	}
}

function hapus_spbu($kd) {
	$this->load->model('MSpbu');
	$hasil = $this->MSpbu->hapus($kd);
	 if ($hasil){
    echo "Hapus data berhasil";
  }else{
    echo "Hapus data gagal";
  }
  echo "<br/>";
  echo anchor('Spbu', 'Kembali');
 }
 
 function update_spbu($id){
	$this->load->model('MSpbu');
	if(isset($_POST['edit'])){
		$data=array('id_spbu' => $_POST['kode_spbu'],'lokasi' => $_POST['lokasi_spbu'],
		'jam' => $_POST['jam_operasional'],'gambar' => $_POST['foto_spbu'], 'id_user' => $_POST['id_user']);
		$this->MSpbu->editData('spbu','id_data',$id,$data);
		echo "<script>alert('Update Data Sukses');window.location.replace(document.referrer)</script>";
		//window.location.replace(document.referrer) -> Kembali dan refresh halaman sebelumnya
	}else{		
		$data['hasil'] = $this->MSpbu->tampilPilihan($id);
		$this->load->view('edit_spbu', $data);
	}
}
		
}
?>