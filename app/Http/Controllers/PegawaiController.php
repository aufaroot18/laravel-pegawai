<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Pegawai;

class PegawaiController extends Controller {
    // method index: read
    public function index() {
    	$judul = 'Halaman Pegawai';
        $pegawai = Pegawai::all();
    	return view('pegawai.index', ['judul' => $judul, 'pegawai' => $pegawai]);
    }

    // Show create form
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

        Pegawai::create([
            'nama' => $request->input('nama'),
            'jabatan' => $request->input('jabatan'),
            'umur' => $request->input('umur'),
            'alamat' => $request->input('alamat')
        ]);

    	return redirect('pegawai');
    }

    // Show edit form
    public function edit($id) {
        $judul = 'Edit Data Pegawai';
        $user = DB::table('pegawai')->where('id', $id)->first();
        return view('pegawai.edit', ['user' => $user, 'judul' => $judul]);
    }

    // Update to Database
    public function update(Request $request) {
        DB::table('pegawai')
            ->where('id', $request->input('id'))
            ->update([
                'nama' => $request->input('nama'),
                'jabatan' => $request->input('jabatan'),
                'umur' => $request->input('umur'),
                'alamat' => $request->input('alamat'),
            ]);

        return redirect('pegawai');
    }

    // Delete data
    public function destroy($id) {
        DB::table('pegawai')->where('id', $id)->delete();
        return redirect('pegawai');
    }

    // Search data
    public function search(Request $request) {
        $judul = 'Halaman Pegawai';
        $search = $request->input('search');
        $pegawai = DB::table('pegawai')
                    ->where('nama', 'like', "%$search%")
                    ->orWhere('jabatan', 'like', "%$search%")
                    ->orWhere('alamat', 'like', "%$search%")
                    ->get();
        return view('pegawai.index', ['judul' => $judul, 'pegawai' => $pegawai]);
    }
}
