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

		if($_SERVER['REQUEST_METHOD']=="POST"){

      if(isset($_POST['reg_button'])){
        if(!$this->UserModel->isRegEmail($_POST['email'])){
          if(!$this->UserModel->isRegUsername($_POST['username'])){

       $data= array('username'=>$_POST['username'],'password'=>$_POST['password'],'email'=>$_POST['email'],'orginal_name'=>$_POST['orginal_name']);

       if($this->UserModel->register($data)){
         $_SESSION['registered']="اکنون میتوانید وارد سایت شویدذ";
       
       }

       
     }
}else{
  
         $_SESSION['alredy_registered']="اثمیل یا نام کاربری تکراری است ";
       
}

      }

    }
    redirect('./User');

  }





    public function login(){
      if($_SERVER['REQUEST_METHOD']=="POST"){
        if(isset($_POST['login_button'])){
          $data=array('username'=>$_POST['username'],'password'=>$_POST['password']);
          if($this->UserModel->login($data)){
            $_SESSION['login_success']="با موفقیت وارد سایت شدید";
          }

          else{
          $_SESSION['login_failed']="نام کاربری یا پسوورد شما تطابق ندارد.";
          }
        }
      }redirect('/User');
    }


    public function logout(){
      unset($_SESSION['logged_in']);
      unset( $_SESSION['userId']);
      unset($_SESSION['name']);
      redirect('./First');

    }







}













?>