<?php
  defined('BASEPATH') OR exit('No direct script access allowed');
    /**
     * Adding EmployeeModel and List all Employee
     */
    class Employee_model extends CI_Model
    {
        function get_employees()
      {
        $this->db->select('*');
        $this->db->from('tbl_employees');
        $this->db->join('tbl_provinces','emp_id = tbl_provinces_pro_id' );
        $query = $this->db->get();
        return $query->num_rows() > 0 ? $query->result() : NULL;
      }
    }
 ?>
