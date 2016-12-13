<?php
class flock extends CI_Model {
	function __construct(){
		parent::__construct();
		$this->load->database();
	}
   	function todo(){
      $ssql = $this->db->get('peliculas');
      return $ssql->result();
	}

}?>