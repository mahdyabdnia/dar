<?php 



class Goods extends CI_Controller{


public function index(){
	$data['category']=$this->FirstModel->showCategory();
	$data['goods']=$this->GoodsModel->getGood();

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