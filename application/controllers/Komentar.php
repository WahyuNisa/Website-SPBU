<?php
class Komentar extends CI_Controller {
function index()
{
$this->load->view('add_komentar');
}
function tampil_komentar() {
	$this->load->model('MKomentar');
	$data['hasil'] = $this->MKomentar->tampil();
	$this->load->view('tampil_komentar', $data);

}
function simpan_komentar()
{
	if($this->input->post('simpan')) {
		$this->load->model('MKomentar');
		$this->MKomentar->simpan_data_komentar();
		redirect ('Komentar/tampil_komentar', $data);
	}
}

function hapus_komentar($kd) {
	$this->load->model('MKomentar');
	$hasil = $this->MKomentar>hapus($kd);
	 if ($hasil){
    echo "Hapus data berhasil";
  }else{
    echo "Hapus data gagal";
  }
  echo "<br/>";
  echo anchor('Komentar', 'Kembali');
 }
 
 function update_komentar($id){
	$this->load->model('MKomentar');
	if(isset($_POST['edit'])){
		$data=array('nama' => $_POST['nama'],'komentar' => $_POST['isi_komentar'],
		'id_data' => $_POST['id_data']);
		$this->MKomentar>editData('komentar','id_komentar',$id,$data);
		echo "<script>alert('Update Data Sukses');window.location.replace(document.referrer)</script>";
		//window.location.replace(document.referrer) -> Kembali dan refresh halaman sebelumnya
	}else{		
		$data['hasil'] = $this->MKomentar->tampilPilihan($id);
		$this->load->view('edit_komentar', $data);
	}
}
		
}
?>