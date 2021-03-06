<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('Mod_faq');
	}

	public function index()
	{
		$data['list_faq'] = $this->Mod_faq->getAll();

		$this->template->build('index', $data);
	}

	public function create()
	{
		$this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
			
			$this->template->build('create');

		} else {
			$data['pertanyaan']			= set_value('pertanyaan');
			$data['jawaban']			= set_value('jawaban');

			$this->Mod_faq->create($data);

            set_message_success('FAQ berhasil ditambahkan.');

            redirect('faq/index');
		}
	}

	

	public function update($faq_id)
	{
		$this->form_validation->set_rules('pertanyaan', 'pertanyaan', 'trim|required');

		if ($this->form_validation->run() == FALSE) {
            
            $data['data'] = $this->Mod_faq->getById($faq_id);

            $this->template->build('update', $data);
			
		} else {
			
			$data = array(
				'pertanyaan'			=> set_value('pertanyaan'),
				'jawaban'				=> set_value('jawaban'),
			);

			$links = $this->Mod_faq->update($faq_id, $data);

			if ($data == TRUE) {

               set_message_success('FAQ Berhasi di Ubah');

               redirect('faq');
           } else {

                set_message_error('FAQ Gagal di Ubah');

                redirect('faq/update');

           }
		}
	}

	public function delete($faq_id)
	{
		$data = $this->Mod_faq->delete($faq_id);

		redirect('faq','refresh');
	}

}

/* End of file Faq.php */
/* Location: ./application/modules/faq/controllers/Faq.php */