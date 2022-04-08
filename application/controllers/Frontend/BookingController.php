<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class BookingController extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');

        $this->load->model('BookingModel');
        $data['booking']= $this->BookingModel->getAllBookings();
        $this->load->view('frontend/booking', $data);
        $this->load->view('templates/footer');
    }

   

    // function to create a booking
    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('frontend/createbooking');
        $this->load->view('templates/footer');
    }

    // A function to store the booking data into the database
    public function store()
    {
        
        $this->form_validation->set_rules('booking_id','Booking Number', 'trim|required');
        $this->form_validation->set_rules('member_id','Member ID', 'trim|required');
        $this->form_validation->set_rules('performance_id','Peformance ID', 'trim|required');
        $this->form_validation->set_rules('no_of_seats','Number of Seats','required');
        if($this->form_validation->run()):
        {
            $data = [
                'booking_id' => $this->input->post('booking_id'),
                'member_id' => $this->input->post('member_id'),
                'performance_id' => $this->input->post('performance_id'),
                'no_of_seats' => $this->input->post('no_of_seats')
            ];
            $this->load->model('BookingModel');
            $this->BookingModel->insertBooking($data);
            redirect(base_url('booking'));
        }
        else:{
                $this->create();
                
                // another method is below line of code
                //redirect(base_url('booking/add'));
            }
        endif;

    } // store function ends here
    public function edit($id)
    {
        $this->load->model('BookingModel');
        $data['booking'] = $this->BookingModel->editBooking($id);
        $this->load->view('templates/header');
        $this->load->view('frontend/editbooking', $data);
        $this->load->view('templates/footer');

    }
    public function update($id)
    {
        $this->form_validation->set_rules('booking_id','Booking Number', 'trim|required');
        $this->form_validation->set_rules('member_id','Member ID', 'trim|required');
        $this->form_validation->set_rules('performance_id','Peformance ID', 'trim|required');
        $this->form_validation->set_rules('no_of_seats','Number of Seats','required');
        if($this->form_validation->run()):
            $data = [
                'booking_id' => $this->input->post('booking_id'),
                'member_id' => $this->input->post('member_id'),
                'performance_id' => $this->input->post('performance_id'),
                'no_of_seats' => $this->input->post('no_of_seats')
            ];
            $this->load->model("BookingModel");
            $this->BookingModel->updateBooking($data,(int)$id);
            redirect(base_url('booking'));
        
        else:
           $this->edit($id);
        endif;
    }

    // function to delete the booking from the database
    public function delete($id)
    {
        $this->load->model('BookingModel');
        $this->BookingModel->deleteBooking($id);
        redirect(base_url('booking'));
    }

}


?>