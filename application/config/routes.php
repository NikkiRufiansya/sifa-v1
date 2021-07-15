<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------------
| URI ROUTING
| -------------------------------------------------------------------------
| This file lets you re-map URI requests to specific controller functions.
|
| Typically there is a one-to-one relationship between a URL string
| and its corresponding controller class/method. The segments in a
| URL normally follow this pattern:
|
|	example.com/class/method/id/
|
| In some instances, however, you may want to remap this relationship
| so that a different class/function is called than the one
| corresponding to the URL.
|
| Please see the user guide for complete details:
|
|	https://codeigniter.com/user_guide/general/routing.html
|
| -------------------------------------------------------------------------
| RESERVED ROUTES
| -------------------------------------------------------------------------
|
| There are three reserved routes:
|
|	$route['default_controller'] = 'welcome';
|
| This route indicates which controller class should be loaded if the
| URI contains no data. In the above example, the "welcome" class
| would be loaded.
|
|	$route['404_override'] = 'errors/page_missing';
|
| This route will tell the Router which controller/method to use if those
| provided in the URL cannot be matched to a valid route.
|
|	$route['translate_uri_dashes'] = FALSE;
|
| This is not exactly a route, but allows you to automatically route
| controller and method names that contain dashes. '-' isn't a valid
| class or method name character, so it requires translation.
| When you set this option to TRUE, it will replace ALL dashes in the
| controller and method URI segments.
|
| Examples:	my-controller/index	-> my_controller/index
|		my-controller/my-method	-> my_controller/my_method
*/
$route['default_controller'] = 'AuthController';
$route['404_override'] = '';
$route['translate_uri_dashes'] = FALSE;

//Route Auth
$route['login'] = 'AuthController/login';
$route['logout'] = 'AuthController/logout';

//Route Dashboard
$route['dashboard'] = 'admin/DashboardController';


//Admin manajemen Users
$route['staff_admin'] = 'admin/DashboardController/staffAdmin';
$route['tambah_admin'] = 'admin/DashboardController/tambahAdmin';
$route['proses_tambah_admin'] = 'admin/DashboardController/prosesTambahAdmin';
$route['ubah_admin/(:num)'] = 'admin/DashboardController/ubahUser/$1';
$route['proses_ubah_admin'] = 'admin/DashboardController/prosesUbahAdmin';
$route['hapus_admin/(:num)'] = 'admin/DashboardController/hapusAdmin/$1';


//Admin Master Dosen
$route['admin_dosen'] = 'admin/DosenController';
$route['tambah_dosen'] = 'admin/DosenController/tambahDosen';
$route['proses_tambah_dosen'] = 'admin/DosenController/prosesTambahDosen';
$route['ubah_dosen/(:num)'] = 'admin/DosenController/ubahDosen/$1';
$route['proses_ubah_dosen'] = 'admin/DosenController/prosesUbahDosen';
$route['hapus_dosen/(:num)/(:num)'] = 'admin/DosenController/hapusDosen/$1/$2';


//Admin Indentitas Institusi
$route['admin_identitas_institusi'] = 'admin/IdentitasInstitusiController';
$route['tambah_instusi'] = 'admin/IdentitasInstitusiController/tambahInstitusi';
$route['proses_tambah_institusi'] = 'admin/IdentitasInstitusiController/prosesTambahInstitusi';
$route['ubah_institusi/(:num)'] = 'admin/IdentitasInstitusiController/ubahInstitusi/$1';
$route['proses_ubah_institusi'] = 'admin/IdentitasInstitusiController/prosesUbahInstitusi';
$route['hapus_institusi/(:num)'] = 'admin/IdentitasInstitusiController/hapusInstitusi/$1';

//Admin Program Studi
$route['admin_program_studi'] = 'admin/ProgramStudiController';
$route['tambah_program_studi'] = 'admin/ProgramStudiController/tambahProgramStudi';
$route['proses_tambah_program_studi'] = 'admin/ProgramStudiController/prosesTambahProgramStudi';
$route['ubah_studi/(:num)'] = 'admin/ProgramStudiController/ubahProgramStudi/$1';
$route['proses_ubah_program_studi'] = 'admin/ProgramStudiController/prosesUbahProgramStudi';
$route['hapus_studi/(:num)'] = 'admin/ProgramStudiController/hapusProgramStudi/$1';

//Admin Program
$route['admin_program'] = 'admin/ProgramController';
$route['tambah_program'] = 'admin/ProgramController/tambahProgram';
$route['proses_tambah_program'] = 'admin/ProgramController/prosesTambahProgram';
$route['ubah_program/(:num)'] = 'admin/ProgramController/ubahProgram/$1';
$route['proses_ubah_program'] = 'admin/ProgramController/prosesUbahProgram';
$route['hapus_program/(:num)'] = 'admin/ProgramController/hapusProgram/$1';


