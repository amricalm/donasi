<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route Home
Route::get('/', 'AmanController@index');

// Login
Route::get('aman', 'AmanController@index')->name('aman');
Route::post('aman/validasi', 'AmanController@validasi');

// Logout
Route::get('keluar','AmanController@logout')->name('keluar');

// Dashboard
Route::get('dashboard', ['middleware'=>'cekRole', 'uses'=>'DashboardController@index'])->name("dashboard");

// Route Daftar User
Route::get('daftar-user', 'UserController@daftar');

// Route Tambah User
Route::get('tambah-user', 'UserController@tambah');

// Route Tambah Data User
Route::post('/tambah-user/exec', 'UserController@execuser');

// Route Edit User
Route::get('edit-user/{id}', 'UserController@edit');

// Route Edit Data User
Route::post('/edit-user/update-data', 'UserController@updatedata');

// Route Ganti Password
Route::get('ganti-password', 'UserController@ganti_password');

// Route Hapus Data User
Route::get('daftar-user/delete/{id}', 'UserController@hapus');

// Route Daftar Group
Route::get('daftar-group', 'GroupController@daftar');

// Route Tambah Group
Route::get('tambah-group', 'GroupController@tambah');

// Route Tambah Data Group
Route::post('/tambah-group/exec', 'GroupController@execgroup');

// Route Edit Group
Route::get('edit-group/{id}', 'GroupController@edit');

// Route Edit Data Group
Route::post('/edit-group/update-data', 'GroupController@updatedata');

// Route Hapus Data Group
Route::get('daftar-group/delete/{id}', 'GroupController@hapus');

// Route Daftar Unit
Route::get('daftar-unit', 'UnitController@daftar');

// Route Tambah Unit
Route::get('tambah-unit', 'UnitController@tambah');

// Route Tambah Data Unit
Route::post('/tambah-unit/exec', 'UnitController@execunit');

// Route Edit Unit
Route::get('edit-unit/{id}', 'UnitController@edit');

// Route Edit Data Unit
Route::post('/edit-unit/update-data', 'UnitController@updatedata');

// Route Hapus Data Unit
Route::get('/daftar-unit/delete/{id}', 'UnitController@hapus');

// Route Daftar Position
Route::get('daftar-position', 'PositionController@daftar');

// Route Tambah Position
Route::get('tambah-position', 'PositionController@tambah');

// Route Tambah Data Position
Route::post('/tambah-position/exec', 'PositionController@execposition');

// Route Edit Position
Route::get('edit-position/{id}', 'PositionController@edit');

// Route Edit Data Position
Route::post('/edit-position/update-data', 'PositionController@updatedata');

// Route Hapus Data Position
Route::get('/daftar-position/delete/{id}', 'PositionController@hapus');

// Route Daftar Role
Route::get('role', 'RoleController@index');

// Route Daftar Sys Module
Route::get('daftar-module', 'ModuleController@daftar');

// Route Tambah Sys Module
Route::get('tambah-module', 'ModuleController@tambah');

// Route Tambah Data Module
Route::post('/tambah-module/exec', 'ModuleController@execmodule');

// Route Edit Sys Module
Route::get('edit-module/{id}', 'ModuleController@edit');

// Route Edit Data Module
Route::post('/edit-module/update-data', 'ModuleController@updatedata');

// Route Hapus Data Module
Route::get('daftar-module/delete/{id}', 'ModuleController@hapus');

// Route Surat Masuk
Route::get('surat-masuk', 'SuratMasukController@index');
Route::post('surat-masuk/upload', 'SuratMasukController@upload')->name('surat-masuk/upload');

// Route Surat Masuk 2
Route::get('surat-masuk2', 'SuratMasukController@index2');

// Route Surat Masuk 3
Route::get('surat-masuk3', 'SuratMasukController@index3');

// Route Tambah Surat Masuk
Route::get('surat-masuk/tambah', 'SuratMasukController@tambah');

