<?php

class BookingModel extends CI_Model
{
    // function to insert data in the database
    public function insertBooking($data)
    {
        return $this->db->insert('booking',$data);
    }

    // function to retrieve data from the database
    public function getAllBookings()
    {
        $query = $this->db->get('booking');
        return $query->result();
    }

    // function to edit a booking
    public function editBooking($id)
    {
        
        $query = $this->db->get('booking');
        $ress=$query->result();
    
        foreach ($ress as $row):
            if( $row->booking_id ==(int)$id):
                return $row;
                
            endif;
        endforeach;
        
    }

    // function to upate the employe data
    public function updateBooking($data,$id)
    {
        return $this->db->update('booking',$data,['booking_id'=>(int)$id]);
       
    }

    // function to delete a booking from the database
    public function deleteBooking($id)
    {
        return $this->db->delete('booking',['booking_id' =>(int)$id]);
        
    }

}

?>