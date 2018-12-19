<?php 
 
 
class Crud extends CI_Controller{
 
	function __construct(){
		parent::__construct();		
		$this->load->model('m_data');
		$this->load->helper('url');
 
	}
 
	function index(){
		$data['laporan'] = $this->m_data->tampil_data()->result();
		$this->load->view('v_tampil',$data);
	}
 
	function tambah(){
		$this->load->view('v_lapor');
	}

	function tambah_aksi(){
		$nik = $this->input->post('nik');
		$nama = $this->input->post('nama');
		$subjek = $this->input->post('subjek');
		$alamat = $this->input->post('alamat');
		$pesan = $this->input->post('pesan');
 
		$data = array(
			'nik' => $nik,
			'nama' => $nama,
			'subjek' => $subjek,
			'alamat' => $alamat,
			'pesan' => $pesan,
			);
		$this->m_data->input_data($data,'laporan');
		redirect('crud/index');
	}

	function hapus($id){
		$where = array('id' => $id);
		$this->m_data->hapus_data($where,'laporan');
		redirect('crud/index');
	}

	function edit($id){
		$where = array('id' => $id);
		$data['user'] = $this->m_data->edit_data($where,'laporan')->result();
		$this->load->view('v_edit',$data);
	}

	function update(){
	$id = $this->input->post('id');
	$nik = $this->input->post('nik');
	$subjek = $this->input->post('subjek');
	$alamat = $this->input->post('alamat');
	$pesan = $this->input->post('pesan');
 
	$data = array(
		'nik' => $nik,
		'nama' => $nama,
		'subjek' => $subjek,
		'alamat' => $alamat,
		'pesan' => $pesan,
	);
 
	$where = array(
		'id' => $id
	);
 
	$this->m_data->update_data($where,$data,'laporan');
	redirect('crud/index');
}
 
}