<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class CinemaController extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');

        $this->load->model('CinemaModel');
        $data['cinema']= $this->CinemaModel->getAllCinemas();
        $this->load->view('frontend/cinema', $data);
        $this->load->view('templates/footer');
    }

   

    // function to create a cinema
    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('frontend/createcinema');
        $this->load->view('templates/footer');
    }

    // A function to store the cinema data into the database
    public function store()
    {
        $this->form_validation->set_rules('cinemaID','Cinema ID', 'trim|required');
        $this->form_validation->set_rules('cinemaName','Name', 'trim|required');
        $this->form_validation->set_rules('cinemaLocation','Location', 'trim|required');
        $this->form_validation->set_rules('cinemaAddress','Address','required');
        $this->form_validation->set_rules('manager','Manager','required');
        if($this->form_validation->run()):
        {
            $data = [
                'cinema_id' => $this->input->post('cinemaID'),
                'cinema_name' => $this->input->post('cinemaName'),
                'location' => $this->input->post('cinemaLocation'),
                'address' => $this->input->post('cinemaAddress'),
                'manager' => $this->input->post('manager')
            ];
            $this->load->model('CinemaModel');
            $this->CinemaModel->insertCinema($data);
            redirect(base_url('cinema'));
        }
        else:{
                $this->create();
                
                // another method is below line of code
                //redirect(base_url('cinema/add'));
            }
        endif;

    } // store function ends here
    public function edit($id)
    {
        $this->load->model('CinemaModel');
        $data['cinema'] = $this->CinemaModel->editCinema($id);
        $this->load->view('templates/header');
        $this->load->view('frontend/editcinema', $data);
        $this->load->view('templates/footer');

    }
    public function update($id)
    {
        $this->form_validation->set_rules('cinemaID','Cinema ID', 'trim|required');
        $this->form_validation->set_rules('cinemaName','Name', 'trim|required');
        $this->form_validation->set_rules('cinemaLocation','Location', 'trim|required');
        $this->form_validation->set_rules('cinemaAddress','Address','required');
        $this->form_validation->set_rules('manager','Manager','required');
        if($this->form_validation->run()):
            $data = [
                'cinema_id' => $this->input->post('cinemaID'),
                'cinema_name' => $this->input->post('cinemaName'),
                'location' => $this->input->post('cinemaLocation'),
                'address' => $this->input->post('cinemaAddress'),
                'manager' => $this->input->post('manager')  
            ];
            $this->load->model("CinemaModel");
            $this->CinemaModel->updateCinema($data,(int)$id);
            redirect(base_url('cinema'));
        
        else:
           $this->edit($id);
        endif;
    }

    // function to delete the cinema from the database
    public function delete($id)
    {
        $this->load->model('CinemaModel');
        $this->CinemaModel->deleteCinema($id);
        redirect(base_url('cinema'));
    }

}


?>