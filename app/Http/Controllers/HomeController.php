<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB; //untuk menjalankan query builder
use Illuminate\Support\Facades\Auth;//untuk menjalankan logout

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        request()->session()->invalidate();

        request()->session()->regenerateToken();

        return redirect('/login');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //mengambil data dari tabel buku
        $buku = DB::table('buku')
                    ->where('stok', '>=', 1)
                    ->get();
        //mengirim data ke view mahasiswa
        return view('pages.buku' , ['buku' => $buku]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.form_data');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'kodebuku' => 'required|unique:buku|max:50',
            'judul' => 'required',
            'gambar' => 'required',
            'pengarang' => 'required',
            'penerbit' => 'required',
            'stok' => 'required',
            'created_at' => 'required',
            'updated_at' => 'required',
        ]);
        if ($validator->fails()) {
            return back()->withInput($request->all())->withErrors($validator);
        }

        DB::table('buku')->insert([
            'kodebuku' => $request->kodebuku,
            'judul' => $request->judul,
            'gambar' => $request->gambar,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'stok' => $request->stok,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
        ]);
        return redirect('/buku');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //mengambil data buku berdasarkan id yang dipilih
        $buku = DB::table('buku')->where('id', $id)->get();
        // passing data buku yang didapat ke view/pages edit.blade.php
        return view('pages.edit' , ['buku' => $buku]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //update data buku berdasarkan id
        DB::table('buku')->where('id', $request->id)->update([
            'kodebuku' => $request->kodebuku,
            'judul' => $request->judul,
            'gambar' => $request->gambar,
            'pengarang' => $request->pengarang,
            'penerbit' => $request->penerbit,
            'stok' => $request->stok,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at

        ]);
        //alihkan ke halaman home
        return redirect('/buku');
    }

    public function hapus($id)
    {
        //menghapus data buku berdasarkan id
            DB::table('buku')->where('id', $id)->delete();
            return redirect('/buku');
    }
}
