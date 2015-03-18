<?php
class User extends CI_Controller {
function index()
{
$this->load->view('add_user');
}
function tampil_user() {
	$this->load->model('MUser');
	$data['hasil'] = $this->MUser->tampil();
	$this->load->view('tampil_user', $data);

}
function simpan_user()
{
	if($this->input->post('simpan')) {
		$this->load->model('MUser');
		$this->MUser->simpan_data_user();
		redirect ('User/tampil_user', $data);
	}
}

function hapus_user($kd) {
	$this->load->model('MUser');
	$hasil = $this->MUser->hapus($kd);
	 if ($hasil){
    echo "Hapus data berhasil";
  }else{
    echo "Hapus data gagal";
  }
  echo "<br/>";
  echo anchor('User', 'Kembali');
 }
 
 function update_user($id){
	$this->load->model('MUser');
	if(isset($_POST['edit'])){
		$data=array('username' => $_POST['nama'],'password' => $_POST['pass']);
		$this->MUser->editData('user','id_user',$id,$data);
		echo "<script>alert('Update Data Sukses');window.location.replace(document.referrer)</script>";
		//window.location.replace(document.referrer) -> Kembali dan refresh halaman sebelumnya
	}else{		
		$data['hasil'] = $this->MUser->tampilPilihan($id);
		$this->load->view('edit_user', $data);
	}
}
		
}
?>