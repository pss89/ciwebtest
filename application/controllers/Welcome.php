<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	public function index()
	{
        $data = array(
            "title" => "buchet Hompage",
            "static" => "../../../static",
        );
        $this->load->library('Auth');
        $login = $this->auth->isLogin();
        $this->load->view('header',$data,false,"common/");
        if($login == false){
            echo "로그인 x";
    		//$this->load->view('welcome_message');
        } else {
            echo "로그인 o";
    		//$this->load->view('welcome_message');
        }
        $this->load->view('footer',$data,false,"common/");
	}
}
