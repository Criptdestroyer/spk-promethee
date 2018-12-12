<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Data_model extends CI_Model{
	
	function __construct()
	{
		parent::__construct();
	}

	public function login($email, $password)
	{
		$this->db->select('*');
		$this->db->from('pengguna p');
		$this->db->join('leveling b','b.id_leveling=p.id_leveling');
		$this->db->where('p.email', $email);
		$this->db->where('p.password',$password);
		$q	=	$this->db->get();
		return $q;
	}


    /**
     * 
     * Semua Model Yang Berhubungan Dengan 
     * Pengguna/ User
     * 
     * Last Update xx/xx/xxxx
     * 
     * 
     */
	function data_pengguna($var)
	{
            $this->db->select('*');
		    $this->db->from('pengguna p');
		    $this->db->join('leveling l','l.id_leveling=p.id_leveling');
		    $this->db->where('p.id',$var);
		    $q	=	$this->db->get();
		    return $q;   
    }
    
    function daftar_pengguna()
    {
            $this->db->select('*');
		    $this->db->from('pengguna p');
		    $this->db->join('leveling l','l.id_leveling=p.id_leveling');
		    $q	=	$this->db->get();
		    return $q;
    }
       
    function detail_pengguna($id)
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('leveling l','l.id_leveling=p.id_leveling');
        $this->db->where('p.id',$id);
        $q	=	$this->db->get();
        return $q;
    }

    function input_pengguna($data) 
    {
        $q = $this->db->insert('pengguna',$data);
    }

    function cek_biodata($id)
    {
        $this->db->select('*');
        $this->db->from('biodata p');
        $this->db->where('p.id',$id);
        $q	=	$this->db->get();
        return $q;
    }

    function cek_Artikel($id)
    {
        $this->db->select('*');
        $this->db->from('artikel p');
        $this->db->where('p.id',$id);
        $q	=	$this->db->get();
        return $q;
    }

    function data_profil($id)
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('biodata l','l.id=p.id');
        $this->db->where('p.id',$id);
        $q	=	$this->db->get();
        return $q;
    }


    function input_profil($data) 
    {
        $q = $this->db->insert('biodata',$data);
    }

    function input_dokumen($data)
    {
        $q = $this->db->insert('artikel',$data);
    }

    function data_artikel($id)
    {
        $this->db->select('*');
        $this->db->from('artikel p');
        $this->db->where('p.id',$id);
        $q  =   $this->db->get();
        return $q;
    }
    function update_pengguna($data,$id) 
    {
        $this->db->where('id',$id);
        $this->db->update('pengguna',$data);
    }
    function update_profil($data,$id) 
    {
        $this->db->where('id',$id);
        $this->db->update('biodata',$data);
    }

    function hapus_pengguna($id)
    {
        $this->db->where('id',$id);
		$this->db->delete('pengguna');
    }


    /**
     * 
     * 
     * Semua Model Yang Berhubungan Dengan Leveling 
     * User
     * 
     * Last Update xx/xx/xxxx
     */
    function data_level()
    {       
        $this->db->select('*');
        $this->db->from('leveling');
        return $q = $this->db->get();
    }

    function input_data_level($data) 
    {
        $q = $this->db->insert('leveling',$data);
    }

    function update_level($data,$id) 
    {
        $this->db->where('id_leveling',$id);
        $this->db->update('leveling',$data);
    }

    function hapus_level($id)
    {
        $this->db->where('id_leveling',$id);
		$this->db->delete('leveling');
    }

    function daftar_siswa()
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('siswa l','l.id=p.id');
        $this->db->join('kelas k','l.id_kelas=k.id_kelas');
        $this->db->where('p.id_leveling','2');
        $q  =   $this->db->get();
        return $q;
    }

    function data_guru()
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('leveling l','l.id_leveling=p.id_leveling');
        $this->db->join('guru g','p.id=g.id','left');
        $this->db->join('kelas k','g.id_kelas=k.id_kelas','left');
        $this->db->where('p.id_leveling','3');
        $q  =   $this->db->get();
        return $q;
    }

    function daftar_guru()
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('leveling l','l.id_leveling=p.id_leveling');
        $this->db->where('p.id_leveling','3');
        $q  =   $this->db->get();
        return $q;
    }

    function guru($id)
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('leveling l','l.id_leveling=p.id_leveling');
        $this->db->join('guru g','p.id=g.id','left');
        $this->db->join('kelas k','g.id_kelas=k.id_kelas','left');
        $this->db->where('p.id_leveling','3');
        $this->db->where('g.id_guru',$id);
        $q  =   $this->db->get();
        return $q;
    }

    function insert_guru($data)
    {
        $this->db->insert('guru',$data);
    }
    function hapus_guru($id)
    {
        $this->db->where('id_guru',$id);
        $this->db->delete('guru');
    }

    function daftar_kelas()
    {
        $this->db->select('*');
        $this->db->from('kelas');
        $q  =   $this->db->get();
        return $q;
    }

    function insert_kelas($data)
    {
        $this->db->insert('kelas',$data);
    }

    function daftar_kriteria()
    {
        $this->db->select('*');
        $this->db->from('kriteria k');
        $q = $this->db->get();
        return $q;
    }
    
    function data_kriteria($id)
    {
        $this->db->select('*');
        $this->db->from('kriteria k');
        $this->db->where('id_kriteria',$id);
        $q = $this->db->get();
        return $q;
    }

    function daftar_subkriteria()
    {
        $this->db->select('*');
        $this->db->from('sub_kriteria k');
        $q = $this->db->get();
        return $q;
    }

    function input_kriteria($data) 
    {
        $q = $this->db->insert('kriteria',$data);
    }

    function update_kriteria($data,$id) 
    {
        $this->db->where('id_kriteria',$id);
        $this->db->update('kriteria',$data);
    }

    function hapus_kriteria($id)
    {
        $this->db->where('id_kriteria',$id);
		$this->db->delete('kriteria');
    }

    function input_data_subkriteria($data) 
    {
        $q = $this->db->insert('sub_kriteria',$data);
    }

    function update_subkriteria($data,$id) 
    {
        $this->db->where('id_subkriteria',$id);
        $this->db->update('sub_kriteria',$data);
    }

    function hapus_subkriteria($id)
    {
        $this->db->where('id_subkriteria',$id);
		$this->db->delete('sub_kriteria');
    }

    function data_peserta()
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('leveling l','p.id_leveling=l.id_leveling');
        $this->db->where('l.id_leveling','2');
        $q = $this->db->get();
        return $q;

    }

    function level_juri()
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('leveling l','p.id_leveling=l.id_leveling');
        $this->db->where('l.id_leveling','3');
        $q = $this->db->get();
        return $q;
    }
    function data_juri($id)
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('leveling l','p.id_leveling=l.id_leveling');
        $this->db->join('juri j','j.id=p.id');
        $this->db->where('l.id_leveling','3');
        $this->db->where('j.id_juri',$id);
        $q = $this->db->get();
        return $q;
    }
    function hapus_juri($id)
    {
        $this->db->where('id_juri',$id);
        $this->db->delete('juri');
    }

    function input_juri($data) 
    {
        $this->db->insert('juri',$data);
    }

    function update_juri($id,$data)
    {
        $this->db->where('id_juri',$id);
        $this->db->update('juri',$data);
    }



    public function nilai_peserta()
    {
        $this->db->select('*');
        $this->db->from('nilai_kriteria');
        $q = $this->db->get();
        return $q;
        
    }

     public function nilai_subpeserta()
    {
        $this->db->select('*');
        $this->db->from('nilai_subkriteria');
        $q = $this->db->get();
        return $q;
        
    }

    public function SumKriteria()
    {
        $this->db->select_sum('Bobot', 'BobotSeluruh');
        $this->db->from('kriteria k');
        $q = $this->db->get();
        return $q;
    }
    
    public function daftar_juri()
    {
        $this->db->select('*');
        $this->db->from('pengguna p');
        $this->db->join('leveling l','l.id_leveling=p.id_leveling');
        $this->db->join('juri j', 'p.id=j.id');
        $this->db->join('kriteria k', 'j.id_kriteria=k.id_kriteria');
        $this->db->where('l.id_leveling','3');
        $q  =   $this->db->get();
        return $q;
    }
}