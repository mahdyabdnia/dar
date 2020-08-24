<?php 

Class Cart extends CI_Controller{

	public function index(){
		$data['global_result']=$this->FirstModel->showGlobalCategory();
		$data['main_content']="cart";
		$this->load->view('layout/main',$data);
	}


	public function add(){

		$data=array('id'=>$_POST['good_id'],

		'price'=>$_POST['good_price'],
		'name'=>$_POST['good_name'],
		'qty'=>$_POST['quantity'],
);

	$this->cart->insert($data);
	//echo $this->show_cart();
	}


	public function load_cart(){
		///echo $this->show_cart();
	}



















}








?>