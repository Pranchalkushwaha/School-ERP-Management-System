<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login_model extends CI_Model{
    public function check_user($email,$password)
    {
        # code...
        $this->db->where('user_email',$email);
        $this->db->where('user_password',$password);
        $query = $this->db->get('users');
        if($query->num_rows() == 1){
            return true;
        }
        else{
            return false;
        }
    }
}