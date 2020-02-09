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



	public function register(){

		if($_SERVER['REQUEST_METHOD']=='POST'){

           if($_POST['reg-button']){



           	if($this->UserModel->is_Emailregistered($_POST['email'])){

           		if($this->UserModel->is_Usernameregistered($_POST['username'])){


           			$data = array('email' => $_POST['email'],
           		'username' => $_POST['username'],
           		'orginal_name' => $_POST['orginal_name'],
           		'password' => $_POST['password']
           	 );

           			if($this->UserModel->register($data)){
           				redirect('/First');
           			}



           		}
           	}

           	


}




		}



	}
}













?>