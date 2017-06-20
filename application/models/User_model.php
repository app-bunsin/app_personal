<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    /**
     * Model for user login
     */
    class User_model extends CI_Model
    {
      function __construct()
        {
             // Call the Model constructor
             parent::__construct();
        }
       function get_user($username,$password)
        {
           //$condition = "username =" . "'" . $data['username'] . "' AND " . "password =" . "'" . $data['password'] . "'";
           $this->db->select('username','password');
           $this->db->from('users');
           $this->db->where('username',$username);
           $this->db->where('password',$password);
           $this->db->limit(1);
           $query = $this->db->get();
           if ($query->num_rows() == 1) {
             return true;
           } else {
             return false;
           }
           }
        }


?>
