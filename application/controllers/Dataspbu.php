<?php
class Dataspbu extends CI_Controller {
function index ()
{
	$this->load->view('header');
	$this->load->model('MDataspbu');
	$data['hasil'] = $this->MDataspbu->tampilData('spbu');
	$this->load->view('beranda',$data);
	$this->load->view('footer');
}
function cari(){
	$this->load->view('header');
	if(isset($_POST['c'])){
		$p=$_POST["pilih"];
		$k=$_POST["cari"];
		$this->load->model('MDataspbu');
		if($p=="lokasi"){
			$data['hasil'] = $this->MDataspbu->cari('spbu',$p,$k);
		}else{
			$data['hasil'] = $this->MDataspbu->cari2('spbu',$p,$k);
		}		
		$this->load->view('cari',$data);
	}else{
		$this->load->view('cari');
		$this->load->view('footer');
	}
}

function komen(){
	$this->load->model('MDataspbu');
	$data=array('nama' => $_POST['nm'],'komentar' => $_POST['txt'],'id_data' => $_POST['id']);
	$this->MDataspbu->tambahData('komentar',$data);
	echo "<script>alert('Terima Kasih Telah Berkomentar');window.location.replace(document.referrer)</script>";
}
function fasilitas(){
	$this->load->view('header');
	$this->load->model('MDataspbu');
	$data['spbu'] = $this->MDataspbu->tampilData('spbu');
	$this->load->view('fasilitas',$data);
	$this->load->view('footer');
}
function tampil_dataspbu() {
	$this->load->model('MDataspbu');
	$data['hasil'] = $this->MUser->tampil();
	$this->load->view('tampil_dataspbu',$data);
	
}

function detailData($id){
	$this->load->view('header');
	$this->load->model('MDataspbu');
	$data['hasil'] = $this->MDataspbu->tampilJoin($id);
	$data['kom'] =$this->MDataspbu->tampilKomen($id);
	$this->load->view('detail',$data);
	$this->load->view('footer');
}

function tampilData($namaTabel){ // Menampilkan Profil, Guru Pengajar, 
			$this->load->view('header');
			$data['isi']=$this->IO->tampilData($namaTabel);
			$this->load->view($namaTabel,$data);
			$this->load->view('footer');
		}
		
function simpan_data_user()
{
	if($this->input->post('simpan')) {
		$this->load->model('MDataspbu');
		$this->MDataspbu->simpan_data_dataspbu();
		redirect ('Mdataspbu/index');
	}
}

function hapus_user($kd) {
		$this->load->model('MDataspbu');
		$hasil = $this->MDataspbu->hapus($kd);
		if ($hasil){
	echo "Hapus data berhasil";
	}else{
		echo "Hapus data gagal";
	}
	echo "<br/>";
	echo anchor ('MDataspbu', 'Kembali');
	}
}
?>