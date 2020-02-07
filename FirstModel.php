<?php


class FirstModel extends CI_model{

public function showCategory(){


	return $this->db->get('category')->result();
}





}






?>
