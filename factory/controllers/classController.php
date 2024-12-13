<?php


class ClassController{
	public View $view;
	public UserModel $model;
	public function __construct() {
		$this->view = new View('class');
		$this->view->pushJs('js/index.js');
	}

	public function index() {
		$this->view->render('index');
	}
}
?>