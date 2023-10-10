<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // mengambil data mahasiswa berdasarkan id yang dipilih
         $mahasiswa = DB::table('mahasiswa')->get();
         return view('mahasiswa', ['mahasiswa' => $mahasiswa]);
    }
    public function tambahdata()
{
    return view('form_data');
}
    public function simpan(Request $request)
{
    DB::table('mahasiswa')->insert([
        'nama' => $request->nama,
        'umur' => $request->umur,
        'kota' => $request->kota
    
    ]);
    return redirect('/home');
}
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
{
    // mengambil data dari tabel mahasiswa
    $mahasiswa = DB::table('mahasiswa')->where('id', $id)->get();
    // mengirim data ke view mahasiswa
    return view('edit', ['mahasiswa' => $mahasiswa]);
}

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        DB::table('mahasiswa')->where('id',$request->id)->update([
            'nama'=> $request->nama,
            'umur'=> $request->umur,
            'kota'=> $request->kota
        ]);
        return redirect('/home');
    }
         //
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function hapus($id)
    {
        DB::table('mahasiswa')->where('id', $id)->delete();
        return redirect('/home');
    }
    public function destroy(String $id)
    {
        //
    }
}