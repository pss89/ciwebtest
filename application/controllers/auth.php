<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

    protected function isLogin()
    {
        if (empty($_SESSION('idx'))) {
            return false;
        } else {
            return true;
        }
    }
}
