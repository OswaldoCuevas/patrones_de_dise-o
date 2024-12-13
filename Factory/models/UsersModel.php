<?php
class UserModel extends Database{
    public function __construct() {
        parent::__construct();
    }
    public function add($data) {
        $this->insert('Users', $data);
    }
    public function get($data) {
        return $this->select('SELECT * FROM Users Where Id = ?', $data);
    }
    public function all() {
        return $this->select('SELECT * FROM Users');
    }
    public function put($data, $where) {
        $this->update('Users', $data, $where);
    }
    
    
}