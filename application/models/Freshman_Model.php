<?php if(!defined('BASEPATH')) exit("No direct script access allowed");

class Freshman_Model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    function get_list() {
        $sql = "SELECT * FROM new_member";
        $query = $this->db->query($sql);
        $row = $query->result();

        return $row;
    }
}

?>