<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class FilmController extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/header');

        $this->load->model('FilmModel');
        $data['film']= $this->FilmModel->getAllFilms();
        $this->load->view('frontend/film', $data);
        $this->load->view('templates/footer');
    }

   

    // function to create a film
    public function create()
    {
        $this->load->view('templates/header');
        $this->load->view('frontend/createfilm');
        $this->load->view('templates/footer');
    }

    // A function to store the film data into the database
    public function store()
    {
        $this->form_validation->set_rules('film_id','Film ID', 'trim|required');
        $this->form_validation->set_rules('released','Released', 'trim|required');
        $this->form_validation->set_rules('film_title','Film Title', 'trim|required');
        $this->form_validation->set_rules('director','Director','required');
        if($this->form_validation->run()):
        {
            $data = [
                'film_id' => $this->input->post('film_id'),
                'released' => $this->input->post('released'),
                'film_title' => $this->input->post('film_title'),
                'director' => $this->input->post('director'),
            ];
            $this->load->model('FilmModel');
            $this->FilmModel->insertFilm($data);
            redirect(base_url('film'));
        }
        else:{
                $this->create();
                
                // another method is below line of code
                //redirect(base_url('film/add'));
            }
        endif;

    } // store function ends here
    public function edit($id)
    {
        $this->load->model('FilmModel');
        $data['film'] = $this->FilmModel->editFilm($id);
        $this->load->view('templates/header');
        $this->load->view('frontend/editfilm', $data);
        $this->load->view('templates/footer');

    }
    public function update($id)
    {
        $this->form_validation->set_rules('film_id','Film ID', 'trim|required');
        $this->form_validation->set_rules('released','Released', 'trim|required');
        $this->form_validation->set_rules('film_title','Film Title', 'trim|required');
        $this->form_validation->set_rules('director','Director','required');
        if($this->form_validation->run()):
            $data = [
                'film_id' => $this->input->post('film_id'),
                'released' => $this->input->post('released'),
                'film_title' => $this->input->post('film_title'),
                'director' => $this->input->post('director'),
            ];
            $this->load->model("FilmModel");
            $this->FilmModel->updateFilm($data,(int)$id);
            redirect(base_url('film'));
        
        else:
           $this->edit($id);
        endif;
    }

    // function to delete the film from the database
    public function delete($id)
    {
        $this->load->model('FilmModel');
        $this->FilmModel->deleteFilm($id);
        redirect(base_url('film'));
    }

}


?>