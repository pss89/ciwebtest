<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth {

	public function __construct() {
	}

    public function isLogin()
    {
        if (empty($_SESSION['idx'])) {
            return false;
        } else {
            return true;
        }
    }
}
