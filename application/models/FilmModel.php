<?php

class FilmModel extends CI_Model
{
    // function to insert data in the database
    public function insertFilm($data)
    {
        return $this->db->insert('film',$data);
    }

    // function to retrieve data from the database
    public function getAllFilms()
    {
        $query = $this->db->get('film');
        return $query->result();
    }

    // function to edit a film
    public function editFilm($id)
    {
        
        $query = $this->db->get('film');
        $ress=$query->result();
    
        foreach ($ress as $row):
            if( $row->film_id ==(int)$id):
                return $row;
                
            endif;
        endforeach;
        
    }

    // function to upate the employe data
    public function updateFilm($data,$id)
    {
        return $this->db->update('film',$data,['film_id'=>(int)$id]);
       
    }

    // function to delete a film from the database
    public function deleteFilm($id)
    {
        return $this->db->delete('film',['film_id' =>(int)$id]);   
    }

}


?>