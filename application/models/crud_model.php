<?php

class crud_model extends CI_model


{
    public function getAllproducts()

    {
        $query = $this->db->get('products');

        if($query){

            return $query->result();
        }  
    }

    public function insertproducts($data){

        $query = $this->db->insert('products',$data);
        if($query){
            return true;
        }
        else{
            return false;
        }
    }

    public function getsingleproduct($id){

        $this->db->where('id',$id);
        $query = $this->db->get('products');
        if ($query){
            return $query->row();
        }
    }

    public function updateproducts($data,$id){
        $this->db->where('id',$id);
        $query = $this->db->update('products',$data);
        if ($query){
            return true;
        }
        else
        {
            return false;
        }
    }

    public function deleteitem($id){
        $this->db->where('id',$id);
        $query = $this->db->delete('products');
        if ($query){
            return true;
        }
        else
        {
            return false;
        }
    }

}






?>