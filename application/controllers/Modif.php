<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Modif extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{
		$this->load->view('home');
	}
	public function about()
	{
		$this->load->view('about');
	}
	public function services()
	{
		$this->load->view('services');
	}
	public function portfolio()
	{
		$this->load->view('portfolio');
	}
	public function Daftarlaporan()
	{
		$this->load->view('Daftarlaporan');
	}
	public function lapor()
	{
		$this->load->view('v_lapor');
	}
	public function login()
	{
		$this->load->view('login');
	}
	public function registrasi()
	{
		$this->load->view('registrasi');
	}





}
