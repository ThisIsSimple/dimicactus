<?php if(!defined('BASEPATH')) exit("No direct script access allowed");

class NewCactus_Model extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    function show_all() {
        $sql = "SELECT * FROM new_member ORDER BY interview_order";
        $query = $this->db->query($sql);
        $row = $query->result();

        return $row;
    }

    function order_by_name() {
        $sql = "SELECT * FROM new_member ORDER BY student_name";
        $query = $this->db->query($sql);
        $row = $query->result();

        return $row;
    }

    function order_by_interview() {
        $sql = "SELECT * FROM new_member ORDER BY interview_order";
        $query = $this->db->query($sql);
        $row = $query->result();

        return $row;
    }

    function order_by_number() {
        $sql = "SELECT * FROM new_member ORDER BY student_number";
        $query = $this->db->query($sql);
        $row = $query->result();

        return $row;
    }

    function get_member($name, $student_number) {
        $sql = "SELECT * FROM new_member WHERE student_name='$name' AND student_number = '$student_number'";
        $query = $this->db->query($sql);
        $row = $query->row();

        return $row;
    }

    function member($student_number) {
        $sql = "SELECT * FROM new_member WHERE student_number = '$student_number'";
        $query = $this->db->query($sql);
        $row = $query->row();

        return $row;
    }

    function get_time_left($student_number) {
        $sql = "SELECT * FROM ongoing WHERE student_number = '$student_number'";
        $query = $this->db->query($sql);
        $row = $query->row();

        if($row) {
            return 'ongoing';
        }

        $sql = "SELECT * FROM done";
        $query = $this->db->query($sql);
        $done = $query->num_rows();

        $sql = "SELECT * FROM done WHERE student_number = '$student_number'";
        $query = $this->db->query($sql);
        $row = $query->row();

        if($row) {
            return 'done';
        }

        $sql = "SELECT * FROM new_member WHERE student_number = '$student_number'";
        $query = $this->db->query($sql);
        $row = $query->row();

        return ($row->interview_order - $done - 1) * 10;
    }

    function get_ongoing() {
        $sql = "SELECT * FROM ongoing";
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

    function complete($student_number) {
        $sql = "SELECT * FROM new_member WHERE student_number = '$student_number'";
        $query = $this->db->query($sql);
        $row = $query->row();

        $sql = "INSERT INTO done (student_number, student_name, content, done_date, interview_order) VALUES ('$row->student_number', '$row->student_name', '$row->content', now(), '$row->interview_order')";
        $query = $this->db->query($sql);

        $sql = "DELETE FROM new_member WHERE student_number = '$student_number'";
        $query = $this->db->query($sql);

        return $query;
    }

    function cancel($student_number) {
        $sql = "SELECT * FROM done WHERE student_number = '$student_number'";
        $query = $this->db->query($sql);
        $row = $query->row();

        $sql = "INSERT INTO new_member (student_number, student_name, content, interview_order) VALUES ('$row->student_number', '$row->student_name', '$row->content', '$row->interview_order')";
        $query = $this->db->query($sql);

        $sql = "DELETE FROM done WHERE student_number = '$student_number'";
        $query = $this->db->query($sql);

        return $query;
    }

    function cancel_from_ongoing($student_number) {
        $sql = "SELECT * FROM ongoing WHERE student_number = '$student_number'";
        $query = $this->db->query($sql);
        $row = $query->row();

        $sql = "INSERT INTO new_member (student_number, student_name, content, interview_order) VALUES ('$row->student_number', '$row->student_name', '$row->content', '$row->interview_order')";
        $query = $this->db->query($sql);

        $sql = "DELETE FROM ongoing WHERE student_number = '$student_number'";
        $query = $this->db->query($sql);

        return $query;
    }

    function delete($student_number) {
        $sql = "DELETE FROM new_member WHERE student_number = '$student_number'";
        $query = $this->db->query($sql);

        return $query;
    }

    function insert($student_number, $student_name, $interview_order, $content) {
        $sql = "INSERT INTO new_member (student_number, student_name, interview_order, content) VALUES ('$student_number', '$student_name', '$interview_order', '$content')";
        $query = $this->db->query($sql);

        return $query;
    }

    function edit($idx, $student_number, $student_name, $interview_order, $content) {
        $sql = "UPDATE new_member SET student_number = '$student_number', student_name = '$student_name', interview_order = '$interview_order', content = '$content' WHERE idx = '$idx'";
        $query = $this->db->query($sql);

        return $query;
    }

    function ongoing($student_number) {
        $sql = "SELECT * FROM new_member WHERE student_number = '$student_number'";
        $query = $this->db->query($sql);
        $row = $query->row();

        $sql = "INSERT INTO ongoing (student_number, student_name, content, interview_order) VALUES ('$student_number', '$row->student_name', '$row->content', '$row->interview_order')";
        $query = $this->db->query($sql);

        $sql = "DELETE FROM new_member WHERE student_number = '$student_number'";
        $query = $this->db->query($sql);

        return $query;
    }
}

?>