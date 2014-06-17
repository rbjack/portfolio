<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MX_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');

		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[5]|max_length[50]|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|xss_clean');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
		$this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|exact_length[5]|alhpa_numeric');

		$data['title'] = 'Contact Richard Jackson &mdash; Front-End Web Developer';
		$data['module'] = 'contact';
		$data['view_file'] = 'form';

		if ($this->form_validation->run() !== false)
		{
			if ($this->session->userdata('security_code') === $this->input->post('captcha'))
			{
				$this->email->from($this->input->post('email'), $this->input->post('name'));
				$this->email->to('richard@rbjackson.com', 'Richard Jackson');
				$this->email->subject('Website Contact Form');
				$this->email->message($this->input->post('name'));
				$this->email->send();

				$data['view_file'] = 'thankyou';
			}
		}

		echo Modules::run('templates/portfolio', $data);
	}
}

/* End of file contact.php */
/* Location: .app/portfolio/application/modules/contact/controllers/contact.php */