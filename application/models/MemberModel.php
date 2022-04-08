<?php

class MemberModel extends CI_Model
{
    // function to insert data in the database
    public function insertMember($data)
    {
        return $this->db->insert('member',$data);
    }

    // function to retrieve data from the database
    public function getAllMembers()
    {
        $query = $this->db->get('member');
        return $query->result();
    }

    // function to edit a member
    public function editMember($id)
    {
        
        $query = $this->db->get('member');
        $ress=$query->result();
    
        foreach ($ress as $row):
            if( $row->member_id ==(int)$id):
                return $row;
                
            endif;
        endforeach;
        
    }

    // function to upate the employe data
    public function updateMember($data,$id)
    {
        return $this->db->update('member',$data,['member_id'=>(int)$id]);
       
    }

    // function to delete a member from the database
    public function deleteMember($id)
    {
        return $this->db->delete('member',['member_id' =>(int)$id]);
        
    }

}


?>