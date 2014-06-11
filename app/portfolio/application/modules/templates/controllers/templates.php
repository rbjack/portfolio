<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Templates extends MX_Controller {

	public function portfolio($data)
	{
		$this->load->view('portfolio', $data);
	}
}

/* End of file templates.php */
/* Location: .app/portfolio/application/modules/templates/controllers/templates.php */