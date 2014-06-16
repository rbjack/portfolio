<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Captcha extends MX_Controller {

	var $font = 'css/fonts/monofont.ttf';

	public function index()
	{
		$this->load->library('session');
		$this->session->unset_userdata('security_code');
		$this->CaptchaSecurityImages('120','40','5');
	}

	function generateCode($characters)
	{
		/* list all possible characters, similar looking characters and vowels have been removed */
		$possible = '23456789bcdfghjkmnpqrstvwxyz';
		$code = '';
		$i = 0;
		while ($i < $characters)
		{ 
			$code .= substr($possible, mt_rand(0, strlen($possible)-1), 1);
			$i++;
		}
		return $code;
	}

	function CaptchaSecurityImages($width='120',$height='40',$characters='6')
	{
		$code = $this->generateCode($characters);

		/* font size will be 75% of the image height */
		$font_size = $height * 0.75;
		$image = @imagecreate($width, $height) or die('Cannot initialize new GD image stream');

		/* set the colours */
		$background_color = imagecolorallocate($image, 255, 255, 255);
		$text_color = imagecolorallocate($image, 0, 0, 0);
		$noise_color = imagecolorallocate($image, 43, 43, 43);
		$noise_color2 = imagecolorallocate($image, 242, 244, 76);

		/* generate random dots in background */
		for( $i=0; $i<($width*$height)/3; $i++ )
		{
			imagefilledellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color);
			imagefilledellipse($image, mt_rand(0,$width), mt_rand(0,$height), 1, 1, $noise_color2);
		}

		/* generate random lines in background */
		for( $i=0; $i<($width*$height)/150; $i++ )
		{
			imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $noise_color);
			imageline($image, mt_rand(0,$width), mt_rand(0,$height), mt_rand(0,$width), mt_rand(0,$height), $noise_color2);
		}
		
		/* create textbox and add text */
		$textbox = imagettfbbox($font_size, 0, $this->font, $code) or die('Error in imagettfbbox function');
		$x = ($width - $textbox[4])/2;
		$y = ($height - $textbox[5])/2;
		imagettftext($image, $font_size, 0, $x, $y, $text_color, $this->font , $code) or die('Error in imagettftext function');
		
		/* output captcha image to browser */
		header('Content-Type: image/jpeg');
		imagejpeg($image);
		imagedestroy($image);
		
		$captchaCode = array('security_code'=>$code);
		$this->session->set_userdata($captchaCode);
	}
}

/* End of file captcha.php */
/* Location: .app/portfolio/application/modules/captcha/controllers/captcha.php */