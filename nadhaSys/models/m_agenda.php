<?php
class Agenda_model extends CI_Model {
function __construct(){
parent::__construct();
}
function delete($id_agenda){
$this->db->where('id', $id_agenda);
$this->db->delete('tbl_tes');
}

}
?>