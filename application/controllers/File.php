<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class File extends CI_Controller {

        public function __construct()
        {
                parent::__construct();
                $this->load->helper(array('form', 'url'));
                $this->load->library("session");
        }

        public function index()
        {
            $data = array( 
				"styles" => array(
					"dataTables.bootstrap.min.css",
					"datatables.min.css"
				),
				"scripts" => array(
					"sweetalert2.all.min.js",
					"dataTables.bootstrap.min.js",
					"datatables.min.js",
					"util.js",
					"restrict.js" 
				),
				"user_id" => $this->session->userdata("user_id")
            );
            
            $this->load->model("users_model");
            $this->load->helper('form');
			$this->template->show("restrict.php", $data);    
        }

        public function do_upload()
        {
                $config['upload_path'] = '../../files/';

                $this->load->library('upload', $config);

                if ( ! $this->upload->do_upload('userfile'))
                {
                        $error = array('error' => $this->upload->display_errors());

                        $this->load->view('restrict', $error);
                }
                else
                {
                        $data = array('upload_data' => $this->upload->data());

                        $this->load->view('upload_success', $data);
                }
        }
}
?>