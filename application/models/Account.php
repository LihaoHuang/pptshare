<?php
class Account extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $config['hostname'] = 'localhost:3306';
                $config['username'] = 'root';
                $config['password'] = '';
                $config['database'] = 'ppt_share';
                $config['dbdriver'] = 'mysqli';
                $config['dbprefix'] = '';
                $config['pconnect'] = FALSE;
                $config['db_debug'] = TRUE;
                $this->load->database($config); 
        }

        public function creat($data)
        {
                $query = $this->db->insert('comments',$data);
        }
        public function login($data)
        {
		$array = array('email' => $data['email'] , 'password' => $data['password']);
		$query = $this->db->where($array)->get('comments');

                return $query->result();
        }
}