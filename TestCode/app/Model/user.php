<?php
namespace App\Model;
class User{
	public $user_name;
	public $course_code;
	public $email;

	public function setUserName($userName){
        $this->user_name = trim($userName);
    }
    public function getUserName(){
        return $this->user_name;
	}

	public function setCourseCode($course_code){
		$this->course_code = trim($courseCode);
	}
	public function getCourseCode(){
		return $this->course_code;
	}
	
	
	public function setEmail($email){
		$this->email = $email;
	}
	public function getEmail(){
		return $this->email;
	}
}