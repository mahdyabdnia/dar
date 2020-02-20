<?php 





class GoodsModel extends CI_model{


public function getGood($limit,$start){

	$this->db->select('*');
	$this->db->from('good');
	$this->db->order_by('good_id','desc');
	$this->db->limit($limit,$start);
return $this->db->get()->result();




}



public function getProduct($id){

$this->db->where('good_id',$id);
return $this->db->get('good')->result();



}



public function row_count(){
   return $this->db->count_all('good');


}



	




}











?>