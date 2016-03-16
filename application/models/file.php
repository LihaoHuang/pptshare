<?php
class File extends CI_Model {

        public function __construct()
        {
                parent::__construct();
        }

        public function directory($data)
        {
			$query = $this->db->get('products');

            return $query->result();
        }
         public function upload($data)
        {
            $query = $this->db->insert('products',$data);
        }       
}