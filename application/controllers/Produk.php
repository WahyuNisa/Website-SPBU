<?php
class Produk extends CI_Controller {
function index()
{
$this->load->view('add_produk');
}
function tampil_produk() {
	$this->load->model('MProduk');
	$data['hasil'] = $this->MProduk>tampil();
	$this->load->view('tampil_produk', $data);

}
function simpan_produk()
{
	if($this->input->post('simpan')) {
		$this->load->model('MProduk');
		$this->MProduk->simpan_data_produk();
		redirect ('Produk/tampil_produk', $data);
	}
}

function hapus_produk($kd) {
	$this->load->model('MProduk');
	$hasil = $this->MProduk>hapus($kd);
	 if ($hasil){
    echo "Hapus data berhasil";
  }else{
    echo "Hapus data gagal";
  }
  echo "<br/>";
  echo anchor('Produk', 'Kembali');
 }
 
 function update_produk($id){
	$this->load->model('MProduk');
	if(isset($_POST['edit'])){
		$data=array('id_data' => $_POST['id_data'],'nama' => $_POST['nama_produk']);
		$this->MProduk>editData('produk','id_produk',$id,$data);
		echo "<script>alert('Update Data Sukses');window.location.replace(document.referrer)</script>";
		//window.location.replace(document.referrer) -> Kembali dan refresh halaman sebelumnya
	}else{		
		$data['hasil'] = $this->MProduk->tampilPilihan($id);
		$this->load->view('edit_produk', $data);
	}
}
		
}
?>