<?php
class Account extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function creat($data)
        {
                $query = $this->db->insert('housingapp',$data);
        }
        public function login($data)
        {
		$array = array('email' => $email, 'password' => $password); 
		$query = $this->db->where($array);

                return $query->result();
        }
}