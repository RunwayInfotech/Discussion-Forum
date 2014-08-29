<?php  
class MAutocomplete extends CI_Model{  
    function lookup($keyword){  
        $this->db->select('*')->from('registrationdetails');  
        $this->db->like('email',$keyword,'after');  
        $query = $this->db->get();      
           
        return $query->result();  
    }  
} 
?>