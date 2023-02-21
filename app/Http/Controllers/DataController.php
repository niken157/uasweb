<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; //untuk menjalankan query builder

class DataController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()//read ada kondisi pinjam
    {
        //mengambil data darri database menggunakan db::table() dan disimpan ke dalam $data
            //menggunakan ->join() untuk menggabungkan tabel lainnya
            //menggunakkan where untuk menyeleksi
            //diakhir get() untuk mengambil data array

            //diakhir first() jika hanya satu data yang diambil

            $peminjaman = DB::table('buku')
                    ->join('peminjaman', 'peminjaman.id', '=', 'buku.id')
                    ->where('keterangan', 'pinjam')
                    ->get();
            //tampilkan view barang dan kirim peminjamannya ke view tersebut
            return view('pages.peminjaman')->with('peminjaman', $peminjaman);
    }
    public function riwayat()//read ada kondisi kembali
    {
        //mengambil data darri database menggunakan db::table() dan disimpan ke dalam $data
            //menggunakan ->join() untuk menggabungkan tabel lainnya
            //menggunakkan where untuk menyeleksi
            //diakhir get() untuk mengambil data array

            //diakhir first() jika hanya satu data yang diambil

            $peminjaman = DB::table('buku')
                    ->join('peminjaman', 'peminjaman.id', '=', 'buku.id')
                    ->where('keterangan', 'kembali')
                    ->get();
            //tampilkan view barang dan kirim peminjamannya ke view tersebut
            return view('pages.riwayat')->with('peminjaman', $peminjaman);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pages.form_data_peminjaman');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('peminjaman')->insert([
            'nomer' => $request->nomer,
            'nama_peminjam' => $request->nama_peminjam,
            'id' => $request->id,
            'keterangan' => $request->keterangan,
            'tanggal_k' => $request->tanggal_k,
            'jumlah_sewa' => $request->jumlah_sewa,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
        ]);
        return redirect('/peminjaman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id_peminjam)//menampilkan data sesuai idnya
    {
        //untuk melihat detail dari peminjaman sesuai id_peminjam
        $peminjaman = DB::table('buku')
                    ->join('peminjaman', 'peminjaman.id', '=', 'buku.id')
                    ->where('id_peminjam', $id_peminjam)
                    ->get();
        // passing data peminjaman yang didapat ke view/pages detail.blade.php
        return view('pages.detail' , ['peminjaman' => $peminjaman]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id_peminjam)
    {
        //mengambil data peminjaman berdasarkan id yang dipilih
        $peminjaman = DB::table('buku')
                    ->join('peminjaman', 'peminjaman.id', '=', 'buku.id')
                    ->where('id_peminjam', $id_peminjam)
                    ->get();
        // passing data peminjaman yang didapat ke view/pages edit.blade.php
        return view('pages.edit_peminjaman' , ['peminjaman' => $peminjaman]);
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
        //update data peminjaman berdasarkan id
        DB::table('peminjaman')->where('id_peminjam', $request->id_peminjam)->update([
            'nomer' => $request->nomer,
            'nama_peminjam' => $request->nama_peminjam,
            'id' => $request->id,
            'keterangan' => $request->keterangan,
            'tanggal_k' => $request->tanggal_k,
            'jumlah_sewa' => $request->jumlah_sewa,
            'created_at' => $request->created_at,
            'updated_at' => $request->updated_at
        ]);
        //alihkan ke halaman home
        return redirect('/peminjaman');
    }

    public function hapus($id_peminjam)
    {
        //menghapus data peminjaman berdasarkan id
            DB::table('peminjaman')->where('id_peminjam', $id_peminjam)->delete();
            return redirect('/peminjaman');
    }
}
