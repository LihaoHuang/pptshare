<?php
class Upload extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function statistics_insert($data)
        {
                $query = $this->db->insert('housingapp',$data);
        }
}