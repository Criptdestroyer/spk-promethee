<?php

	defined('BASEPATH') OR exit('No direct script access allowed');
	/**
	* 
	*/
	class Home extends CI_Controller
	{
		
		function __construct()
		{
			parent:: __construct();
			$this->load->model('Data_model');
	        $this->load->library('form_validation');
	        $this->load->library('session');
	        $this->load->library('upload');
	        $this->load->library('pagination');
	        $this->load->helper('date');
	        $this->load->helper('form','url','file','directory');	
	        $valid_login = $this->session->userdata ( 'login' );
    			if ($valid_login == 1) {
        		$level = $this->session->userdata('leveling');
        		
        		if ($level == '1') {
        			redirect(base_url('/Admin/Home/index'),$data);
        		}
        		elseif ($level == '2') {
        			redirect(base_url('/Siswa/Home'),$data);
				}
				elseif ($level == '3') {
					redirect(base_url('/Guru/Home'),$data);
				}
        		else{
        			redirect(base_url('Home/index'));
        		}
    		}
    		return true;
		}
		
		public function index()
		{
			$data['login'] = $this->session->userdata('id',TRUE);
	      	if($data['login']==FALSE)
	       	{
         		$this->load->view('login');
        	}

        	elseif ($data['login']==TRUE) {
        		
        		$level = $this->session->userdata('id_leveling');
        		
        		if ($level == '1') {
        			redirect(base_url('/Admin/Home'),$data);
        		}
        		elseif ($level == '2') {
        			redirect(base_url('/Siswa/Home'),$data);
				}
				elseif ($level == '3') {
					redirect(base_url('/Guru/Home'),$data);
				}
        		else{
        			redirect(base_url('Home/login'));
        		}
        	}

			else{
				echo "Something's Wrong";
			}
		}

		public function login()
		{
			$this->load->view('login');
		}

		function proses()
		{
			$email      =   trim(strip_tags($this->input->post('email')));
	        $password   =   md5($this->input->post('password'));
	        $hasil      =   $this->Data_model->login($email,$password);

	        if($hasil->num_rows() == 1)
	        {
	          foreach ($hasil->result_array() as $data)
	          {
	            $session_id         =   $data['id'];
	            $session_email      =   $data['email'];
				$session_nama       =   $data['nama'];
				$session_level		= 	$data['id_leveling'];
	          }

	          $sess_user = array(
	                  'id'=>$session_id,
	                  'email'=>$session_email,
					  'nama'=>$session_nama,
					  'leveling'=>$session_level,
	          );

	          $this->session->set_userdata($sess_user,TRUE);
	          $this->session->set_userdata('login',TRUE);
	          $level = $this->session->userdata('leveling');
        		
        		if ($level == '1') {
        			redirect(base_url('/Admin/Home'),$data);
        		}
        		elseif ($level == '2') {
        			redirect(base_url('/Siswa/Home'),$data);
				}
				elseif ($level == '3') {
        			redirect(base_url('/Guru/Home'),$data);
        		}
        		else{
        			print_r($data);
        		}
	          
	        }
	        else
	        {
	            $message = "Username and/or Password incorrect.\\nTry again.";
	            echo "<script type='text/javascript'>alert('$message');</script>";
	            redirect(base_url('Home/login'),'refresh');
        	}
		}

		public function register()
		{
			$this->load->view('register');
		}

	}
?>