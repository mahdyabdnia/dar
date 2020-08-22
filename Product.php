<?php 


  
class Product extends CI_Controller{
public function index($id){
	$data['global_result']=$this->FirstModel->showGlobalCategory();
    $data['product_result']=$this->ProductModel->showGood($id);
    $data['main_content']='product';
    $this->load->view('layout/main',$data);




}


}














?>
