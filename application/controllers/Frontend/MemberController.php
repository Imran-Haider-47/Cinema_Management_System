<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MemberController extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');

        $this->load->model('MemberModel');
        $data['member']= $this->MemberModel->getAllMembers();
        $this->load->view('frontend/member', $data);
        $this->load->view('templates/footer');
    }

    // function to create a member
    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('frontend/createmember');
        $this->load->view('templates/footer');
    }

    // A function to store the member data into the database
    public function store()
    {
        $this->form_validation->set_rules('memberID','Member ID', 'trim|required');
        $this->form_validation->set_rules('memberName','Name', 'trim|required');
        $this->form_validation->set_rules('memberTitle','Title', 'trim|required');
        $this->form_validation->set_rules('joinedDate','Joined Date','required');
        $this->form_validation->set_rules('status','Status','required');
        if($this->form_validation->run()):
        {
            $data = [
                'member_id' => $this->input->post('memberID'),
                'member_name' => $this->input->post('memberName'),
                'title' => $this->input->post('memberTitle'),
                'joined_date' => $this->input->post('joinedDate'),
                'status' => $this->input->post('status')
            ];
            $this->load->model('MemberModel');
            $this->MemberModel->insertMember($data);
            redirect(base_url('member'));
        }
        else:{
                $this->create();
                
                // another method is below line of code
                //redirect(base_url('member/add'));
            }
        endif;

    } // store function ends here
    public function edit($id)
    {
        $this->load->model('MemberModel');
        $data['member'] = $this->MemberModel->editMember($id);
        $this->load->view('templates/header');
        $this->load->view('frontend/editmember', $data);
        $this->load->view('templates/footer');

    }
    public function update($id)
    {
        $this->form_validation->set_rules('memberID','Member ID', 'trim|required');
        $this->form_validation->set_rules('memberName','Name', 'trim|required');
        $this->form_validation->set_rules('memberTitle','Title', 'trim|required');
        $this->form_validation->set_rules('joinedDate','Joined Date','required');
        $this->form_validation->set_rules('status','Status','required');
        if($this->form_validation->run()):
            $data = [
                'member_id' => $this->input->post('memberID'),
                'member_name' => $this->input->post('memberName'),
                'title' => $this->input->post('memberTitle'),
                'joined_date' => $this->input->post('joinedDate'),
                'status' => $this->input->post('status')
            ];
            $this->load->model("MemberModel");
            $this->MemberModel->updateMember($data,(int)$id);
            redirect(base_url('member'));
        
        else:
           $this->edit($id);
        endif;
    }

    // function to delete the member from the database
    public function delete($id)
    {
        $this->load->model('MemberModel');
        $this->MemberModel->deleteMember($id);
        redirect(base_url('member'));
    }

}


?>