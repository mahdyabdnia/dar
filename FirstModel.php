<?php

 
class FirstModel extends CI_model{

	public function showGlobalCategory(){
		 return $this->db->get('global_category')->result();
	}










}






?>