//admin Kampus
$route['admin_kampus'] = 'admin/KampusController';
$route['tambah_kampus'] = 'admin/KampusController/tambahKampus';
$route['proses_tambah_kampus'] = 'admin/KampusController/prosesTambahKampus';
$route['ubah_kampus/(:num)'] = 'admin/KampusController/ubahKampus/$1';
$route['proses_ubah_kampus'] = 'admin/KampusController/prosesUbahKampus';
$route['hapus_kampus/(:num)'] = 'admin/KampusController/hapusKampus/$1';

//Admin Ruangan
$route['admin_ruangan'] = 'admin/RuanganController';
$route['tambah_ruangan'] = 'admin/RuanganController/tambahRuangan';
$route['proses_tambah_ruangan'] = 'admin/RuanganController/prosesTambahRuangan';
$route['ubah_ruangan/(:num)'] = 'admin/RuanganController/ubahRuangan/$1';
$route['proses_ubah_ruangan'] = 'admin/RuanganController/prosesUbahRuangan';
$route['hapus_ruangan/(:num)'] = 'admin/RuanganController/hapusRuangan/$1';

//Admin Kurikulum
$route['admin_kurikulum'] = 'admin/KurikulumController';
$route['tambah_kurikulum'] = 'admin/KurikulumController/tambahKurikulum';
$route['proses_tambah_kurikulum'] = 'admin/KurikulumController/prosesTambahKurikulum';
$route['ubah_kurikulum/(:num)'] = 'admin/KurikulumController/ubahKurikulum/$1';
$route['proses_ubah_kurikulum'] = 'admin/KurikulumController/prosesUbahController';
$route['hapus_kurikulum/(:num)'] = 'admin/KurikulumController/hapusKurikulum/$1';

//admin Matkul
$route['admin_matakuliah'] = 'admin/MatkulController';
$route['tambah_matkul'] = 'admin/MatkulController/tambahMatkul';
$route['get_kurikulum'] = 'admin/MatkulController/getKurikulum';
$route['proses_tambah_matkul'] = 'admin/MatkulController/prosesTambahMatkul';
$route['ubah_matkul/(:num)'] = 'admin/MatkulController/ubahMatkul/$1';
$route['proses_ubah_matkul'] = 'admin/MatkulController/prosesUbahMatkul';
$route['hapus_matkul/(:num)'] = 'admin/MatkulController/hapusMatkul/$1';

//admin Mahasiswa
$route['admin_mahasiswa'] = 'admin/MahasiswaController';
$route['tambah_mahasiswa'] = 'admin/MahasiswaController/tambahMahasiswa';
$route['proses_tambah_mahasiswa'] = 'admin/MahasiswaController/prosesTambahMahasiswa';
$route['ubah_mahasiswa/(:num)'] = 'admin/MahasiswaController/ubahMahasiswa/$1';
$route['proses_ubah_mahasiswa'] = 'admin/MahasiswaController/prosesUbahMahasiswa';
$route['hapus_mahasiswa/(:num)/(:num)'] = 'admin/MahasiswaController/hapusMahasiswa/$1/$2';

//admin kalender Akademik
$route['admin_kalender_akademik'] = 'admin/KalenderAkademikController';
$route['tambah_kalender'] = 'admin/KalenderAkademikController/tambahKalender';
$route['proses_tambah_kalender'] = 'admin/KalenderAkademikController/prosesTambahKalender';
$route['ubah_kalender/(:num)'] = 'admin/KalenderAkademikController/ubahKalender/$1';
$route['proses_ubah_kalender'] = 'admin/KalenderAkademikController/prosesUbahKalender';
$route['hapus_kalender/(:num)'] = 'admin/KalenderAkademikController/hapusKalender/$1';

//admin jadwal kuliah
$route['admin_jadwal_kuliah'] = 'admin/JadwalKuliahController';
$route['tambah_jadwal'] = 'admin/JadwalKuliahController/tambahJadwal';
$route['get_matkul'] = 'admin/JadwalKuliahController/getMatkul';
$route['get_ruangan'] = 'admin/JadwalKuliahController/getRuangan';
$route['proses_tambah_jadwal'] = 'admin/JadwalKuliahController/prosesTambahJadwal';
$route['ubah_jadwal/(:num)'] = 'admin/JadwalKuliahController/ubahJadwal/$1';
$route['proses_ubah_jadwal'] = 'admin/JadwalKuliahController/prosesUbahJadwal';
$route['hapus_jadwal/(:num)'] = 'admin/JadwalKuliahController/hapusJadwal/$1';
