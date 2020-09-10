<?php

 
class FirstModel extends CI_model{

	public function showGlobalCategory(){
		$this->db->select('*,global_category.global_category_id as gl_cat_id,branch_category.global_category_id as br_gl_cat_id,category.global_category_id as cat_gl_cat_id ');
		$this->db->from('global_category');
		$this->db->join('branch_category','branch_category.global_category_id=global_category.global_category_id','left');
		$this->db->join('category','category.global_category_id=global_category.global_category_id','left');
		$this->db->group_by('global_category');
	  return 	$this->db->get()->result();
	}

	public function showBranchCategory(){
		$this->db->select('*,category.branch_category_id as cat_br_cat_id,branch_category.branch_category_id as br_cat_id');
		$this->db->from('branch_category');
		$this->db->join('category','category.branch_category_id=branch_category.branch_category_id');
		$this->db->group_by('branch_category');
	 return 	$this->db->get()->result();
	}

	public function showCategory(){
		$this->db->select('*,category.category_id as cat_id');
		$this->db->from('category');
		$this->db->group_by('category_name');
	 return	$this->db->get()->result();
	}










}






?>
