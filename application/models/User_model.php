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
           $this->db->select('username','password');
           $this->db->from('users');
           $this->db->where('username', $username);
           $this->db->where('password', $password);
           $query = $this->db->get();
           return $query->result();

        }
      }

?>
