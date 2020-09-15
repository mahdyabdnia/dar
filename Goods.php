<?php   
  


class Goods extends CI_Controller{


public function index(){
	 $global_category_id=$this->uri->segment(3);
	 $branch_category_id=$this->uri->segment(4);
	 $category_id=$this->uri->segment(5);
	$data['good_result']=$this->GoodsModel->showAllGoods($global_category_id,$branch_category_id,$category_id);
$data['global_result']=$this->HomeModel->showGlobalCategory();
$data['branch_result']=$this->HomeModel->showBranchCategory();
$data['category_result']=$this->HomeModel->showCategory();










	$data['main_content']='goods';
	$this->load->view('layout/main',$data);


	
}


public function productShow($id){

    $data['category']=$this->HomeModel->showCategory();
	$data['product']=$this->GoodsModel->getProduct($id);
	$data['main_content']='product';
	$this->load->view('layout/main',$data);


}


public function search(){
	if($_SERVER['REQUEST_METHOD']=="POST"){
		if(isset($_POST['search_button'])){
			$data['global_result']=$this->HomeModel->showGlobalCategory();
$data['branch_result']=$this->HomeModel->showBranchCategory();
$data['category_result']=$this->HomeModel->showCategory();

			$word=$_POST['word_key'];
			$data['good_result']=$this->GoodsModel->search($word);
			$data['main_content']='goods';
			$this->load->view('layout/main',$data);


		}
	}
}










}












?>