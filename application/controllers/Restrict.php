<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Restrict extends CI_Controller{

	public function __construct() {
		parent::__construct();
		$this->load->library("session");
	}

	public function index(){

		if ($this->session->userdata("user_id")) {
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
		} else {
			$data = array(
				"scripts" => array(
					"util.js",
					"login.js" 
				)
			);
			$this->template->show("login.php", $data);
		}

	}

	public function logoff() {
		$this->session->sess_destroy();
		header("Location: " . base_url() . "restrict");
	}
	
	public function ajax_login() {

		if (!$this->input->is_ajax_request()) {
			exit("Nenhum acesso de script direto permitido!");
		}

		$json = array();
		$json["status"] = 1;
		$json["error_list"] = array();

		$username = $this->input->post("username");
		$password = $this->input->post("password");

		if (empty($username)) {
			$json["status"] = 0;
			$json["error_list"]["#username"] = "Usuário não pode ser vazio!";
		} else {
			$this->load->model("users_model");
			$result = $this->users_model->get_user_data($username);
			if ($result) {
				$user_id = $result->user_id;
				$user_password = $result->user_password;
				if (password_verify($password, $user_password)) {
					$this->session->set_userdata("user_id", $user_id);
				} else {
					$json["status"] = 0;
				}
			} else {
				$json["status"] = 0;
			}
			if ($json["status"] == 0) {
				$json["error_list"]["#btn_login"] = "Usuário e/ou senha incorretos!";
			}
		}

		echo json_encode($json);

	}

	public function ajax_save_user() {

		if (!$this->input->is_ajax_request()) {
			exit("Nenhum acesso de script direto permitido!");
		}

		$json = array();
		$json["status"] = 1;
		$json["error_list"] = array();

		$this->load->model("users_model");

		$data = $this->input->post();

		if (empty($data["user_access"])) {
			$json["error_list"]["#user_access"] = "Usuário é obrigatório!";
		} else {
			if ($this->users_model->is_duplicated("user_access", $data["user_access"], $data["user_id"])) {
				$json["error_list"]["#user_access"] = "Usuário já existente!";
			}
		}

		if (empty($data["user_name"])) {
			$json["error_list"]["#user_name"] = "Nome é obrigatório!";
		} 

		if (empty($data["email"])) {
			$json["error_list"]["#email"] = "E-mail é obrigatório!";
		} 

		if (empty($data["user_password"])) {
			$json["error_list"]["#user_password"] = "Senha é obrigatório!";
		} else {
			if ($data["user_password"] != $data["user_password_confirm"]) {
				$json["error_list"]["#user_password"] = "";
				$json["error_list"]["#user_password_confirm"] = "Senha não conferem!";
			}
		}

		if (!empty($json["error_list"])) {
			$json["status"] = 0;
		} else {

			$data["user_password"] = password_hash($data["user_password"], PASSWORD_DEFAULT);

			unset($data["user_password_confirm"]);
			unset($data["email_confirm"]);

			if (empty($data["user_id"])) {
				$this->users_model->insert($data);
			} else {
				$user_id = $data["user_id"];
				unset($data["user_id"]);
				$this->users_model->update($user_id, $data);
			}
		}

		echo json_encode($json);
	}

	public function ajax_get_user_data() {

		if (!$this->input->is_ajax_request()) {
			exit("Nenhum acesso de script direto permitido!");
		}

		$json = array();
		$json["status"] = 1;
		$json["input"] = array();

		$this->load->model("users_model");

		$user_id = $this->input->post("user_id");
		$data = $this->users_model->get_data($user_id)->result_array()[0];
		$json["input"]["user_id"] = $data["user_id"];
		$json["input"]["user_access"] = $data["user_access"];
		$json["input"]["user_name"] = $data["user_name"];
		$json["input"]["email"] = $data["email"];
		$json["input"]["email_confirm"] = $data["email"];
		$json["input"]["user_password"] = $data["user_password"];
        $json["input"]["user_password_confirm"] = $data["user_password"];
		$json["input"]["user_cpf"] = $data["user_cpf"];
		$json["input"]["latitude"] = $data["latitude"];
		$json["input"]["longitude"] = $data["longitude"];
		$json["input"]["date_register"] = $data["date_register"];
		$json["input"]["date_modify"] = $data["date_modify"];
		$json["input"]["date_activity"] = $data["date_activity"];

		echo json_encode($json);
	}

	public function ajax_delete_user_data() {

		if (!$this->input->is_ajax_request()) {
			exit("Nenhum acesso de script direto permitido!");
		}

		$json = array();
		$json["status"] = 1;

		$this->load->model("users_model");
		$user_id = $this->input->post("user_id");
		$this->users_model->delete($user_id);

		echo json_encode($json);
	}

	public function ajax_list_user() {

		if (!$this->input->is_ajax_request()) {
			exit("Nenhum acesso de script direto permitido!");
		}

		$this->load->model("users_model");
		$users = $this->users_model->get_datatable();

		$data = array();
		foreach ($users as $user) {

			$row = array();
			$row[] = $user->user_access;
			$row[] = $user->user_name;
			$row[] = $user->email;

			$row[] = '<div style="display: inline-block;">
						<button class="btn btn-primary btn-edit-user" 
							user_id="'.$user->user_id.'">
							<i class="fa fa-edit"></i>
						</button>
						<button class="btn btn-danger btn-del-user" 
							user_id="'.$user->user_id.'">
							<i class="fa fa-times"></i>
						</button>
					</div>';

			$data[] = $row;

		}

		$json = array(
			"draw" => $this->input->post("draw"),
			"recordsTotal" => $this->users_model->records_total(),
			"recordsFiltered" => $this->users_model->records_filtered(),
			"data" => $data,
		);

		echo json_encode($json);
    }
    
}