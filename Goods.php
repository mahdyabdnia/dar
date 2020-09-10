<?php   
  


class Goods extends CI_Controller{


public function index(){
	 $global_category_id=$this->uri->segment(3);
	 $branch_category_id=$this->uri->segment(4);
	 $category_id=$this->uri->segment(5);
	$data['good_result']=$this->GoodsModel->showAllGoods($global_category_id,$branch_category_id,$category_id);
$data['global_result']=$this->FirstModel->showGlobalCategory();
$data['branch_result']=$this->FirstModel->showBranchCategory();
$data['category_result']=$this->FirstModel->showCategory();










	$data['main_content']='goods';
	$this->load->view('layout/main',$data);


	
}


public function productShow($id){

    $data['category']=$this->FirstModel->showCategory();
	$data['product']=$this->GoodsModel->getProduct($id);
	$data['main_content']='product';
	$this->load->view('layout/main',$data);


}










}












?>