// Route Tambah Surat Masuk
Route::post('surat-masuk/tambah/exec', 'SuratMasukController@tambah_exec');

// Route Tambah Surat Masuk
Route::post('surat-masuk/sm_ajax', 'SuratMasukController@tambah_exec_ajax');

// Route Isi Surat Masuk
Route::get('isi-surat-masuk/{id}', 'SuratMasukController@isi');

// Route Edit Update Surat Masuk
Route::post('/surat-masuk/update', 'SuratMasukController@update_sm');

// Route Edit Update Surat Masuk
Route::post('isi-surat-masuk/update_ajax', 'SuratMasukController@update_sm_ajax');

// Route Hapus Surat Masuk
Route::get('surat-masuk/delete/{id}', 'SuratMasukController@hapus');

// Route Daftar Surat Masuk Eksternal
Route::get('df-sm-eks', 'SuratMasukController@df_sm_eks');

// Route Tambah Surat Masuk Eksternal
Route::get('add-sm-eks', 'SuratMasukController@add_sm_eks');

// Route Disposisi Surat Masuk Eksternal
Route::get('dis-sm-eks', 'SuratMasukController@dis_sm_eks');

// Route Lihat Surat Masuk Eksternal
Route::get('isi-sm-eks', 'SuratMasukController@isi_sm_eks');

// Route Edit Surat Masuk Eksternal
Route::get('edit-sm-eks', 'SuratMasukController@edit_sm_eks');

// Route Surat Masuk Eksternal Agendaris
Route::get('sme-agendaris', 'SuratMasukController@sme_agendaris');

// Route Surat Masuk Eksternal Agendaris
Route::post('sme-agendaris/add_exec', 'SuratMasukController@sme_agendaris_add_exec');

//route Surat Masuk Eksternal Agendaris
Route::get('sme-agendaris/edit/{ID}','SuratMasukController@sme_agendaris_edit');

//route Surat Masuk Eksternal Agendaris
Route::post('sme-agendaris/update/{ID}','SuratMasukController@sme_agendaris_update');

//route Surat Masuk Eksternal Agendaris Hapus
Route::get('sme-agendaris/hapus/{ID}','SuratMasukController@sme_agendaris_hapus');

// Route Surat Masuk Eksternal Kasubag Sekper
Route::get('sme-kasubag-sekper', 'SuratMasukController@sme_kasubag_sekper');

// Route Surat Masuk Eksternal Kabag Sekper
Route::get('sme-kabag-sekper', 'SuratMasukController@sme_kabag_sekper');

// Route Surat Masuk Eksternal Direksi
Route::get('sme-direksi', 'SuratMasukController@sme_direksi');

// Route Surat Masuk Eksternal Kabag
Route::get('sme-kabag', 'SuratMasukController@sme_kabag');

// Route Surat Masuk Eksternal Kasubag
Route::get('sme-kasubag', 'SuratMasukController@sme_kasubag');

// Route Surat Masuk Eksternal Staff
Route::get('sme-staff', 'SuratMasukController@sme_staff');

// Route Surat Masuk Internal Kabag
Route::get('smi-kabag', 'SuratMasukController@smi_kabag');

// Route Surat Masuk Internal Kasubag
Route::get('smi-kasubag', 'SuratMasukController@smi_kasubag');

// Route Surat Masuk Internal Staff
Route::get('smi-staff', 'SuratMasukController@smi_staff');

// Route Surat Masuk Internal Direksi & Sekdir
Route::get('smi-dir-sekdir', 'SuratMasukController@smi_dir_sekdir');

// Route Surat Masuk Internal Direksi
Route::get('smi-direksi', 'SuratMasukController@smi_direksi');

// Route Surat Masuk Internal Antar Bagian Kabag
Route::get('smi-kabag-ab', 'SuratMasukController@smi_kabag_ab');

