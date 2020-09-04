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


public function addOrder(){
	$user_address=$_POST['user_address'];
	$send_date=$_POST['send_date'];
	$send_time1=$_POST['send_time1'];
	$send_time2=$_POST['send_time2'];
	$user_id=  $_SESSION['userId'];
	foreach ($this->cart->contents() => $items) {
		$data=array('user_id'=>$user_id,'good_id'=>$items['id'],'order_num'=>$items['qty'],'user_address'=>$user_address,'send_time1'=>$send_time1,'send_time2'=>$send_time2,'subtotal'=>$items['subtotal']);
		if($this->OrderModel->insertOrder($data)){
			$_SESSION['success_order']="سفارش شما با موفقیت ثبت شد ";
		}
		
	}
}

}
















 ?>