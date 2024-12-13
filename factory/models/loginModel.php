<?php
class LoginModel extends Database{
    public function __construct() {
        parent::__construct();
    }
    public function add($data) {
        $this->insert('users', $data);
    }
    
    
}