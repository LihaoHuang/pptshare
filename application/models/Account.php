<?php
class Account extends CI_Model {

        public function __construct()
        {
                parent::__construct();
                $config['hostname'] = '140.130.35.62:8082';
                $config['username'] = '40343236';
                $config['password'] = '40343236';
                $config['database'] = '40343236';
                $config['dbdriver'] = 'mysqli';
                $config['dbprefix'] = '';
                $config['pconnect'] = FALSE;
                $config['db_debug'] = TRUE;
                $this->load->database($config); 
        }

        public function creat($data)
        {
                if($data['flag'])
                {
                        $array = array('email' => $data['email']);
                        $query = $this->db->where($array)->get('comments');

                        return $query->result();
                }else
                {
                        
                        $array = array('email' => $data['email'],'password' =>$data['password']);
                        $query = $this->db->insert('comments',$array);
                }
                        
        }
        public function login($data)
        {
		$array = array('email' => $data['email'] , 'password' => $data['password']);
		$account = $this->db->where($array)->get('comments');

                return $account->result();
        }
}