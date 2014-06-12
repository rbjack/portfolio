<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Contact extends MX_Controller {

	public function index()
	{
		$data['title'] = 'Contact Richard Jackson &mdash; Front-End Web Developer';
		$data['module'] = 'contact';
		$data['view_file'] = 'form';
		echo Modules::run('templates/portfolio', $data);
	}
}

/* End of file contact.php */
/* Location: .app/portfolio/application/modules/contact/controllers/contact.php */