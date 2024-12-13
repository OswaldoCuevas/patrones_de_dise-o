<?php


class HomeController{
	public View $view;
	public function __construct() {
		$this->view = new View('home');
		$this->view->pushJs('js/index.js');
	}

	public function index() {
		// aqui se va a imprimir el html del login
		$this->view->render('index');
	}
	public function get() {
		echo 'hola';
	}
	public function all() {

	}
}
?>