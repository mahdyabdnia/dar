<?php 



class Goods extends CI_Controller{


public function index(){
	$data['category']=$this->FirstModel->showCategory();

   $config=array();
   $config['base_url']=base_url().'goods/index';
   $config['per_page']=4;
   $config['uri_segment'] = 3;
   $config['full_tag_open']='<div class="pagination_links">';

   $config['full_tag_close']='</div>';

   $page= ($this->uri->segment(3)) ? ($this->uri->segment(3)) : 0 ;
   $config['total_rows']=$this->GoodsModel->row_count();
   $choice=$config['total_rows']/$config['per_page'];
   $config['num_link']=round($choice);
   $this->pagination->initialize($config);

   $data['links']=$this->pagination->create_links();
   $data['goods']=$this->GoodsModel->getGood($config['per_page'],$page);











	$data['main_content']='goods';
	$this->load->view('layout/main',$data);


	
}


public function productShow($id){

    $data['category']=$this->FirstModel->showCategory();
	$data['product']=$this->GoodsModel->getProduct($id);
	$data['main_content']='product';
	$this->load->view('layout/main',$data);


}










}












?>