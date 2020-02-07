<?php 



class Goods extends CI_Controller{


public function index(){
	$data['category']=$this->FirstModel->showCategory();
	$data['goods']=$this->GoodsModel->getGood();

	$data['main_content']='goods';
	$this->load->view('layout/main',$data);


	
}










}












?>