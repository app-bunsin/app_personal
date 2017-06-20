<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
    /**
     * Adding EmployeeModel and List all Employee
     */
    class Employee_model extends CI_Model
    {
        function get_employees()
      {
        $query = $this->db->select('*')->from('tbl_employees')->get();
        return $query->num_rows() > 0 ? $query->result() : NULL;
      }
    }
 ?>
