<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $barang = Barang::paginate(5);
        $posts = Barang::orderBy('id_barang', 'desc')->paginate(6); 
        return view('barang.index', compact('barang')); 
        with('i', (request()->input('page', 1) - 1) * 5);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([ 
            'kode_barang' => 'required', 
            'nama_barang' => 'required', 
            'kategori_barang' => 'required',
            'harga' => 'required', 
            'qty' => 'required', 
            ]); 

            //fungsi eloquent untuk menambah data 
            barang::create($request->all()); 

            //jika data berhasil ditambahkan, akan kembali ke halaman utama 
            return redirect()->route('barang.index') 
            ->with('success', 'barang Berhasil Ditambahkan');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $barang = barang::find($id); 
        return view('barang.detail', compact('barang'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $barang = Barang::find($id); 
        return view('barang.edit', compact('barang'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([ 
            'kode_barang' => 'required', 
            'nama_barang' => 'required', 
            'kategori_barang' => 'required',
            'harga' => 'required', 
            'qty' => 'required',
            ]); 
            
            //fungsi eloquent untuk mengupdate data inputan kita 
            barang::find($id)->update($request->all()); 
            
            //jika data berhasil diupdate, akan kembali ke halaman utama 
            return redirect()->route('barang.index')
             ->with('success', 'barang Berhasil Diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        barang::find($id)->delete(); 
        return redirect()->route('barang.index')
         -> with('success', 'barang Berhasil Dihapus');
    }
}
