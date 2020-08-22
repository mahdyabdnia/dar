<?php 



Class First extends CI_Controller{

public function index(){
$data['global_result']=$this->FirstModel->showGlobalCategory();


	

$data['main_content']='first';

$this->load->view('layout/main',$data);


}    











}













 ?>