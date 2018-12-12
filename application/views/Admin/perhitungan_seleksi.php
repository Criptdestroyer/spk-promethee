<?php 

	$host = 'localhost';
	$user = 'root';
	$pass = '';
	$db	  = 'spk-pro';

	$koneksi = mysqli_connect($host, $user, $pass, $db);

function NilaiPreferensi($tp='', $f_jka, $f_q, $f_p='', $f_bobot)
{
	$negatif = -1*abs($f_p);

	if ($tp == '1') {
		
	}

	elseif ($tp == '2') {
		# code...
	}

	elseif ($tp == '3') {
		if(($negatif <= $f_jka) AND ($f_jka <= $f_p))
		{
			return $f_jka/$f_p;
		}
		elseif(($f_jka < $negatif) AND ($f_jka > $f_p))
		{
			
		}
		else
		{return 1;}
	}
	
			


}

	$hasil1 = mysqli_query($koneksi, "SELECT distinct siswa.* FROM Siswa JOIN CALON_SUBKRITERIA ON (siswa.id_siswa=CALON_SUBKRITERIA.calon_id) ");

	while ($data_row = mysqli_fetch_assoc($hasil1)) {
		$datas['data'][$data_row['id']] = $data_row;

		$hasil2 = mysqli_query($koneksi, "SELECT KRITERIA.nama, KRITERIA.id, SUBKRITERIA.NAMA AS nama_subkriteria, SUBKRITERIA.BOBOT AS bobot_subkriteria, CALON_SUBKRITERIA.value  FROM CALON_SUBKRITERIA JOIN SUBKRITERIA ON (SUBKRITERIA.ID=CALON_SUBKRITERIA.subkriteria_id) join KRITERIA ON (KRITERIA.ID=SUBKRITERIA.kriteria_id) WHERE CALON_SUBKRITERIA.CALON_ID =".$datas['data'][$data_row['id']]['id_siswa']);

		while ($data_row2 = mysqli_fetch_assoc($hasil2)) {
			$datas['data'][$data_row['id']]['kriteria'][$data_row2['nama']] = $data_row2;
		}
	}
	// ekstra
	// $datas['ekstra']['total_bobot'] = array_sum($bobot);

	$data_calon = $datas;

	unset($datas);

	$hasil3 = mysqli_query($koneksi, "SELECT distinct KRITERIA.* FROM KRITERIA");

	while ($data_row = mysqli_fetch_assoc($hasil3)) {
		$datas['data'][$data_row['nama']] = $data_row;

		$hasil4 = mysqli_query($koneksi, "SELECT * FROM SUBKRITERIA WHERE KRITERIA_ID =".$datas['data'][$data_row['nama']]['id']);
		while ($data_row2 = mysqli_fetch_assoc($hasil4)) {
			$datas['data'][$data_row['nama']]['subkriteria'][] = $data_row2;
		}
		$bobot[] = $datas['data'][$data_row['nama']]['bobot'];
	}
	$datas['ekstra']['total_bobot'] = array_sum($bobot);
	$data_kriteria = $datas;
	unset($datas);


	$tipe = $_POST['tipe'];
$q = $_POST['q'];
$p = $_POST['p'];

$jarak_kriteria = [];
$h_d = [];
$ranking = [];
$hasil = [];
$ip = [];

foreach ($data_kriteria['data'] as $key_kriteria => $value_kriteria) {

	$bobot = $value_kriteria['bobot']/$data_kriteria['ekstra']['total_bobot'];

	$y = 1;
	// Jarak Kriteria
	foreach ($data_calon['data'] as $key_calon_y => $value_calon_y) {

			 $tmp_bobot_y = $value_calon_y['kriteria'][$key_kriteria]['value'];

			 //$value_calon_y['kriteria'][$key_kriteria]['nama_subkriteria'] == 'input' ? $value_calon_y['kriteria'][$key_kriteria]['value'] : $value_calon_y['kriteria'][$key_kriteria]['bobot_subkriteria']; 


		foreach ($data_calon['data'] as $key_calon_x => $value_calon_x) {
			$tmp_bobot_x = $value_calon_x['kriteria'][$key_kriteria]['nama_subkriteria'] == 'input' ? $value_calon_x['kriteria'][$key_kriteria]['value'] : $value_calon_x['kriteria'][$key_kriteria]['bobot_subkriteria'];
			$jka = $tmp_bobot_y-$tmp_bobot_x;	

			$jarak_kriteria[$key_kriteria]['A'.$y][] = $jka;

			$nilai_pref = NilaiPreferensi($tipe[$value_kriteria['id']], $jka, $q[$value_kriteria['id']],$p[$value_kriteria['id']], $bobot);

			$h_d[$key_kriteria]['A'.$y][] = $nilai_pref;
			$ip[$key_kriteria]['A'.$y][] = $nilai_pref*$bobot;

		}
		$y++;
	}

	
}


for ($i=0; $i < count($data_calon['data']); $i++) { 
	
	for ($j=0; $j < count($data_calon['data']); $j++) {

		$tmp_sum = 0;
		foreach ($data_kriteria['data'] as $key => $value) {

			$tmp_sum += $ip[$key]['A'.($i+1)][$j];	


		}
		$ranking['A'.($i+1)][$j] = $tmp_sum*(1/count($data_kriteria['data']));

	}

	$hasil['A'.($i+1)]['leaving']= array_sum($ranking['A'.($i+1)])/(count($data_calon['data'])-1);
}
$j = 0;
foreach ($data_calon['data'] as $key => $value) {
	$tmp_entering = 0;
	for ($i=0; $i < count($data_calon['data']); $i++) { 
		$tmp_entering += $ranking['A'.($i+1)][$j];
	}
	$hasil['A'.($j+1)]['entering'] = $tmp_entering/(count($data_calon['data'])-1);
	$hasil['A'.($j+1)]['net_flow'] = $hasil['A'.($j+1)]['leaving']-$hasil['A'.($j+1)]['entering'];
	$hasil['A'.($j+1)]['status'] = $hasil['A'.($j+1)]['net_flow'] < 0 ? 'Ditolak' : 'Diterima';
	$hasil['A'.($j+1)]['nama'] = $value['nama'];
	$j++;
}


?>