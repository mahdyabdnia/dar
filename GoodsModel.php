<?php 





class GoodsModel extends CI_model{


public function getGood(){
return $this->db->get('good')->result();




}



public function getProduct($id){

$this->db->where('good_id',$id);
return $this->db->get('good')->result();



}



	




}











?>