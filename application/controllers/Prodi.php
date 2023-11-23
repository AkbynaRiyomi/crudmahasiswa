<?php
defined('BASEPATH') or exit('No direct script access allowed');


/**
 *
 * Controller Prodi
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

class Prodi extends CI_Controller
{
    
  public function __construct()
  {
    parent::__construct();
	$this->load->model('Prodi_model');
  }

	public function index()
	{
		$data['judul'] = "Halaman Prodi";
		$data['prodi']= $this->Prodi_model->get();
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header",$data);
		$this->load->view("prodi/vw_prodi", $data);
		$this->load->view("layout/footer");
	}
	public function tambah()
	{
		$data['judul'] = "Halaman Tambah Prodi";
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("prodi/vw_tambah_prodi", $data);
		$this->load->view("layout/footer");
	}

	public function hapus($id){
		$this->Prodi_model->delete($id);
		redirect('Prodi');
	}
	function upload()
	{
		$data = [
			'nama' => $this->input->POST('nama'),
			'ruangan' => $this->input->POST('ruangan'),
			'jurusan' => $this->input->POST('jurusan'),
			'akreditasi' => $this->input->POST('akreditasi'),
			'nama_kaprodi' => $this->input->POST('nama_kaprodi'),
			'tahun_berdiri' => $this->input->POST('tahun_berdiri'),
			'output_lulusan' => $this->input->POST('output_lulusan'),
		];
		$this->Prodi_model->insert($data);
		redirect('Prodi');
	}
	public function edit($id)
	{
		$data['judul'] = "Halaman Edit Prodi";
		$data['prodi'] = $this->Prodi_model->getById($id);
		$data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view("layout/header", $data);
		$this->load->view("prodi/vw_ubah_prodi", $data);
		$this->load->view("layout/footer");
	}
	public function update()
	{
		$data = [
			'nama' => $this->input->POST('nama'),
			'ruangan' => $this->input->POST('ruangan'),
			'jurusan' => $this->input->POST('jurusan'),
			'akreditasi' => $this->input->POST('akreditasi'),
			'nama_kaprodi' => $this->input->POST('nama_kaprodi'),
			'tahun_berdiri' => $this->input->POST('tahun_berdiri'),
			'output_lulusan' => $this->input->POST('output_lulusan'),
		];
		$id = $this->input->POST('id');
		$this->Prodi_model->update(['id' => $id], $data);
		redirect('Prodi');
	}
}


/* End of file Prodi.php */
/* Location: ./application/controllers/Prodi.php */