// Route Surat Masuk Internal Antar Bagian Kasubag
Route::get('smi-kasubag-ab', 'SuratMasukController@smi_kasubag_ab');

// Route Surat Masuk Internal Antar Bagian Staff
Route::get('smi-staff-ab', 'SuratMasukController@smi_staff_ab');

// Route Daftar Surat Masuk Internal
Route::get('df-sm-int', 'SuratMasukController@df_sm_int');

// Route Tambah Surat Masuk Internal
Route::get('add-sm-int', 'SuratMasukController@add_sm_int');

// Route Disposisi Surat Masuk Internal
Route::get('dis-sm-int', 'SuratMasukController@dis_sm_int');

// Route Lihat Surat Masuk Internal
Route::get('isi-sm-int', 'SuratMasukController@isi_sm_int');

// Route Edit Surat Masuk Internal
Route::get('edit-sm-int', 'SuratMasukController@edit_sm_int');

// Route Daftar Surat Masuk Bagian
Route::get('df-sm-bag', 'SuratMasukController@df_sm_bag');

// Route Tambah Surat Masuk Bagian
Route::get('add-sm-bag', 'SuratMasukController@add_sm_bag');

// Route Disposisi Surat Masuk Bagian
Route::get('dis-sm-bag', 'SuratMasukController@dis_sm_bag');

// Route Lihat Surat Masuk Bagian
Route::get('isi-sm-bag', 'SuratMasukController@isi_sm_bag');

// Route Edit Surat Masuk Bagian
Route::get('edit-sm-bag', 'SuratMasukController@edit_sm_bag');

//====================== SURAT KELUAR ============================//
// Route Surat Keluar Staff
Route::get('sk-staff', 'SuratKeluarController@sk_staff');

// Route Surat Keluar Kabag
Route::get('sk-kabag', 'SuratKeluarController@sk_kabag');

// Route Surat Keluar Kasubag
Route::get('sk-kasubag', 'SuratKeluarController@sk_kasubag');

// Route Surat Keluar Staff
Route::get('sk-staff-ab', 'SuratKeluarController@sk_staff_ab');

// Route Surat Keluar Kabag
Route::get('sk-kabag-ab', 'SuratKeluarController@sk_kabag_ab');

// Route Surat Keluar Kasubag
Route::get('sk-kasubag-ab', 'SuratKeluarController@sk_kasubag_ab');

// Route Alur Surat Keluar
Route::get('surat-keluar3', 'SuratKeluarController@index3');

// Route Daftar Surat Keluar
Route::get('surat-keluar', 'SuratKeluarController@index');

// Route Tambah Surat Keluar
Route::get('surat-keluar/tambah', 'SuratKeluarController@tambah');

// Route Eksekusi Tambah Ajax Surat Keluar
Route::get('surat-keluar/sk_ajax', 'SuratKeluarController@tambah_exec_ajax');

// Route Eksekusi Tambah Ajax Surat Keluar
Route::post('surat-keluar/postAcceptor', 'SuratKeluarController@postAcceptor');
Route::get('surat-keluar/postAcceptor', function()
{
    return View::make('postAcceptor');
});

// Route Isi Surat Keluar
Route::get('isi-surat-keluar/{id}', 'SuratKeluarController@isi');

// Route Eksekusi Edit Surat Keluar
Route::post('isi-surat-keluar/update_ajax', 'SuratKeluarController@update_sk_ajax');

// Route Sampah Surat Keluar
Route::get('surat-keluar/sampah/{id}', 'SuratKeluarController@sampah');

// Route Hapus Surat Keluar
Route::get('surat-keluar/hapus/{id}', 'SuratKeluarController@hapus');

// Route Kembalikan Surat Keluar
Route::get('surat-keluar/kembalikan/{id}', 'SuratKeluarController@kembalikan');

