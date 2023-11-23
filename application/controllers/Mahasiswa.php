<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Mahasiswa.php
 *
 * This controller for ...
 *
 * @package   CodeIgniter
 * @category  Controller CI
 * @author    Setiawan Jodi <jodisetiawan@fisip-untirta.ac.id>
 * @author    Raul Guerrero <r.g.c@me.com>
 * @link      https://github.com/setdjod/myci-extension/
 * @param     ...
 * @return    ...
 *
 */

class Mahasiswa extends CI_Controller
{

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mahasiswa_model');
		$this->load->model('Prodi_model');
	}

	public function index()
	{
		$data['judul'] = "Halaman Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header",$data);
		$this->load->view("mahasiswa/vw_mahasiswa", $data);
		$this->load->view("layout/footer");
	}
	public function tambah()
	{
		$data['judul'] = "Halaman Tambah Mahasiswa";
		$data['prodi'] = $this->Prodi_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header",$data);
		$this->load->view("mahasiswa/vw_tambah_mahasiswa", $data);
		$this->load->view("layout/footer");
	}
	public function detail($id)
	{
		$data['judul'] = "Halaman Detail Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header",$data);
		$this->load->view("mahasiswa/vw_detail", $data);
		$this->load->view("layout/footer");
	}

	public function hapus($id)
	{
		$this->Mahasiswa_model->delete($id);
		redirect('Mahasiswa');
	}
	function upload()
	{
		$data = [
			'nama' => $this->input->POST('nama'),
			'nim' => $this->input->POST('nim'),
			'email' => $this->input->POST('email'),
			'prodi' => $this->input->POST('prodi'),
			'alamat' => $this->input->POST('alamat'),
			'jenis_kelamin' => $this->input->POST('jenis_kelamin'),
			'asal_sekolah' => $this->input->POST('asal_sekolah'),
			'no_hp' => $this->input->POST('no_hp'),

		];
		$this->Mahasiswa_model->insert($data);
		redirect('Mahasiswa');
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Mahasiswa";
		$data['mahasiswa'] = $this->Mahasiswa_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header",$data);
		$this->load->view("mahasiswa/vw_ubah_mahasiswa", $data);
		$this->load->view("layout/footer");
	}
	public function update()
	{
		$data = [
			'nama' => $this->input->POST('nama'),
			'nim' => $this->input->POST('nim'),
			'email' => $this->input->POST('email'),
			'prodi' => $this->input->POST('prodi'),
			'alamat' => $this->input->POST('alamat'),
			'jenis_kelamin' => $this->input->POST('jenis_kelamin'),
			'asal_sekolah' => $this->input->POST('asal_sekolah'),
			'no_hp' => $this->input->POST('no_hp'),
		];
		$id = $this->input->POST('id');
		$this->Mahasiswa_model->update(['id' => $id], $data);
		redirect('Mahasiswa');
	}
}


/* End of file Mahasiswa.php.php */
/* Location: ./application/controllers/Mahasiswa.php.php */
