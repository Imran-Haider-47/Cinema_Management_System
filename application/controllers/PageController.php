<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PageController extends CI_Controller{
    public function index()
    {
        echo "I am an index method of new Page Controller";
    }
    public function about()
    {
        echo "I am about page of page controller.";
    }

    // view 
    public function demoView(){
        $this->load->model('StudentModel');
        $message = $this->StudentModel->studentMessage();
        $data['title'] = "Hello to data from the database";
        $data['message'] = "Message of Student is : ".$message;
        $this->load->view('demoPage', $data);
    }



}

?>