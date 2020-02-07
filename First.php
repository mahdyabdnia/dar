<?php



Class First extends CI_Controller{

public function index(){


	$data['category']=$this->FirstModel->showCategory();


$data['main_content']='first';

$this->load->view('layout/main',$data);



}











}













 ?>