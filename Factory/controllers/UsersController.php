<?php

include_once 'models/UsersModel.php';
class UsersController{
	public View $view;
	public UserModel $model;
	public function __construct() {
		$this->view = new View('users');
		$this->view->pushJs('js/index.js');
		$this->model = new UserModel();
	}

	public function index() {
		// aqui se va a imprimir el html del login
		$this->view->data['users'] = $this->model->all();
		$this->view->render('index');
	}
	public function add() {
		if(isset($_POST['name'],$_POST['email'],$_POST['password'])) {
			$data = [
				'Name' => $_POST['name'],
				'Email' => $_POST['email'],
				'Password' => $_POST['password']
			];
			$this->model->add($data);
			echo 'success';
		}else{
			echo 'error';
		}
	}
	public function all() {
		$users = $this->model->all();
		echo json_encode($users);
	}
}
?>