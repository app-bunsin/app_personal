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
        $this->db->from('tbl_provinces');
        $this->db->join('tbl_employees','id = tbl_provinces_id' );
        $this->db->join('tbl_employees_has_subject','emp_id = tbl_employees_id');
        $this->db->join('tbl_subject' , 'tbl_subject_id= sub_id');
        $query = $this->db->get();
        return $query->num_rows() > 0 ? $query->result() : NULL;
      }
      // public function insert_employees()
      //  {
      // 		$this->db->insert('tbl_employees', $data);
      // 		return $this->db->insert_id();
	    //   }
      }
 ?>
