<?php

class ScreenModel extends CI_Model
{
    // function to insert data in the database
    public function insertScreen($data)
    {
        return $this->db->insert('screen',$data);
    }

    // function to retrieve data from the database
    public function getAllScreens()
    {
        $query = $this->db->get('screen');
        return $query->result();
    }

    // function to edit a screen
    public function editScreen($id)
    {
        
        $query = $this->db->get('screen');
        $ress=$query->result();
    
        foreach ($ress as $row):
            if( $row->screen_id ==(int)$id):
                return $row;
                
            endif;
        endforeach;
        
    }

    // function to upate the employe data
    public function updateScreen($data,$id)
    {
        return $this->db->update('screen',$data,['screen_id'=>(int)$id]);
       
    }

    // function to delete a screen from the database
    public function deleteScreen($id)
    {
        return $this->db->delete('screen',['screen_id' =>(int)$id]);
        
    }

}

?>