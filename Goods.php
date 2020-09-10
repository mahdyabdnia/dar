<?php   
  


class Goods extends CI_Controller{


public function index(){
	$data['good_result']=$this->GoodsModel->showAllGoods();
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