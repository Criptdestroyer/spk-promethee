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
		}

		public function checklogin()
		{
			$data['login']			=	$this->session->userdata('login',TRUE);
	       
	       	if($data['login']==FALSE)
	       	{
          		redirect(base_url('/Home/login'));
        	}

        	elseif ($data['login']==TRUE) {
        		
        		$level = $this->session->userdata('leveling');
        		
        		if ($level == '1') {
					
				}
        		elseif ($level == '2') {
        			redirect(base_url('Guru/Home/'),$data);
				}
				elseif ($level == '3') {
        			redirect(base_url('Siswa/Home/'),$data);
        		}
        		else{
        			print_r($data);
        		}
        	}

			else{
				echo "Something's Wrong";
			}
		}
		
		public function index()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['content']		=	'Admin/home';
			$this->load->view('Admin/template',$data);
		}

		public function welcome()
		{
			print_r($data);
		}

		public function daftar_guru()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['guru']			=	$this->Data_model->data_guru();
			$data['content']		=	'Admin/daftar_guru';
			$this->load->view('Admin/template',$data);
		}

		public function tambah_guru()
		{	
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['guru']			=	$this->Data_model->daftar_guru();
			$data['kelas']			=	$this->Data_model->daftar_kelas();
			$data['content']		=	'Admin/tambah_guru';
			$this->load->view('Admin/template',$data);
		}

		public function hapus_guru($id)
		{
			$this->checklogin();
			$this->Data_model->hapus_guru($id);
        	redirect(base_url('Admin/Home/daftar_guru'), 'refresh');
		}


		public function edit_guru($id)
		{	
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['guru']			=	$this->Data_model->daftar_guru();
			$data['kelas']			=	$this->Data_model->daftar_kelas();
			$data['content']		=	'Admin/edit_guru';
			$this->load->view('Admin/template',$data);
		}

		public function proses_tambah_guru()
		{
			$this->checklogin();

				$data = array(
					'id'  => $this->input->post('id'),
					'id_kelas'=> $this->input->post('id_kelas'),				
				);
				
				$this->form_validation->set_rules("id","id","required");
				$this->form_validation->set_rules("id_kelas","id_kelas","required");
				
   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->insert_guru($data);
            	echo "<script> alert('Data Kelas disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_kelas'), 'refresh');
      		}
		}



















































		public function daftar_kelas()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['kelas']			=	$this->Data_model->daftar_kelas();
			$data['content']		=	'Admin/daftar_kelas';
			$this->load->view('Admin/template',$data);
		}

		public function tambah_kelas()
		{	
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['content']		=	'Admin/tambah_kelas';
			$this->load->view('Admin/template',$data);
		}

		public function proses_tambah_kelas()
		{
			$this->checklogin();

			
				$tingkat     = $this->input->post('tingkat');
				$konsentrasi = $this->input->post('konsentrasi');
				$kelas 		 = $this->input->post('kelas');

				$namakelas = $tingkat." ".$konsentrasi." ".$kelas;

				$data = array(
					'NamaKelas' => $namakelas
				);
				
				$this->form_validation->set_rules("tingkat","tingkat","required");
				$this->form_validation->set_rules("konsentrasi","konsentrasi","required");
				$this->form_validation->set_rules("kelas","kelas","required");
				
   		
   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->insert_kelas($data);
            	echo "<script> alert('Data Kelas disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_kelas'), 'refresh');
      		}
		}

		public function daftar_siswa()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['siswa']			=	$this->Data_model->daftar_siswa();
			$data['content']		=	'Admin/daftar_siswa';
			$this->load->view('Admin/template',$data);
		}

		public function tambah_siswa()
		{	
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['content']		=	'Admin/tambah_guru';
			$this->load->view('Admin/template',$data);
		}

		public function daftar_pengguna()
		{
			$this->checklogin();
			$data['tittle']		= "Daftar Pengguna || SPK Guru Berprestasi";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['user']		= $this->Data_model->daftar_pengguna();
			$data['content']	= 'Admin/daftar_pengguna';
			$this->load->view('Admin/template',$data);

		}


		public function edit_pengguna($id)
		{
			$this->checklogin();
			$data['tittle']		= "Edit Pengguna || SPK Guru Berprestasi";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['user']		= $this->Data_model->detail_pengguna($id);
			$data['level']      = $this->Data_model->data_level();
			$data['content']    = 'Admin/edit_pengguna';
        	$this->load->view('Admin/template',$data);					
		}

		public function proses_update_pengguna($id)
		{
			$this->checklogin();

			$data = array(
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'id_leveling' => $this->input->post('id_leveling'),
			);
				$this->form_validation->set_rules("nama","nama","required");
				$this->form_validation->set_rules("id_leveling","id_leveling","required");
				$this->form_validation->set_rules("username","username","required");
				$this->form_validation->set_rules("email","email","required");
				
   		
   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->update_pengguna($data,$id);
            	echo "<script> alert('Data Pengguna disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_pengguna'), 'refresh');
      		}
		}

		public function hapus_pengguna($id)
		{
			$this->checklogin();
			$this->Data_model->hapus_pengguna($id);
        	redirect(base_url('Admin/Home/daftar_pengguna'), 'refresh');
		}

		public function tambah_pengguna()
		{
			$this->checklogin();
			$data['tittle']		= "Tambah Pengguna || SPK Guru Berprestasi";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['level']      = $this->Data_model->data_level();
			$data['content']    = 'Admin/tambah_pengguna';
        	$this->load->view('Admin/template',$data);
		}

		public function proses_tambah_pengguna()
		{
			$this->checklogin();

			$data = array(
            	'password' => md5($this->input->post('password')),
				'nama' => $this->input->post('nama'),
				'username' => $this->input->post('username'),
				'email' => $this->input->post('email'),
				'id_leveling' => $this->input->post('id_leveling'),
			);
				$this->form_validation->set_rules("nama","nama","required");
				$this->form_validation->set_rules("password","password","required");
				$this->form_validation->set_rules("id_leveling","id_leveling","required");
				$this->form_validation->set_rules("username","username","required");
				$this->form_validation->set_rules("email","email","required");

   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->input_pengguna($data);
            	echo "<script> alert('Data Pengguna disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_pengguna'), 'refresh');
      		}
		}
		

		public function aktivasi_pengguna()
		{
			$this->checklogin();
		}
		public function daftar_kriteria()
		{
			$this->checklogin();
			$data['tittle']		= "Daftar Kriteria || SPK Guru Berprestasi";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['kriteria']   = $this->Data_model->daftar_kriteria();
			$data['content']    = 'Admin/daftar_kriteria';
        	$this->load->view('Admin/template',$data);
		}

		public function tambah_kriteria()
		{
			$this->checklogin();
			$data['tittle']		= "Tambah Kriteria || SPK Guru Berprestasi";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['kriteria']      = $this->Data_model->daftar_kriteria();
			$data['content']    = 'Admin/tambah_kriteria';
        	$this->load->view('Admin/template',$data);
		}

		public function proses_tambah_kriteria()
		{   
			$this->checklogin();
			$data = array(
				'NamaKriteria' => $this->input->post('NamaKriteria'),
				'Bobot' => $this->input->post('Bobot'),
			);
			$this->form_validation->set_rules('NamaKriteria','NamaKriteria','required');
			$this->form_validation->set_rules('Bobot','Bobot','required');

			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->input_kriteria($data);
            	echo "<script> alert('Data Kriteria disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_kriteria'), 'refresh');
      		}
		}  

		public function edit_kriteria($id)
		{
			$this->checklogin();
			$data['tittle']		= "Daftar Kriteria || SPK Guru Berprestasi";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['kriteria']   = $this->Data_model->data_kriteria($id);
			$data['content']    = 'Admin/edit_kriteria';
        	$this->load->view('Admin/template',$data);
		}

		public function proses_update_kriteria($id)
		{   
			$this->checklogin();
			$data = array(
				'NamaKriteria' => $this->input->post('NamaKriteria'),
				'Bobot' => $this->input->post('Bobot'),
			);
			$this->form_validation->set_rules('NamaKriteria','NamaKriteria','required');
			$this->form_validation->set_rules('Bobot','Bobot','required');

			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->update_kriteria($data,$id);
            	echo "<script> alert('Data Kriteria disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_kriteria'), 'refresh');
      		}
		}  

		public function hapus_kriteria($id)
		{
			$this->checklogin();
			$this->Data_model->hapus_kriteria($id);
        	redirect(base_url('Admin/Home/daftar_kriteria'), 'refresh');
		}

		public function daftar_subkriteria()
		{
			$this->checklogin();
			$data['tittle']		= "Daftar Sub Kriteria || SPK Guru Berprestasi";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['kriteria']   = $this->Data_model->daftar_kriteria();
			$data['subkriteria']   = $this->Data_model->daftar_subkriteria();
			$data['content']    = 'Admin/daftar_subkriteria';
        	$this->load->view('Admin/template',$data);
		}

		public function edit_subkriteria($id)
		{
			$this->checklogin();
			$data['tittle']		= "Edit SUb Kriteria || SPK Guru Berprestasi";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['subkriteria']      = $this->Data_model->data_subkriteria($id);
			$data['content']    = 'Admin/edit_subkriteria';
        	$this->load->view('Admin/template',$data);
		}

		public function proses_update_subkriteria()
		{
			$this->checklogin();
			$params = array(
				'id_kriteria' => $this->input->post('id_kriteria'),
				'subkriteria' => $this->input->post('subkriteria'),
            );
			$this->form_validation->set_rules('id_kriteria','id_kriteria','required');
			$this->form_validation->set_rules('subkriteria','subkriteria','required');

			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->update_subkriteria($data);
            	echo "<script> alert('Data Kriteria disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_kriteria'), 'refresh');
      		}
		}

		public function tambah_subkriteria()
		{
			$this->checklogin();
			$data['tittle']		= "Tambah Kriteria || SPK Guru Berprestasi";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['kriteria']   = $this->Data_model->daftar_kriteria();
			$data['content']    = 'Admin/tambah_subkriteria';
        	$this->load->view('Admin/template',$data);
		}

		public function proses_tambah_subkriteria()
		{
			$this->checklogin();
			$params = array(
				'id_kriteria' => $this->input->post('id_kriteria'),
				'subkriteria' => $this->input->post('subkriteria'),
            );
			$this->form_validation->set_rules('id_kriteria','id_kriteria','required');
			$this->form_validation->set_rules('subkriteria','subkriteria','required');

			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->input_subkriteria($data);
            	echo "<script> alert('Data Kriteria disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_kriteria'), 'refresh');
      		}
		}

		public function hapus_subkriteria($id)
		{
			$this->checklogin();
			$this->Data_model->hapus_kriteria($id);
        	redirect(base_url('Admin/Home/daftar_kriteria'), 'refresh');
		}

		public function daftar_juri()
		{
			$this->checklogin();
			$data['tittle']		= "Daftar Juri || SPK Guru Berprestasi";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['juri']		= $this->Data_model->daftar_juri();
			$data['content']	= 'Admin/daftar_juri';
			$this->load->view('Admin/template',$data);

		}

		public function tambah_juri()
		{
			$this->checklogin();
			$data['tittle']		= "Tambah Juri || SPK Guru Berprestasi";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['level_juri'] = $this->Data_model->level_juri();
			$data['kriteria']	= $this->Data_model->daftar_kriteria();
			$data['content']    = 'Admin/tambah_juri';
        	$this->load->view('Admin/template',$data);
		}

		public function proses_tambah_juri()
		{
			$this->checklogin();
			$data = array(
				'id' => $this->input->post('id'),
				'id_kriteria' => $this->input->post('id_kriteria'),
			);
			$this->form_validation->set_rules('id','id','required');
			$this->form_validation->set_rules('id_kriteria','id_kriteria','required');

			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->input_juri($data);
            	echo "<script> alert('Data Juri disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_juri'), 'refresh');
      		}
		}
		public function hapus_juri($id)
		{
			$this->checklogin();
			$this->Data_model->hapus_juri($id);
        	redirect(base_url('Admin/Home/daftar_juri'), 'refresh');
		}

		public function edit_juri($id)
		{
			$this->checklogin();
			$data['tittle']		= "Tambah Juri || SPK Guru Berprestasi";
			$id_pengguna		= $this->session->userdata('id');
			$data['pengguna']	= $this->Data_model->data_pengguna($id_pengguna);
			$data['ujuri']		= $this->Data_model->data_juri($id);
			$data['level_juri'] = $this->Data_model->level_juri();
			$data['kriteria']	= $this->Data_model->daftar_kriteria();
			$data['content']    = 'Admin/edit_juri';
        	$this->load->view('Admin/template',$data);
		}

		public function proses_edit_juri($id)
		{
			$this->checklogin();
			$data = array(
				'id' => $this->input->post('id'),
				'id_kriteria' => $this->input->post('id_kriteria'),
			);
			$this->form_validation->set_rules('id','id','required');
			$this->form_validation->set_rules('id_kriteria','id_kriteria','required');

			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->update_juri($id,$data);
            	echo "<script> alert('Data Juri disimpan.');</script>";
            	redirect(base_url('Admin/Home/daftar_juri'), 'refresh');
      		}
		}

		public function pemilihan_wp()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Guru Berprestasi";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['peserta']		=	$this->Data_model->data_peserta();
			$data['nilai_peserta']  =   $this->Data_model->nilai_peserta();
			$data['kriteria']		= 	$this->Data_model->daftar_kriteria();
			$data['nilai_bobot']	=   $this->Data_model->SumKriteria();
			$data['content']		=	'Admin/perhitungan_wp';
			$this->load->view('Admin/template',$data);
		}

		public function logout()
		{
			$this->session->unset_userdata('login');
        	redirect(base_url('Home'),'refresh');
		}
	}
?>