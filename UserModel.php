<?php 

/**
 *  
 */
class UserModel extends CI_model
{

	public function register($data){


		return $this->db->insert('user',$data);
	}


	 public function isRegEmail($email){
      $this->db->where('user.email',$email);
      $n=$this->db->get('user')->num_rows();
      if($n){
      	return true;
      }

      else{
      	return false;
      }
    }

    public function isRegUsername($username){
    	$this->db->where('user.username',$username);
    	$n=$this->db->get('user')->num_rows();
    	if($n){
    		return true;
    	}

    	else{
    		return false;
    	}
    }

	public function login($data){
		$this->db->where('user.username',$data['username']);
		$this->db->where('user.password',$data['password']);
		$result=$this->db->get('user');
		if($result->num_rows()==1){

        $_SESSION['logged_in']=true;
        $_SESSION['userId']=$result->row()->user_id;
        $_SESSION['name']=$result->row()->orginal_name;


			return true;

		}

		else{
			return false;
		}
	}



	

	






}












?>