<?php 
       
class ProductModel extends CI_model{

public function showGood($id){
$this->db->select('*');
$this->db->from('good');
$this->db->where('good_id',$id);
$this->db->join('global_category','good.global_category_id=global_category.global_category_id');
$this->db->join('branch_category','good.branch_category_id=branch_category.branch_category_id');
$this->db->join('category','good.category_id=category.category_id');
return $this->db->get()->result();
}

public function toComment($data){
	return $this->db->insert('comment',$data);
}

public function showComment($good_id){
	$this->db->select('*');
	$this->db->from('comment');
	$this->db->where('comment.good_id',$good_id);
	$this->db->join('user','user.user_id=comment.user_id');
	$this->db->join('good','good.good_id=comment.good_id');
	return $this->db->get()->result();
}











}











?>