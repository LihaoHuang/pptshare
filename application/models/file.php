<?php
class Upload extends CI_Model {

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

        public function uploadfile($data)
        {
                $query = $this->db->insert('product',$data);
        }
}