<?php 
   
Class Cart extends CI_Controller{

	public function index(){
		$data['global_result']=$this->HomeModel->showGlobalCategory();
$data['branch_result']=$this->HomeModel->showBranchCategory();
$data['category_result']=$this->HomeModel->showCategory();
		$data['main_content']="cart";
		$this->load->view('layout/main',$data);
	}

   
	public function add(){

		$data=array('id'=>$_POST['good_id'],

		'price'=>$_POST['good_price'],
		'name'=>$_POST['good_name'],
		'qty'=>$_POST['quantity'],
		'img'=>''
);

	if($this->cart->insert($data)){
		return true;
	}
	//echo $this->show_cart();
	}


	public function load_cart(){
		///echo $this->show_cart();
	}

	public function remove(){
		$row_id=$_POST['row_id'];
		$data=array('rowid'=>$row_id,'qty'=>'0');
		$this->cart->update($data);
	}
	public function clear(){
		$this->cart->destroy();
	}



















}








?>