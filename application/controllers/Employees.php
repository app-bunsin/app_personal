<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    /**
     * Add Employee , retrieve Employee
     */
    class Employees extends CI_Controller
    {
      function index(){
        $this->load->view('partial/Header');
        $this->load->view('Employees/index');
        $this->load->view('partial/Footer');
      }
      public function get_employees()
      {
         $query = $this->Employee_model->get_employees();
         //var_dump($query);exit();
        if(isset($query)){
           $data['employees'] = $query;
         }
         $this->load->view('partial/Header');
         $this->load->view('partial/Menu');
         $this->load->view('Employees/index', $data);
         $this->load->view('partial/Footer');
      }
      public function insert_employees()
      {
            // $data = array(
            //     'book_isbn' => $this->input->post('book_isbn'),
            //     'book_title' => $this->input->post('book_title'),
            //     'book_author' => $this->input->post('book_author'),
            //     'book_category' => $this->input->post('book_category'),
            //   );
            // $insert = $this->book_model->book_add($data);
            // echo json_encode(array("status" => TRUE));
      }
    }
 ?>
