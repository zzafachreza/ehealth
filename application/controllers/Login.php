<?php

class Login extends CI_Controller{

    function __construct(){
        parent::__construct();
        $this->load->model('Login_model');
    }

    function index(){

        $this->load->view('login_view');
        
     
    }

    function validasi(){
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $hasil = $this->Login_model->getuser($username,SHA1($password));

        if ($hasil->num_rows()>0) {
            # code...
             $i = $hasil->row_array();

            $_SESSION['username'] = $i['username'];
             $_SESSION['level'] = $i['level'];
                      
        
            redirect('./');
        }
        else{

            $data['error'] = "username atau password salah...";

             $this->load->view('login_view',$data);
        }
       





    }

    function logout(){

        unset($_SESSION['username']);
        unset($_SESSION['level']);
        session_destroy(); 

         redirect('login');


    }
}