// Route Cetak Surat Keluar
Route::get('surat-keluar/cetak-pdf/{id}', 'SuratKeluarController@cetak_pdf');
//===================== END SURAT KELUAR ===========================//

// Route Tracking
Route::get('tracking', 'TrackingController@index');

// Route Tracking
Route::get('history', 'HistoryController@index');

// Route Daftar Jenis Surat
Route::get('daftar-jenis-surat', 'JenisSuratController@daftar');

// Route Tambah Jenis Surat
Route::get('tambah-jenis-surat', 'JenisSuratController@tambah');

// Route Tambah data Jenis Surat
Route::post('/tambah-jenis-surat/exec', 'JenisSuratController@execjenissurat');

// Route Edit Jenis Surat
Route::get('edit-jenis-surat/{id}', 'JenisSuratController@edit');

// Route Edit Data Jenis Surat
Route::post('/edit-jenis-surat/update-data', 'JenisSuratController@updatedata');

// Route Hapus Data Jenis Surat
Route::get('daftar-jenis-surat/delete/{id}', 'JenisSuratController@hapus');

// Route Laporan
Route::get('laporan', 'LaporanController@index');

// Route Profile
Route::get('profile', 'ProfileController@index');

// Route Profile
Route::get('layout', 'LayoutController@index');

// Route Profile
Route::get('tambah-layout', 'LayoutController@tambah');

// Route Profile
Route::get('edit-layout', 'LayoutController@edit');

// Route Download File Qms
Route::get('qms/download/{id}', 'QmsController@getDownload');


// ================= Route Pedoman Mutu Qms ==========================//
Route::get('pedoman-mutu', 'QmsController@daftar_pedoman_mutu');
Route::get('pedoman-mutu/tambah', 'QmsController@tambah_pedoman_mutu');
Route::post('pedoman-mutu/simpan', 'QmsController@simpan_pedoman_mutu');
Route::get('pedoman-mutu/edit/{id}', 'QmsController@edit_pedoman_mutu');
Route::post('pedoman-mutu/update', 'QmsController@update_pedoman_mutu');
Route::get('pedoman-mutu/hapus/{id}', 'QmsController@hapus_pedoman_mutu');
// ================= End Route Pedoman Mutu Qms ==========================//

// ================= Route Struktur Organisasi Qms ==========================//
Route::get('struktur-organisasi', 'QmsController@daftar_struktur_organisasi');
Route::get('struktur-organisasi/tambah', 'QmsController@tambah_struktur_organisasi');
Route::post('struktur-organisasi/simpan', 'QmsController@simpan_struktur_organisasi');
Route::get('struktur-organisasi/edit/{id}', 'QmsController@edit_struktur_organisasi');
Route::post('struktur-organisasi/update', 'QmsController@update_struktur_organisasi');
Route::get('struktur-organisasi/hapus/{id}', 'QmsController@hapus_struktur_organisasi');
// =============== End Route Struktur Organisasi Qms =======================//

// ================= Route Kebutuhan Qms ==========================//
Route::get('kebutuhan', 'QmsController@daftar_kebutuhan');
Route::get('kebutuhan/tambah', 'QmsController@tambah_kebutuhan');
Route::post('kebutuhan/simpan', 'QmsController@simpan_kebutuhan');
Route::get('kebutuhan/edit/{id}', 'QmsController@edit_kebutuhan');
Route::post('kebutuhan/update', 'QmsController@update_kebutuhan');
Route::get('kebutuhan/hapus/{id}', 'QmsController@hapus_kebutuhan');
// =============== End Route Kebutuhan Qms =======================//

