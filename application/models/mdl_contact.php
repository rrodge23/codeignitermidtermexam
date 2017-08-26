<?php

    class mdl_contact extends CI_Model
    {
        var $contacts= array();
        public function addNewContact($data){
            $this->contacts = $this->db->insert('contact',$data);
        }

        public function getAllContacts(){
            $q = $this->db->get('contact');
            return $q->result();
        }
    }
    
?>