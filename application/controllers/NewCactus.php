<?php if(!defined('BASEPATH')) exit("No direct script access allowed");

class NewCactus extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->model('NewCactus_Model', 'newcactus');
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function index($student_number = '') {
        $this->form_validation->set_rules('name', '이름', 'required', array(
            'required' => '이름을 입력해 주세요.'
        ));
        $this->form_validation->set_rules('student_number', '학번', 'required', array(
            'required' => '학번을 입력해 주세요.'
        ));

        if($this->form_validation->run() == TRUE) {
            $name = $this->input->post('name', TRUE);
            $student_number = $this->input->post('student_number', TRUE);


            $data['member'] = $this->newcactus->get_member($name, $student_number);
            $data['time_left'] = $this->newcactus->get_time_left($student_number);
            if(empty($data['member'])) {
                $data['time_left'] = 'done';
            }
            $data['ongoing'] = $this->newcactus->get_ongoing();

            $this->load->view('templates/newcactus_header');
            $this->load->view('newcactus/index', $data);
            $this->load->view('templates/footer');
        } else {
            $this->load->view('templates/newcactus_header');
            $this->load->view('newcactus/index');
            $this->load->view('templates/footer');
        }
    }

    public function manage() {
        $this->form_validation->set_rules('id', '아이디', 'required', array(
            'required' => '아이디를 입력해 주세요'
        ));
        $this->form_validation->set_rules('password', '비밀번호', 'required', array(
            'required' => '비밀번호를 입력해 주세요'
        ));

        if(empty($_GET['order'])) {
            $data['member'] = $this->newcactus->show_all();
        } else if($_GET['order'] === 'name') {
            $data['member'] = $this->newcactus->order_by_name();
        } else if($_GET['order'] === 'interview') {
            $data['member'] = $this->newcactus->order_by_interview();
        } else if($_GET['order'] === 'number') {
            $data['member'] = $this->newcactus->order_by_number();
        }

        $data['done'] = $this->newcactus->get_done();
        $data['ongoing'] = $this->newcactus->get_ongoing();

        if($this->form_validation->run() == TRUE) {
            $id = $this->input->post('id', TRUE);
            $password = $this->input->post('password', TRUE);

            if($id === 'cactus' && $password === 'simple1234') {
                $this->session->logged_in = TRUE;
            } else {
                echo "<script>alert('계정 정보를 다시 확인해 주세요.');</script>";
            }

            $this->load->view('templates/newcactus_header');
            $this->load->view('newcactus/manage', $data);
            $this->load->view('templates/footer');

        } else {
            $this->load->view('templates/newcactus_header');
            $this->load->view('newcactus/manage', $data);
            $this->load->view('templates/footer');
        }
    }

    public function complete($student_number = '') {
        if(!empty($student_number)) {
            $this->newcactus->complete($student_number);
            echo "<script>alert('정상 처리 되었습니다.');history.back();</script>";
        } else {
            echo "<script>alert('잘못된 요청입니다.');history.back();</script>";
        }
    }

    public function cancel($student_number = '') {
        if(!empty($student_number)) {
            $this->newcactus->cancel($student_number);
            echo "<script>alert('정상 처리 되었습니다.');history.back();</script>";
        } else {
            echo "<script>alert('잘못된 요청입니다.');history.back();</script>";
        }
    }

    public function cancel_from_ongoing($student_number = '') {
        if(!empty($student_number)) {
            $this->newcactus->cancel_from_ongoing($student_number);
            echo "<script>alert('정상 처리 되었습니다.');history.back();</script>";
        } else {
            echo "<script>alert('잘못된 요청입니다.');history.back();</script>";
        }
    }

    public function delete($student_number = '')
    {
        if (!empty($student_number)) {
            $this->newcactus->delete($student_number);
            echo "<script>alert('정상 처리 되었습니다.');history.back();</script>";
        } else {
            echo "<script>alert('잘못된 요청입니다.');history.back();</script>";
        }
    }

    public function insert() {
        $this->form_validation->set_rules('student_number', '학번', 'required', array(
            'required' => '학번을 입력해 주세요'
        ));
        $this->form_validation->set_rules('student_name', '이름', 'required', array(
            'required' => '이름을 입력해 주세요'
        ));
        $this->form_validation->set_rules('interview_order', '면접 순서', 'required', array(
            'required' => '면접 순서를 입력해 주세요'
        ));

        if($this->form_validation->run() == TRUE) {
            $student_number = $this->input->post('student_number', TRUE);
            $student_name = $this->input->post('student_name', TRUE);
            $interview_order = $this->input->post('interview_order', TRUE);
            $content = $this->input->post('content', TRUE);
            $this->newcactus->insert($student_number, $student_name, $interview_order, $content);
        }
        $this->load->view('templates/newcactus_header');
        $this->load->view('newcactus/insert');
        $this->load->view('templates/footer');
    }

    public function edit($student_number = '') {
        $this->form_validation->set_rules('student_number', '학번', 'required', array(
            'required' => '학번을 입력해 주세요'
        ));
        $this->form_validation->set_rules('student_name', '이름', 'required', array(
            'required' => '이름을 입력해 주세요'
        ));
        $this->form_validation->set_rules('interview_order', '면접 순서', 'required', array(
            'required' => '면접 순서를 입력해 주세요'
        ));

        $data['member'] = $this->newcactus->get_member("1' OR '1", $student_number);

        if($this->form_validation->run() == TRUE) {
            $student_number = $this->input->post('student_number', TRUE);
            $student_name = $this->input->post('student_name', TRUE);
            $interview_order = $this->input->post('interview_order', TRUE);
            $content = $this->input->post('content', TRUE);
            $this->newcactus->edit($data['member']->idx, $student_number, $student_name, $interview_order, $content);
            echo "<script>alert('수정이 완료 되었습니다');location.replace('/index.php/newcactus/manage');</script>";
        }
        $this->load->view('templates/newcactus_header');
        $this->load->view('newcactus/edit', $data);
        $this->load->view('templates/footer');
    }

    public function ongoing($student_number = '') {
        $this->newcactus->ongoing($student_number);
        $member = $this->newcactus->member($student_number);
        echo "<script>alert('".$student_number."의 면접을 진행합니다.');</script>";
    }
}

?>