// =============== Route Daftar Peta Proses Bisnis Qms =======================//
Route::get('peta-proses-bisnis', 'QmsController@daftar_peta_proses_bisnis');
Route::get('peta-proses-bisnis/tambah', 'QmsController@tambah_peta_proses_bisnis');
Route::post('peta-proses-bisnis/simpan', 'QmsController@simpan_peta_proses_bisnis');
Route::get('peta-proses-bisnis/edit/{id}', 'QmsController@edit_peta_proses_bisnis');
Route::post('peta-proses-bisnis/update', 'QmsController@update_peta_proses_bisnis');
Route::get('peta-proses-bisnis/hapus/{id}', 'QmsController@hapus_peta_proses_bisnis');
// =============== End Route Peta Proses Bisnis Qms =======================//

// ================ Route Rencana Mutu Qms ==================//
Route::get('rencana-mutu', 'QmsController@daftar_rencana_mutu');
Route::get('rencana-mutu/tambah', 'QmsController@tambah_rencana_mutu');
Route::post('rencana-mutu/simpan', 'QmsController@simpan_rencana_mutu');
Route::get('rencana-mutu/edit/{id}', 'QmsController@edit_rencana_mutu');
Route::post('rencana-mutu/update', 'QmsController@update_rencana_mutu');
Route::get('rencana-mutu/hapus/{id}', 'QmsController@hapus_rencana_mutu');
// ================ End Route Rencana Mutu Qms ==================//

// ================ Route Kebijakan Mutu Qms ==================//
Route::get('kebijakan-mutu', 'QmsController@daftar_kebijakan_mutu');
Route::get('kebijakan-mutu/tambah', 'QmsController@tambah_kebijakan_mutu');
Route::post('kebijakan-mutu/simpan', 'QmsController@simpan_kebijakan_mutu');
Route::get('kebijakan-mutu/edit/{id}', 'QmsController@edit_kebijakan_mutu');
Route::post('kebijakan-mutu/update', 'QmsController@update_kebijakan_mutu');
Route::get('kebijakan-mutu/hapus/{id}', 'QmsController@hapus_kebijakan_mutu');
// ================ End Route Kebijakan Mutu Qms ==================//

// ================ Route SWOT Qms ==================//
Route::get('swot', 'QmsController@daftar_swot');
Route::get('swot/tambah', 'QmsController@tambah_swot');
Route::post('swot/simpan', 'QmsController@simpan_swot');
Route::get('swot/edit/{id}', 'QmsController@edit_swot');
Route::post('swot/update', 'QmsController@update_swot');
Route::get('swot/hapus/{id}', 'QmsController@hapus_swot');
// ================ End Route SWOT Qms ==================//

// ================ Route Pemenuhan Standar Qms ==================//
Route::get('pemenuhan-standar', 'QmsController@daftar_pemenuhan_standar');
Route::get('pemenuhan-standar/tambah', 'QmsController@tambah_pemenuhan_standar');
Route::post('pemenuhan-standar/simpan', 'QmsController@simpan_pemenuhan_standar');
Route::get('pemenuhan-standar/edit/{id}', 'QmsController@edit_pemenuhan_standar');
Route::post('pemenuhan-standar/update', 'QmsController@update_pemenuhan_standar');
Route::get('pemenuhan-standar/hapus/{id}', 'QmsController@hapus_pemenuhan_standar');
// ================ End Route Pemenuhan Standar Qms ==================//

// ================= Route SOP Qms ==========================//
Route::get('sop', 'QmsController@daftar_sop');
Route::get('sop/tambah', 'QmsController@tambah_sop');
Route::post('sop/simpan', 'QmsController@simpan_sop');
Route::get('sop/edit/{id}', 'QmsController@edit_sop');
Route::post('sop/update', 'QmsController@update_sop');
Route::get('sop/hapus/{id}', 'QmsController@hapus_sop');
// =============== End Route SOP Qms =======================//

