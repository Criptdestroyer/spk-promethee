<?php
	
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
	        $this->load->helper('date','tes');
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
					redirect(base_url('Admin/Home/'),$data);
				}
        		elseif ($level == '2') {
        			redirect(base_url('Siswa/Home/'),$data);
				}
				elseif ($level == '3') {
        			
        		}
        		else{
        			print_r($data);
        		}
        	}

			else{
				echo "Something's Wrong";
			}
		}


		/**
		*
		*	Halaman Utama
		*
		*
		*/
		public function index()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['biodata']		=	$this->Data_model->cek_profil($id_pengguna);
			$data['nilaiun']		=	$this->Data_model->cek_nilaiun($id_pengguna);
			$data['sertifikat']		=	$this->Data_model->cek_sertifikat($id_pengguna);
			$data['content']		=	'Guru/home';
			$this->load->view('Guru/template',$data);
		}

		function profil()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['Guru']			=	$this->Data_model->Guru($id_pengguna);
			$data['biodata']		=	$this->Data_model->cek_profil($id_pengguna);
			$data['nilaiun']		=	$this->Data_model->cek_nilaiun($id_pengguna);
			$data['sertifikat']		=	$this->Data_model->cek_sertifikat($id_pengguna);
			$data['content']		=	'Guru/profil';
			$this->load->view('Guru/template',$data);
		}


		function update_profil()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['Guru']			=	$this->Data_model->Guru($id_pengguna);
			$data['biodata']		=	$this->Data_model->cek_profil($id_pengguna);
			$data['nilaiun']		=	$this->Data_model->cek_nilaiun($id_pengguna);
			$data['sertifikat']		=	$this->Data_model->cek_sertifikat($id_pengguna);
			$data['guru']			=	$this->Data_model->daftar_guru();
			$data['kelas']			=	$this->Data_model->daftar_kelas();
			$data['content']		=	'Guru/update_profil';
			$this->load->view('Guru/template',$data);
		}

		function input_profil()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['Guru']			=	$this->Data_model->Guru($id_pengguna);
			$data['biodata']		=	$this->Data_model->cek_profil($id_pengguna);
			$data['nilaiun']		=	$this->Data_model->cek_nilaiun($id_pengguna);
			$data['sertifikat']		=	$this->Data_model->cek_sertifikat($id_pengguna);
			$data['guru']			=	$this->Data_model->daftar_guru();
			$data['kelas']			=	$this->Data_model->daftar_kelas();
			$data['content']		=	'Guru/input_profil';
			$this->load->view('Guru/template',$data);
		}

		function proses_input_siswa()
		{
			$this->checklogin();
					
				$data = array(
					'id' => $this->session->userdata('id'),
					'nama' => $this->input->post('nama'),
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'id_kelas'=> $this->input->post('id_kelas'),
					'kecamatan' => $this->input->post('kecamatan'),			 
				);
				
				$this->form_validation->set_rules("nama","nama","required");
				$this->form_validation->set_rules("id_kelas","id_kelas","required");
				
   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->insert_siswa($data);
            	echo "<script> alert('Data SIswa disimpan.');</script>";
            	redirect(base_url('Siswa/Home/profil'), 'refresh');
      		}
		}

		function proses_update_siswa()
		{
			$this->checklogin();
				
				$id = $this->session->userdata('id');
            		
				$data = array(
					'nama' => $this->input->post('nama'),
					'jenis_kelamin' => $this->input->post('jenis_kelamin'),
					'id_kelas'=> $this->input->post('id_kelas'),
					'kecamatan' => $this->input->post('kecamatan'),			 
				);
				
				$this->form_validation->set_rules("nama","nama","required");
				$this->form_validation->set_rules("id_kelas","id_kelas","required");
				
   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
            	$this->Data_model->update_siswa($data,$id);
            	echo "<script> alert('Data SIswa disimpan.');</script>";
            	redirect(base_url('Siswa/Home/profil'), 'refresh');
      		}
		}

		function nilaiun()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['siswa']			=	$this->Data_model->siswa($id_pengguna);
			$data['nilai']			=	$this->Data_model->nilaiun($id_pengguna);
			$data['biodata']		=	$this->Data_model->cek_profil($id_pengguna);
			$data['nilaiun']		=	$this->Data_model->cek_nilaiun($id_pengguna);
			$data['sertifikat']		=	$this->Data_model->cek_sertifikat($id_pengguna);
			$data['content']		=	'Siswa/nilaiun';
			$this->load->view('Siswa/template',$data);
		}

		function input_nilaipsikotes()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$guru = $this->Data_model->gurup($id_pengguna);
			foreach ($guru->result_array() as $key)
				$a = $key['id_kelas'];
			$data['siswa']			=	$this->Data_model->daftar_siswa_kelas($a);
			$data['nilai']			=	$this->Data_model->nilaiun($id_pengguna);
			$data['biodata']		=	$this->Data_model->cek_profil($id_pengguna);
			$data['nilaiun']		=	$this->Data_model->cek_nilaiun($id_pengguna);
			$data['sertifikat']		=	$this->Data_model->cek_sertifikat($id_pengguna);
			$data['content']		=	'Guru/input_nilaipsikotes';
			$this->load->view('Guru/template',$data);
		}

		function input_nilaiakademik()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$guru = $this->Data_model->gurup($id_pengguna);
			foreach ($guru->result_array() as $key)
				$a = $key['id_kelas'];
			$data['siswa']			=	$this->Data_model->daftar_siswa_kelas($a);
			$data['nilai']			=	$this->Data_model->nilaiun($id_pengguna);
			$data['biodata']		=	$this->Data_model->cek_profil($id_pengguna);
			$data['nilaiun']		=	$this->Data_model->cek_nilaiun($id_pengguna);
			$data['sertifikat']		=	$this->Data_model->cek_sertifikat($id_pengguna);
			$data['content']		=	'Guru/input_nilaiakademik';
			$this->load->view('Guru/template',$data);
		}

		function proses_input_nilaiun()
		{		
			$this->checklogin();
			 
			$id= $this->session->userdata('id');
			$calon	=	$this->Data_model->siswa($id);
			foreach ($calon->result_array() as $key)

			//$cek =  $this->Data_model->ceknilaik($id);
	
			$a = $this->input->post('mtk');
			$b = $this->input->post('b_ind');
			$c = $this->input->post('b_ing');
			$d = $this->input->post('ipa');
			$e = $this->input->post('ips');
			$f = $this->input->post('agama');
			$g = $this->input->post('pkn');

			$ss = ($a+$b+$c+$d+$e+$f+$g)/7;
			
			$key['id_siswa']; 

			$data = array(
			 	'id' => $id,
			 	'mtk' => $a,
				'b_ind' => $b,
				'b_ing' => $c,
				'ipa'=> $d,
				'ips' => $e,
				'agama'=> $f,
				'pkn' => $g,
				'rata' => $ss,
			);

			$datas = array(
				'calon_id' => $key['id_siswa'],
				'id_kriteria' => '7',
				'value' => $ss,
			);
				
			$this->form_validation->set_rules("mtk","mtk","required");
			$this->form_validation->set_rules("b_ind","b_ind","required");
			$this->form_validation->set_rules("b_ing","b_ing","required");
			$this->form_validation->set_rules("ipa","ipa","required");
			$this->form_validation->set_rules("ips","ips","required");
			$this->form_validation->set_rules("agama","agma","required");
			$this->form_validation->set_rules("pkn","pkn","required");
				
   			if($this->form_validation->run() == FALSE){
            	echo validation_errors();
        	}
        	else{
        		
    			$this->Data_model->insert_nilaiun($data);
    			$this->Data_model->insert_nilaikriteria($datas);
            	echo "<script> alert('Data SIswa disimpan.');</script>";
            	redirect(base_url('Siswa/Home/profil'), 'refresh');
        		
      		}
		}

		function input_sertifikat()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['siswa']			=	$this->Data_model->siswa($id_pengguna);
			$data['nilai']			=	$this->Data_model->nilaiun($id_pengguna);
			$data['biodata']		=	$this->Data_model->cek_profil($id_pengguna);
			$data['nilaiun']		=	$this->Data_model->cek_nilaiun($id_pengguna);
			$data['sertifikat']		=	$this->Data_model->cek_sertifikat($id_pengguna);
			$data['content']		=	'Siswa/input_sertifikat';
			$this->load->view('Siswa/template',$data);
		}

		public function proses_input_sertifikat()
		{
			$id = $this->session->userdata('id');
			$calon	=	$this->Data_model->siswa($id);
			foreach ($calon->result_array() as $key)

			$config['upload_path'] 			= 	'file/dokumen';
			$config['allowed_types'] 		= 	'pdf|jpg|jpeg|png';
			$config['max_size']				= 	'900000000000000000000000000000000000';
			$config['remove_spaces']  		= 	FALSE;
			$this->load->library('upload', $config);
			$this->upload->initialize($config);

			//$NamaSertifikat = $this->input->post('NamaSertifikat');
			$points = $this->input->post('NamaSertifikat');
			$this->form_validation->set_rules("NamaSertifikat","NamaSertifikat","required");
			$files = $_FILES;

		    for($i=0; $i< count($points); $i++)
		    {           
		        $_FILES['FileSertifikat']['name']= $files['FileSertifikat']['name'][$i];
		        $_FILES['FileSertifikat']['type']= $files['FileSertifikat']['type'][$i];
		        $_FILES['FileSertifikat']['tmp_name']= $files['FileSertifikat']['tmp_name'][$i];
		        $_FILES['FileSertifikat']['error']= $files['FileSertifikat']['error'][$i];
		        $_FILES['FileSertifikat']['size']= $files['FileSertifikat']['size'][$i];    

		        $this->upload->initialize($config);
		        $this->upload->do_upload();
		        if(!$this->upload->do_upload('FileSertifikat'))
				{
					echo $config['upload_path'];
					echo $this->upload->display_errors();
				}
				else 
				{
					//echo "We Have Been Here";
					$dataUpload = $this->upload->data();

					//print_r($dataUpload);

					$data 						=	array();
					$data['id']					= 	$this->session->userdata('id');
					$data['NamaSertifikat']		= 	$points[$i];
					$data['FileSertifikat']		= 	$dataUpload['file_name'];
					//$this->form_validation->set_rules('NamaSertifikat[]','NamaSertifikat[]','required');
					
					//print_r($data);
					if($data == null)
					{
						
						$this->input_sertifikat();
					}
					else
					{
							$this->Data_model->input_sertifikat($data);
							
							//print_r($files);
							
					}
				}
		    }
		    $cek = $this->Data_model->cek_sertifikat($id);
		    $numsertifikat = $cek->num_rows();
		    $datas = array(
				'calon_id' => $key['id_siswa'],
				'id_kriteria' => '5',
				'value' => $numsertifikat,
			);
		    $this->Data_model->insert_nilaikriteria($datas);
		    echo "<script> alert('Data Dokumen Berhasil disimpan.');</script>";
		    redirect(base_url('Siswa/Home/'), 'refresh');
			
		}

		function daftar_sertifikat()
		{
			$this->checklogin();
			$data['tittle']			=	"SPK Seleksi Kelas Unggulan";
			$id_pengguna			=	$this->session->userdata('id');
			$data['pengguna']		=	$this->Data_model->data_pengguna($id_pengguna);
			$data['siswa']			=	$this->Data_model->siswa($id_pengguna);
			$data['nilai']			=	$this->Data_model->nilaiun($id_pengguna);
			$data['biodata']		=	$this->Data_model->cek_profil($id_pengguna);
			$data['nilaiun']		=	$this->Data_model->cek_nilaiun($id_pengguna);
			$data['sertifikat']		=	$this->Data_model->cek_sertifikat($id_pengguna);
			$data['content']		=	'Siswa/daftar_sertifikat';
			$this->load->view('Siswa/template',$data);
		}

		function proses_input_npsikotes()
		{
				$this->checklogin();
				$id			=	$this->session->userdata('id');
				$calon	=	$this->Data_model->siswa($id);
			foreach ($calon->result_array() as $key)

				$result = $this->input->post('siswa');
				$result_explode = explode('|', $result);

				$data = array(
					'id'  => $result_explode[0],
					//'nama' => $result_explode[1],
					'nilai' => $this->input->post('nilai'),	 
				);

				$this->form_validation->set_rules("nilai","nilai","required");
				
	   			if($this->form_validation->run() == FALSE){
	            	echo validation_errors();
	        	}
	        	else{
	        		$datas = array(
						'calon_id' => $key['id_siswa'],
						'id_kriteria' => '4',
						'value' => $this->input->post('nilai'),
					);
				    $this->Data_model->insert_nilaikriteria($datas);
	            	$this->Data_model->insert_npsikotes($data);
	            	echo "<script> alert('Data SIswa disimpan.');</script>";
	            	redirect(base_url('Guru/Home/nilaipsikotes'), 'refresh');
	      		}
		}

		 public function nilaipsikotes()
        {
            $this->checklogin();
            $data['tittle']         =   "Seleksi Kelas";
            $id_pengguna            =   $this->session->userdata('id');
            $data['pengguna']       =   $this->Data_model->data_pengguna($id_pengguna);
            $data['peserta']        =   $this->Data_model->daftar_siswa();
            $guru = $this->Data_model->gurup($id_pengguna);
			foreach ($guru->result_array() as $key)
				$a = $key['id_kelas'];
			$data['siswa']			=	$this->Data_model->daftar_siswa_kelas($a);
            $data['nilai_psikotes'] =   $this->Data_model->nilaipsikotes();
            $data['kriteria']       =   $this->Data_model->daftar_kriteria();
            //$data['nilai_bobot']    =   $this->Data_model->SumKriteria();
            $data['content']        =   'Guru/nilaipsikotes';
            $this->load->view('Guru/template',$data);
        }

         public function nilaiakademik()
        {
            $this->checklogin();
            $data['tittle']         =   "Seleksi Kelas";
            $id_pengguna            =   $this->session->userdata('id');
            $data['siswa']           =  $this->Data_model->ambil_nilai_akademik_by($id_pengguna);
           
            $data['pengguna']       =   $this->Data_model->data_pengguna($id_pengguna);
   //          $data['peserta']        =   $this->Data_model->daftar_siswa();
   //          $guru = $this->Data_model->gurup($id_pengguna);
			// foreach ($guru->result_array() as $key)
			// 	$a = $key['id_kelas'];
			// $data['siswa']			=	$this->Data_model->daftar_siswa_kelas($a);
   //          $data['nilai_akademik'] =   $this->Data_model->nilaiakademik();
   //          $data['kriteria']       =   $this->Data_model->daftar_kriteria();
   //          //$data['nilai_bobot']    =   $this->Data_model->SumKriteria();
            $data['content']        =   'Guru/nilaiakademik';
            $this->load->view('Guru/template',$data);
        }

		function proses_input_nakademik()
		{
				$this->checklogin();
				$id			=	$this->session->userdata('id');
				$calon	=	$this->Data_model->siswa($id);
				$result = $this->input->post('siswa');
				$result_explode = explode('|', $result);              
                $res = $this->Data_model->tambah_nilai_akademik($result_explode[2],$this->input->post("nilai"));
                $this->nilaiakademik();
		}

		public function logout()
		{
			$this->session->unset_userdata('login');
        	redirect(base_url('Home'),'refresh');
		}
	}

?>