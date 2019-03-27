<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Topic extends CI_Controller {

	public function index()
	{
        $this->load->database();
        $this->load->model('topic_model');
        $data = $this->topic_model->gets();
        $result = array('data' => $data);
        $this->load->view('header');
		$this->load->view('topic',$result);
        $this->load->view('footer');
	}

	public function get($id=null){
        $this->load->view('header');
        $data = array('id' => $id);
        $this->load->view('main',$data);
        $this->load->view('footer');
	}
}
