<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Loadpost {

    public function __construct() {
        $this->CI = & get_instance();
    }

    public function check_login() {
        if ($this->CI->session->userdata('login_id') == NULL) {
        	$class = $this->CI->router->fetch_method();
        	if($class == 'bank_load'){
				
			}else{			
            if ($this->CI->router->method != 'login' && $this->CI->router->method != 'validlogin' && $this->CI->router->method != 'listview' && $this->CI->router->method !='read') {
                redirect('user/login', 'refresh');
                exit();
            }
            }
            
        }else{
            if($this->CI->router->method=='login'){
                redirect('','refresh');
                exit();
            }
        } 
    }

}
