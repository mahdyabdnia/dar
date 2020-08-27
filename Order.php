<?php

class Order extends CI_Controller{

	public function index(){
		$data['main_content']='order';
		$this->view->load('layout/main',$data);
	}




public function orderPage(){
	if (!isset($_SESSION['logged_in'])){
		$_SESSION['first_login']="ابتدا باید وارد سایت شوید";
	}
	else{
		die();
	}
	
}

}
















 ?>