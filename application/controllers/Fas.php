<?php
class Fas extends CI_Controller {
function index()
{
$this->load->view('add_fas');
}
function tampil_fas() {
	$this->load->model('MFas');
	$data['hasil'] = $this->MFas->tampil();
	$this->load->view('tampil_fas', $data);

}
function simpan_fas()
{
	if($this->input->post('simpan')) {
		$this->load->model('MFas');
		$this->MFas->simpan_data_fas();
		redirect ('Fas/tampil_fas', $data);
	}
}

function hapus_fas($kd) {
	$this->load->model('MFas');
	$hasil = $this->MFas->hapus($kd);
	 if ($hasil){
    echo "Hapus data berhasil";
  }else{
    echo "Hapus data gagal";
  }
  echo "<br/>";
  echo anchor('Fas', 'Kembali');
 }
 
 function update_fas($id){
	$this->load->model('MFas');
	if(isset($_POST['edit'])){
		$data=array('id_data' => $_POST['nomor_fasilitas'],'nama' => $_POST['nama_Fasilitas']);
		$this->MFas->editData('fas','id_fasilitas',$id,$data);
		echo "<script>alert('Update Data Sukses');window.location.replace(document.referrer)</script>";
		//window.location.replace(document.referrer) -> Kembali dan refresh halaman sebelumnya
	}else{		
		$data['hasil'] = $this->MFas->tampilPilihan($id);
		$this->load->view('edit_fas', $data);
	}
}
		
}
?>