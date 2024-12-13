<?php


class LoginController{
	public View $view;
    public LoginModel $model; 
	public function __construct() {
		$this->view = new View('login');
		$this->view->pushJs('js/index.js');
	}

	public function index() {
		// aqui se va a imprimir el html del login
		$users = $this->model->all;
		$this->view->render('index',true);
	}
	public function get() {

	}
	public function all() {

	}
}
?>