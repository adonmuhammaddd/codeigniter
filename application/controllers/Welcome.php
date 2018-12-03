<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
		$data['pageTitle'] = 'KCDEV is Awesome';
    $data['pesanPertama'] = 'Hello from your EX';
    $data['pesanKedua'] = 'Hello';
    $data['pesanKetiga'] = 'Data ini dari Controller Welcome';

		// Memanggil model alumni
    $this->load->model('model_alumni');

    // Mengambil data alumni dari fungsi getAlumni pada model_alumni
    $data['alumni'] = $this->model_alumni->getAlumni();

		$this->load->view('welcome_message');
	}
}
