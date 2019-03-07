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

    // method create
    public function create() {
    	$judul = 'Tambah Data Pegawai';
    	return view('pegawai.create', ['judul' => $judul]);
    }

    // Store to DB
    public function store(Request $request) {
    	$validateData = $request->validate([
    		'nama' => 'required',
    		'jabatan' => 'required',
    		'umur' => 'required|numeric',
    		'alamat' => 'required',
    	]);

    	DB::table('pegawai')->insert(
    		[
    			'nama' => $request->input('nama'),
    			'jabatan' => $request->input('jabatan'),
    			'umur' => $request->input('umur'),
    			'alamat' => $request->input('alamat')
    		]
    	);

    	return redirect('pegawai');
    }

    public function edit($id) {
        $judul = 'Edit Data Pegawai';
        $user = DB::table('pegawai')->where('id', $id)->first();
        return view('pegawai.edit', ['user' => $user, 'judul' => $judul]);
    }
}