// ================= Route Instruksi Kerja Qms ==========================//
Route::get('instruksi-kerja', 'QmsController@daftar_instruksi_kerja');
Route::get('instruksi-kerja/tambah', 'QmsController@tambah_instruksi_kerja');
Route::post('instruksi-kerja/simpan', 'QmsController@simpan_instruksi_kerja');
Route::get('instruksi-kerja/edit/{id}', 'QmsController@edit_instruksi_kerja');
Route::post('instruksi-kerja/update', 'QmsController@update_instruksi_kerja');
Route::get('instruksi-kerja/hapus/{id}', 'QmsController@hapus_instruksi_kerja');
// ================= End Route Instruksi Kerja Qms ==========================//

// =============== Route Formulir Qms =======================//
Route::get('formulir', 'QmsController@daftar_formulir');
Route::get('formulir/tambah', 'QmsController@tambah_formulir');
Route::post('formulir/simpan', 'QmsController@simpan_formulir');
Route::get('formulir/edit/{id}', 'QmsController@edit_formulir');
Route::post('formulir/update', 'QmsController@update_formulir');
Route::get('formulir/hapus/{id}', 'QmsController@hapus_formulir');
// =============== Route Formulir Qms =======================//

// ================= Route arsip Qms ==========================//
Route::get('arsip', 'QmsController@daftar_arsip');
Route::get('arsip/tambah', 'QmsController@tambah_arsip');
Route::post('arsip/simpan', 'QmsController@simpan_arsip');
Route::get('arsip/edit/{id}', 'QmsController@edit_arsip');
Route::post('arsip/update', 'QmsController@update_arsip');
Route::get('arsip/hapus/{id}', 'QmsController@hapus_arsip');
// =============== End Route arsip Qms =======================//

// ================= Route Peluang Qms ==========================//
Route::get('peluang', 'QmsController@daftar_peluang');
Route::get('peluang/tambah', 'QmsController@tambah_peluang');
Route::post('peluang/simpan', 'QmsController@simpan_peluang');
Route::get('peluang/edit/{id}', 'QmsController@edit_peluang');
Route::post('peluang/update', 'QmsController@update_peluang');
Route::get('peluang/hapus/{id}', 'QmsController@hapus_peluang');
// =============== End Route Peluang Qms =======================//

// ================= Route Resiko Qms ==========================//
Route::get('resiko', 'QmsController@daftar_resiko');
Route::get('resiko/tambah', 'QmsController@tambah_resiko');
Route::post('resiko/simpan', 'QmsController@simpan_resiko');
Route::get('resiko/edit/{id}', 'QmsController@edit_resiko');
Route::post('resiko/update', 'QmsController@update_resiko');
Route::get('resiko/hapus/{id}', 'QmsController@hapus_resiko');
// =============== End Route Resiko Qms =======================//

// ================= Route Ketidaksesuaian Qms ==========================//
Route::get('ketidaksesuaian', 'QmsController@daftar_ketidaksesuaian');
Route::get('ketidaksesuaian/tambah', 'QmsController@tambah_ketidaksesuaian');
Route::post('ketidaksesuaian/simpan', 'QmsController@simpan_ketidaksesuaian');
Route::get('ketidaksesuaian/edit/{id}', 'QmsController@edit_ketidaksesuaian');
Route::post('ketidaksesuaian/update', 'QmsController@update_ketidaksesuaian');
Route::get('ketidaksesuaian/hapus/{id}', 'QmsController@hapus_ketidaksesuaian');
// =============== End Route Ketidaksesuaian Qms =======================//

// ================= Route Jadwal Audit Internal Qms ==========================//
Route::get('jadwal-audit-internal', 'QmsController@daftar_jadwal_audit_internal');
Route::get('jadwal-audit-internal/tambah', 'QmsController@tambah_jadwal_audit_internal');
Route::post('jadwal-audit-internal/simpan', 'QmsController@simpan_jadwal_audit_internal');
Route::get('jadwal-audit-internal/edit/{id}', 'QmsController@edit_jadwal_audit_internal');
Route::post('jadwal-audit-internal/update', 'QmsController@update_jadwal_audit_internal');
Route::get('jadwal-audit-internal/hapus/{id}', 'QmsController@hapus_jadwal_audit_internal');
// =============== End Route Jadwal Audit Internal Qms =======================//

