<?php 



/**
 * 
 */
class User extends CI_Controller
{
	
	public function index(){

		$data['main_content']='user';

		$this->load->view('user',$data);




	}
}













?>