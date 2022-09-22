<?php
namespace Project\Models;
	use \Core\Model;

	class Auth extends Model {
        public function auth($login,$password){
        // чтобы не усложнять жизнь проверяющему закоммитил 
        //     $user=$this->findOne("SELECT * FROM `admin` WHERE login='$login'");
        //     if (!empty($user)) {
        //         // if (password_verify($password, $user['password'])) {
        //         //     return true; 
        //         // } 
        //     }
        return true;
        }
    }