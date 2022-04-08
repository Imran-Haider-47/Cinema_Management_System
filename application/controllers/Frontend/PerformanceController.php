<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PerformanceController extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');

        $this->load->model('PerformanceModel');
        $data['performance']= $this->PerformanceModel->getAllPerformances();
        $this->load->view('frontend/performance', $data);
        $this->load->view('templates/footer');
    }

   

    // function to create a performance
    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('frontend/createperformance');
        $this->load->view('templates/footer');
    }

    // A function to store the performance data into the database
    public function store()
    {
        $this->form_validation->set_rules('performance_id','Performance Number', 'trim|required');
        $this->form_validation->set_rules('cinema_name','Cinema Name', 'trim|required');
        $this->form_validation->set_rules('screen_id','Screen ID', 'trim|required');
        $this->form_validation->set_rules('film_name','Film Name','required');
        $this->form_validation->set_rules('performance_date','Performance Date','required');
        $this->form_validation->set_rules('performance_time','Performance Time','required');
        $this->form_validation->set_rules('seats_left','Seats Left','required');
        
        if($this->form_validation->run()):
        {
            $data = [
                'performance_id' => $this->input->post('performance_id'),
                'cinema_name' => $this->input->post('cinema_name'),
                'screen_id' => $this->input->post('screen_id'),
                'film_name' => $this->input->post('film_name'),
                'performance_date' => $this->input->post('performance_date'),
                'performance_time' => $this->input->post('performance_time'),
                'seats_left' => $this->input->post('seats_left'),
            ];
            $this->load->model('PerformanceModel');
            $this->PerformanceModel->insertPerformance($data);
            redirect(base_url('performance'));
        }
        else:{
                $this->create();
                
                // another method is below line of code
                //redirect(base_url('performance/add'));
            }
        endif;

    } // store function ends here
    public function edit($id)
    {
        $this->load->model('PerformanceModel');
        $data['performance'] = $this->PerformanceModel->editPerformance($id);
        $this->load->view('templates/header');
        $this->load->view('frontend/editperformance', $data);
        $this->load->view('templates/footer');

    }
    public function update($id)
    {
        $this->form_validation->set_rules('performance_id','Performance Number', 'trim|required');
        $this->form_validation->set_rules('cinema_name','Cinema Name', 'trim|required');
        $this->form_validation->set_rules('screen_id','Screen ID', 'trim|required');
        $this->form_validation->set_rules('film_name','Film Name','required');
        $this->form_validation->set_rules('performance_date','Performance Date','required');
        $this->form_validation->set_rules('performance_time','Performance Time','required');
        $this->form_validation->set_rules('seats_left','Seats Left','required');
        if($this->form_validation->run()):
            $data = [
                'performance_id' => $this->input->post('performance_id'),
                'cinema_name' => $this->input->post('cinema_name'),
                'screen_id' => $this->input->post('screen_id'),
                'film_name' => $this->input->post('film_name'),
                'performance_date' => $this->input->post('performance_date'),
                'performance_time' => $this->input->post('performance_time'),
                'seats_left' => $this->input->post('seats_left')
            ];
            $this->load->model("PerformanceModel");
            $this->PerformanceModel->updatePerformance($data,(int)$id);
            redirect(base_url('performance'));
        
        else:
           $this->edit($id);
        endif;
    }

    // function to delete the performance from the database
    public function delete($id)
    {
        $this->load->model('PerformanceModel');
        $this->PerformanceModel->deletePerformance($id);
        redirect(base_url('performance'));
    }

}


?>