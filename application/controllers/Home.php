<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$data = array( 
			"styles" => array(
				"chat.css"
			),
			"scripts" => array(
				"chat.js",
				"owl.carousel.min.js",
				"cbpAnimatedHeader.js",
				"theme-scripts.js" 
			)
		);

        $this->template->show('home',$data);
	}
}
