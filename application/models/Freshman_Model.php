<?php if(!defined('BASEPATH')) exit("No direct script access allowed");

class Freshman_Model extends CI_Model {
    public function __construct() {
        parent::__construct();
    }

    function get_member($member_idx) {
        $sql = "SELECT * FROM member WHERE idx = '$member_idx'";
        $query = $this->db->query($sql);
        $row = $query->row();

        return $row;
    }

    function get_list() {
        $sql = "SELECT * FROM list";
        $query = $this->db->query($sql);
        $row = $query->result();

        return $row;
    }

    function get_consider() {
        $sql = "SELECT * FROM consider";
        $query = $this->db->query($sql);
        $row = $query->result();

        return $row;
    }

    function get_done() {
        $sql = "SELECT * FROM done";
        $query = $this->db->query($sql);
        $row = $query->result();

        return $row;
    }

    function count_done() {
        $sql = "SELECT * FROM done";
        $query = $this->db->query($sql);
        $row = $query->num_rows();

        return $row;
    }

    function list_to_done($member_idx) {
        $sql = "INSERT INTO done (member_idx) SELECT member_idx FROM list WHERE member_idx = '$member_idx'";
        $query = $this->db->query($sql);

        $sql = "DELETE FROM list WHERE member_idx = '$member_idx'";
        $query = $this->db->query($sql);

        return $query;
    }

    function done_to_list($member_idx) {
        $sql = "INSERT INTO list (member_idx) SELECT member_idx FROM done WHERE member_idx = '$member_idx'";
        $query = $this->db->query($sql);

        $sql = "DELETE FROM done WHERE member_idx = '$member_idx'";
        $query = $this->db->query($sql);

        return $query;
    }

    function insert($data) {
        $number = $data['number'];
        $name = $data['name'];
        $content = str_replace("'", "", $data['content']);

        $sql = "INSERT INTO member (number, name, content) VALUES ('$number', '$name', '$content')";
        $query = $this->db->query($sql);

        $sql = "SELECT * FROM member ORDER BY idx DESC LIMIT 1";
        $query = $this->db->query($sql);
        $row = $query->row();

        $member_idx = $row->idx;
        $sql = "INSERT INTO list (member_idx) VALUES ('$member_idx')";
        $query = $this->db->query($sql);

        return $query;
    }

    function delete($member_idx) {
        $sql = "DELETE FROM member WHERE idx = '$member_idx'";
        $query = $this->db->query($sql);

        $sql = "DELETE FROM list WHERE member_idx = '$member_idx'";
        $query = $this->db->query($sql);

        return $query;
    }

    function edit($member_idx, $data) {
        $number = $data['number'];
        $name = $data['name'];
        $content = str_replace("'", "", $data['content']);
        $sql = "UPDATE member SET number = '$number', name = '$name', content = '$content' WHERE idx = '$member_idx'";
        $query = $this->db->query($sql);

        return $query;
    }
}

?>