<?php
require_once 'interfaces/IController.php';

class UsersController implements IController{
	public function __construct() {
		echo 'UsersController';
	}

	public function index() {
		// index method logic here
	}
	public function get() {
		echo 'hola';
	}
	public function all() {

	}
}
?>