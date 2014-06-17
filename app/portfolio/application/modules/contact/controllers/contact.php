<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MX_Controller {

	public function index()
	{
		$this->load->library('form_validation');
		$this->load->library('session');
		$this->load->library('email');
		
		$this->form_validation->set_rules('name', 'Name', 'trim|required|min_length[3]|max_length[50]|xss_clean');
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|max_length[100]|xss_clean');
		$this->form_validation->set_rules('message', 'Message', 'trim|required|xss_clean');
		$this->form_validation->set_rules('captcha', 'Captcha', 'trim|required|exact_length[5]|alhpa_numeric|callback_match_captcha['.set_value('captcha').']');
		
		$data['title'] = 'Contact Richard Jackson &mdash; Front-End Web Developer';
		$data['module'] = 'contact';
		$data['view_file'] = 'form';

		if ($this->form_validation->run($this) !== false)
		{
			$this->email->from(set_value('email'), set_value('name'));
			$this->email->to('richard'.'@'.'rbjackson'.'.'.'com', 'Richard Jackson');
			$this->email->subject('Portfolio Contact Form');
			$this->email->message(set_value('message'));
			$this->email->send();

			$data['view_file'] = 'thankyou';
		}
		
		echo Modules::run('templates/portfolio', $data);
	}

	function match_captcha($str)
	{
		if ($str === $this->session->userdata('security_code'))
		{
			return true;
		}

		$this->form_validation->set_message('match_captcha', 'The %s field did not match.');
		return false;
	}
}

/* End of file contact.php */
/* Location: .app/portfolio/application/modules/contact/controllers/contact.php */