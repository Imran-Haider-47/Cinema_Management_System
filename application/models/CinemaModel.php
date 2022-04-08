<?php

class CinemaModel extends CI_Model
{
    // function to insert data in the database
    public function insertCinema($data)
    {
        return $this->db->insert('cinema',$data);
    }

    // function to retrieve data from the database
    public function getAllCinemas()
    {
        $query = $this->db->get('cinema');
        return $query->result();
    }

    // function to edit a cinema
    public function editCinema($id)
    {
        
        $query = $this->db->get('cinema');
        $ress=$query->result();
    
        foreach ($ress as $row):
            if( $row->cinema_id ==(int)$id):
                return $row;
                
            endif;
        endforeach;
        
    }

    // function to upate the employe data
    public function updateCinema($data,$id)
    {
        return $this->db->update('cinema',$data,['cinema_id'=>(int)$id]);
       
    }

    // function to delete a cinema from the database
    public function deleteCinema($id)
    {
        return $this->db->delete('cinema',['cinema_id' =>(int)$id]);
        
    }

}


?>