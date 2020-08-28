<?php

class Order extends CI_Controller{

	public function index(){
		$data['global_result']=$this->FirstModel->showGlobalCategory();
		$data['main_content']='order';
		$this->load->view('layout/main',$data);
	}




public function orderPage(){
	
		$_SESSION['first_login']="ابتدا باید وارد سایت شوید";
	
	
	
}

}
















 ?>