// ================= Route Laporan Audit Internal Qms ==========================//
Route::get('laporan-audit-internal', 'QmsController@daftar_laporan_audit_internal');
Route::get('laporan-audit-internal/tambah', 'QmsController@tambah_laporan_audit_internal');
Route::post('laporan-audit-internal/simpan', 'QmsController@simpan_laporan_audit_internal');
Route::get('laporan-audit-internal/edit/{id}', 'QmsController@edit_laporan_audit_internal');
Route::post('laporan-audit-internal/update', 'QmsController@update_laporan_audit_internal');
Route::get('laporan-audit-internal/hapus/{id}', 'QmsController@hapus_laporan_audit_internal');
// =============== End Route Laporan Audit Internal Qms =======================//

// ================= Route Undangan Rapat Tinjauan Manajemen Qms ==========================//
Route::get('undangan-rapat', 'QmsController@daftar_undangan_rapat');
Route::get('undangan-rapat/tambah', 'QmsController@tambah_undangan_rapat');
Route::post('undangan-rapat/simpan', 'QmsController@simpan_undangan_rapat');
Route::get('undangan-rapat/edit/{id}', 'QmsController@edit_undangan_rapat');
Route::post('undangan-rapat/update', 'QmsController@update_undangan_rapat');
Route::get('undangan-rapat/hapus/{id}', 'QmsController@hapus_undangan_rapat');
// =============== End Route Undangan Rapat Tinjauan Manajemen Qms =======================//

// ================= Route Daftar Hadir Rapat Tinjauan Manajemen Qms ==========================//
Route::get('daftar-hadir-rapat', 'QmsController@daftar_daftar_hadir_rapat');
Route::get('daftar-hadir-rapat/tambah', 'QmsController@tambah_daftar_hadir_rapat');
Route::post('daftar-hadir-rapat/simpan', 'QmsController@simpan_daftar_hadir_rapat');
Route::get('daftar-hadir-rapat/edit/{id}', 'QmsController@edit_daftar_hadir_rapat');
Route::post('daftar-hadir-rapat/update', 'QmsController@update_daftar_hadir_rapat');
Route::get('daftar-hadir-rapat/hapus/{id}', 'QmsController@hapus_daftar_hadir_rapat');
// =============== End Route Daftar Hadir Rapat Tinjauan Manajemen Qms =======================//

// ================= Route Notulen Rapat Tinjauan Manajemen Qms ==========================//
Route::get('notulen-rapat', 'QmsController@daftar_notulen_rapat');
Route::get('notulen-rapat/tambah', 'QmsController@tambah_notulen_rapat');
Route::post('notulen-rapat/simpan', 'QmsController@simpan_notulen_rapat');
Route::get('notulen-rapat/edit/{id}', 'QmsController@edit_notulen_rapat');
Route::post('notulen-rapat/update', 'QmsController@update_notulen_rapat');
Route::get('notulen-rapat/hapus/{id}', 'QmsController@hapus_notulen_rapat');
// =============== End Route Notulen Rapat Tinjauan Manajemen Qms =======================//

// ================= Route Audit Eksternal Qms ==========================//
Route::get('audit-eksternal', 'QmsController@daftar_audit_eksternal');
Route::get('audit-eksternal/tambah', 'QmsController@tambah_audit_eksternal');
Route::post('audit-eksternal/simpan', 'QmsController@simpan_audit_eksternal');
Route::get('audit-eksternal/edit/{id}', 'QmsController@edit_audit_eksternal');
Route::post('audit-eksternal/update', 'QmsController@update_audit_eksternal');
Route::get('audit-eksternal/hapus/{id}', 'QmsController@hapus_audit_eksternal');
// =============== End Route Audit Internal Qms =======================//

Auth::routes();

