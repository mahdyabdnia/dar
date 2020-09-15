<?php 
  
     
  
class Product extends CI_Controller{
public function index($id){
	$data['global_result']=$this->HomeModel->showGlobalCategory();
$data['branch_result']=$this->HomeModel->showBranchCategory();
$data['category_result']=$this->HomeModel->showCategory();
    $data['product_result']=$this->ProductModel->showGood($id);
    $data['main_content']='product';
    $this->load->view('layout/main',$data);




}





public function toComment(){
	
	$data=array('good_id'=>$_POST['good_id'],'comment_state'=>$_POST['comment_state'],'user_id'=>$_POST['user_id'],'comment'=>$_POST['comment']);
	if($this->ProductModel->toComment($data)){
		return true;

	}


}

public function showComment(){

$good_id=$this->input->post('good_id',TRUE);
$data=$this->ProductModel->showComment($good_id);
echo json_encode($data);

}


}














?>
