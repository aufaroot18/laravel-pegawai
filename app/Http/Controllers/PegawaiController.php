<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class PegawaiController extends Controller {
    // method index: read
    public function index() {
    	$judul = 'Halaman Pegawai';
    	$pegawai = DB::table('pegawai')->get();
    	return view('pegawai.index', ['judul' => $judul, 'pegawai' => $pegawai]);
    }
}
