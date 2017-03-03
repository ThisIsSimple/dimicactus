<?php if(!defined('BASEPATH')) exit("No direct script access allowed");

class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
    }

    public function index() {
        $data['menu'] = 0;

        $this->load->view('templates/header', $data);
        $this->load->view('home/index');
        $this->load->view('home/main_content');
        $this->load->view('templates/footer');
    }

    public function main() {
        $data['menu'] = 0;

        $this->load->view('templates/header', $data);
        $this->load->view('home/main');
        $this->load->view('home/main_content');
        $this->load->view('templates/footer');
    }

    public function about() {
        $data['menu'] = 1;

        $this->load->view('templates/header', $data);
        $this->load->view('home/about');
        $this->load->view('templates/footer');
    }

    public function new2017() {
        $data['menu'] = 2;

        $this->load->view('templates/header', $data);
        $this->load->view('home/new');
        $this->load->view('templates/footer');
    }
}

?>