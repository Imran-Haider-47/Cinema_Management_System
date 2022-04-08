<?php

class PerformanceModel extends CI_Model
{
    // function to insert data in the database
    public function insertPerformance($data)
    {
        return $this->db->insert('performance',$data);
    }

    // function to retrieve data from the database
    public function getAllPerformances()
    {
        $query = $this->db->get('performance');
        return $query->result();
    }

    // function to edit a performance
    public function editPerformance($id)
    {
        
        $query = $this->db->get('performance');
        $ress=$query->result();
    
        foreach ($ress as $row):
            if( $row->performance_id ==(int)$id):
                return $row;
                
            endif;
        endforeach;
        
    }

    // function to upate the employe data
    public function updatePerformance($data,$id)
    {
        return $this->db->update('performance',$data,['performance_id'=>(int)$id]);
       
    }

    // function to delete a performance from the database
    public function deletePerformance($id)
    {
        return $this->db->delete('performance',['performance_id' =>(int)$id]);
        
    }

}

?>