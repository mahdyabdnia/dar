<?php 

/**
 * 
 */
class UserModel extends CI_model
{

	public function register($data){


		return $this->db->insert('user',$data);
	}



	public function is_Emailregistered($email)
	{


		$this->db->where('email',$email);
		$num=$this->db->get('user')->num_rows();

		if($num){
			return true;
		}

		else{
			return false;
		}



	}

	public function is_Usernameregistered($username){

		$this->db->where('username',$username);
		$num=$this->db->get('user')->num_rows();
		if($num){
			return true;
		}

		else{

			return false;
		}




	}






}












?>