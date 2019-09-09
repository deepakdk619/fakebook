<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Auth extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('form');
        $this->load->library('form_validation');
    }

    public function registration_form($data)
    {
        $this->load->view('templates/header', $data);
        $this->load->view('auth/register', $data);
        $this->load->view('templates/footer');
    }

    public function register()
    {
        $data['title'] = 'Register';

        if ('post' !== $this->input->method()) {
            $this->registration_form($data);
        } else {
            $this->form_validation->set_rules('first_name', 'First Name', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('last_name', 'Last Name', 'trim|required|min_length[3]');
            $this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email');
            $this->form_validation->set_rules('password', 'Password', 'trim|required');
            $this->form_validation->set_rules('confirm_password', 'Password Confirmation', 'trim|required|matches[password]');

            if (false == $this->form_validation->run()) {
                $this->registration_form($data);
            } else {
                redirect('/');
            }
        }
    }
}

// End of file Auth.php
// Location: ./application/controllers/Auth.php
