<?php 

Class Cart extends CI_Controller{


	public function add(){

		$data=array('id'=>$_POST['good_id'],

		'price'=>$_POST['good_price'],
		'name'=>$_POST['good_name'],
		'qty'=>'1'
);

	$this->cart->insert($data);
	redirect('./First');
	}
}








?>