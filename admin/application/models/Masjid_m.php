<?php

class Masjid_m extends Ci_Model {

    public function selectData(){
        return $this->db->query("SELECT * FROM tb_masjid ")->result();
    }

    public function selectDataTakmir(){
        return $this->db->query("SELECT * FROM tb_takmir")->result();
    }
    public function selectDataFasilitas(){
        return $this->db->query("SELECT * FROM tb_fasilitas")->result();
    }
    

    function insert_takmir($data){
        $this->db->insert('tb_takmir',$data);
    }

    function delete_takmir($id){
        $this->db->where('id_takmir',$id);
        $this->db->delete('tb_takmir');
    }

    function edit_masjid($id,$data){
        $this->db->where('id_masjid',$id);
        $this->db->update('tb_masjid',$data);
    }

    function data_editmasjid($id){
        return $this->db->query("Select * FROM tb_masjid WHERE id_masjid='$id'")->result();
    }

    function delete_fasilitas($id){
        $this->db->where('id_fasilitas',$id);
        $this->db->delete('tb_fasilitas');
    }

    function data_editfasilitas($id){
        return $this->db->query("Select * FROM tb_fasilitas WHERE id_fasilitas='$id'")->result();
    }

    function edit_fasilitas($id,$data){
        $this->db->where('id_fasilitas',$id);
        $this->db->update('tb_fasilitas',$data);
    }

    function data_edittakmir($id){
        return $this->db->query("Select * FROM tb_takmir WHERE id_takmir='$id'")->result();
    }
    
    function edit_takmir($id,$data){
        $this->db->where('id_takmir',$id);
        $this->db->update('tb_takmir',$data);
    }
    
}
?>