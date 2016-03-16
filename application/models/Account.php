<?php
class Account extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function creat($data)
        {
                $query = $this->db->insert('account',$data);
        }
        public function login($data)
        {
		$array = array('email' => $data['email'] , 'password' => $data['password']);
		$query = $this->db->where($array)->get('account');

                return $query->result();
        }
}