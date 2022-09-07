<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class About extends MX_Controller {

	public function index()
	{
		$data['title'] = 'About Richard Jackson | Front End Web Developer';
		$data['module'] = 'about';
		$data['view_file'] = 'description';
		echo Modules::run('templates/portfolio', $data);
	}
}

/* End of file about.php */
/* Location: .app/portfolio/application/modules/about/controllers/about.php */