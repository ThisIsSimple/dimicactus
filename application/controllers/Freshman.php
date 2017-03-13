<?php if(!defined('BASEPATH')) exit("No direct script access allowed");

class Freshman extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('Freshman_Model', 'fresh');
    }

    public function index() {
        $list = $this->fresh->get_list();
        $data['list'] = $this->fresh->get_list();
        $data['done_number'] = $this->fresh->count_done();
        $data['done'] = $this->fresh->get_done();

        $this->load->view('templates/freshman_header');
        $this->load->view('freshman/index', $data);
    }

    public function list_to_done($member_idx = '') {
        if(empty($member_idx)) {
            echo "<script>alert('잘못된 요청입니다');history.back();</script>";
        } else {
            $this->fresh->list_to_done($member_idx);
            echo "<script>history.back();</script>";
        }
    }

    public function done_to_list($member_idx = '') {
        if(empty($member_idx)) {
            echo "<script>alert('잘못된 요청입니다');history.back();</script>";
        } else {
            $this->fresh->done_to_list($member_idx);
            echo "<script>history.back();</script>";
        }
    }

    public function insert() {
        $this->form_validation->set_rules('number', '학번', 'required', array(
            'required' => '학번을 입력하세요'
        ));
        $this->form_validation->set_rules('name', '이름', 'required', array(
            'required' => '이름을 입력하세요'
        ));

        if($this->form_validation->run() == TRUE) {
            $number = $this->input->post('number', TRUE);
            $name = $this->input->post('name', TRUE);
            $content = $this->input->post('content', TRUE);

            $data = array(
                'number' => $number,
                'name' => $name,
                'content' => $content
            );

            $this->fresh->insert($data);
            echo "<script>history.back();</script>";
        } else {
            $this->load->view('templates/freshman_header');
            $this->load->view('freshman/insert');
        }
    }

    public function edit($member_idx = '') {

        $this->form_validation->set_rules('number', '학번', 'required', array(
            'required' => '학번을 입력하세요'
        ));
        $this->form_validation->set_rules('name', '이름', 'required', array(
            'required' => '이름을 입력하세요'
        ));

        if($this->form_validation->run() == TRUE) {
            $number = $this->input->post('number', TRUE);
            $name = $this->input->post('name', TRUE);
            $content = $this->input->post('content', TRUE);

            $data = array(
                'number' => $number,
                'name' => $name,
                'content' => $content
            );

            $this->fresh->edit($member_idx, $data);
            echo "<script>history.back();</script>";
        } else {
            $data['member'] = $this->fresh->get_member($member_idx);
            $this->load->view('templates/freshman_header');
            $this->load->view('freshman/edit', $data);
        }
    }

    public function delete($member_idx = '') {
        $this->fresh->delete($member_idx);
        echo "<script>history.back();</script>";
    }
}

?>