<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct()
	{
		//load model and add alias
		parent::__construct();

			$this->load->model('M_pengguna', 'pengguna');

	}


	public function index() {

		$this->load->view('pengguna/v_pengguna');

	}

  public function tambah_pengguna() {

    $data['konten'] = 'pengguna/v_tambah_pengguna';

    $this->load->view('template_admin', $data);

  }

  public function proses_tambah() {

  }

  public function edit_pengguna() {
    $this->load->view('pengguna/v_edit_pengguna');
  }

  public function proses_edit() {

  }

  public function hapus_pengguna() {

  }

}
