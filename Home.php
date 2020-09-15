<?php 



Class Home extends CI_Controller{

public function index(){
$data['global_result']=$this->HomeModel->showGlobalCategory();
$data['branch_result']=$this->HomeModel->showBranchCategory();
$data['category_result']=$this->HomeModel->showCategory();


	

$data['main_content']='home';

$this->load->view('layout/main',$data);


}    











}













 ?>