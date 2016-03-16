<?php
class File extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function directory($data)
        {
                $query = $this->db->insert('housingapp',$data);
        }
         public function upload($data)
        {
                $query = $this->db->insert('housingapp',$data);
        }       
}