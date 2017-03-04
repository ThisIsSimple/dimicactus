<?php if(!defined('BASEPATH')) exit("No direct script access allowed");

class Edu extends CI_Controller {
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['menu'] = 3;

        $this->load->view('templates/edu_header', $data);
        $this->load->view('edu/index');
        $this->load->view('edu/main_content');
        $this->load->view('templates/footer');
    }

    public function main() {
        $data['menu'] = 3;

        $this->load->view('templates/edu_header', $data);
        $this->load->view('edu/main');
        $this->load->view('edu/main_content');
        $this->load->view('templates/footer');
    }

    public function education() {

    }
}

?>