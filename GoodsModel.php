<?php   
  
   



class GoodsModel extends CI_model{


public function showAllGoods($global_category_id,$branch_category_id,$category_id){


$this->db->select('*');
     $this->db->from('good');
     $this->db->where('good.global_category_id',$global_category_id);
     $this->db->where('good.branch_category_id',$branch_category_id);
     $this->db->where('good.category_id',$category_id);
     $this->db->join('global_category','good.global_category_id=global_category.global_category_id');
     $this->db->join('branch_category','good.branch_category_id=branch_category.branch_category_id');
     $this->db->join('category','good.category_id=category.category_id');
     return $this->db->get()->result();

}

public function search($word){
	$this->db->select('*');
	$this->db->from('good');
	$this->db->like('good.good_name',$word);
	$this->db->or_like('good.brand_name',$word);
	$this->db->join('global_category','good.global_category_id=global_category.global_category_id');
	$this->db->join('branch_category','good.branch_category_id=branch_category.branch_category_id');
	$this->db->join('category','good.category_id=category.category_id');
	return $this->db->get()->result();
}




	




}











?>