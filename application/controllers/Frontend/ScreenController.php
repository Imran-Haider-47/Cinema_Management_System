<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ScreenController extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');

        $this->load->model('ScreenModel');
        $data['screen']= $this->ScreenModel->getAllScreens();
        $this->load->view('frontend/screen', $data);
        $this->load->view('templates/footer');
    }

   

    // function to create a screen
    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('frontend/createscreen');
        $this->load->view('templates/footer');
    }

    // A function to store the screen data into the database
    public function store()
    {
        $this->form_validation->set_rules('cinema_name','Cinema Name', 'trim|required');
        $this->form_validation->set_rules('screen_id','Screen Number', 'trim|required');
        $this->form_validation->set_rules('seats','Seats', 'trim|required');
        $this->form_validation->set_rules('seat_price','Seat Price','required');
        if($this->form_validation->run()):
        {
            $data = [
                'cinema_name' => $this->input->post('cinema_name'),
                'screen_id' => $this->input->post('screen_id'),
                'seats' => $this->input->post('seats'),
                'seat_price' => $this->input->post('seat_price')
            ];
            $this->load->model('ScreenModel');
            $this->ScreenModel->insertScreen($data);
            redirect(base_url('screen'));
        }
        else:{
                $this->create();
                
                // another method is below line of code
                //redirect(base_url('screen/add'));
            }
        endif;

    } // store function ends here
    public function edit($id)
    {
        $this->load->model('ScreenModel');
        $data['screen'] = $this->ScreenModel->editScreen($id);
        $this->load->view('templates/header');
        $this->load->view('frontend/editscreen', $data);
        $this->load->view('templates/footer');

    }
    public function update($id)
    {
        $this->form_validation->set_rules('cinema_name','Cinema Name', 'trim|required');
        $this->form_validation->set_rules('screen_id','Screen Number', 'trim|required');
        $this->form_validation->set_rules('seats','Seats', 'trim|required');
        $this->form_validation->set_rules('seat_price','Seat Price','required');
        if($this->form_validation->run()):
            $data = [
                'cinema_name' => $this->input->post('cinema_name'),
                'screen_id' => $this->input->post('screen_id'),
                'seats' => $this->input->post('seats'),
                'seat_price' => $this->input->post('seat_price')
            ];
            $this->load->model("ScreenModel");
            $this->ScreenModel->updateScreen($data,(int)$id);
            redirect(base_url('screen'));
        
        else:
           $this->edit($id);
        endif;
    }

    // function to delete the screen from the database
    public function delete($id)
    {
        $this->load->model('ScreenModel');
        $this->ScreenModel->deleteScreen($id);
        redirect(base_url('screen'));
    }

}


?>