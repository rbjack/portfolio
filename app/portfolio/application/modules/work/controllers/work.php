<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Work extends MX_Controller {

	public function index()
	{
		$data['module'] = 'work';
		$data['view_file'] = 'list_work';
		echo Modules::run('templates/portfolio', $data);
	}
}

/* End of file work.php */
/* Location: .app/portfolio/application/modules/work/controllers/work.php */