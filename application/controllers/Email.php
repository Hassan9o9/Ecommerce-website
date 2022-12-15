<?php


class Email extends CI_Controller
{

    public function index()
    {
        $config['protocol']  = 'smtp';
        $config['smtp_host'] = 'mail.imrostom.com';
        $config['smtp_port'] = 587;
        $config['smtp_user'] = 'imrostom@imrostom.com';
        $config['smtp_pass'] = 'imrostomali';

       
        $this->load->library('email', $config);
        $this->email->set_newline("\r\n");

      
        $this->email->from('rrr@gmail.com', 'ss');
        
        $this->email->to('rostomali4444@gmail.com');
        
        $this->email->subject('subject');
       
        $this->email->message('Message Send Here');
        $this->email->send();
        $this->email->print_debugger(array('headers'));
    }

}
