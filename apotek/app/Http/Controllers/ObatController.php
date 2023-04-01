<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Obat;

class ObatController extends Controller
{
    public function create(Request $obat)
    {
        $validation=$request->validate([
            'kode_obat'=>'required|unique:obat',
            'nama_obat'=>'required',
            'merk'=>'required',
            'jenis'=>'required',
            'satuan'=>'required',
            'golongan'=>'required',
            'kemasan'=>'required',
            'harga_jual'=>'required',
            'stok'=>'required'
        ]);
        Obat::create($validation);
    }

    public function delete(Obat $obat)
    {
        $obat->delete();
    }

    public function update(Obat $obat, Request $request){
        $validation=$request->validate([
            'kode_obat'=>'required|unique:obat',
            'nama_obat'=>'required',
            'merk'=>'required',
            'jenis'=>'required',
            'satuan'=>'required',
            'golongan'=>'required',
            'kemasan'=>'required',
            'harga_jual'=>'required',
            'stok'=>'required'
        ]);
        $obat->update($validation);
    }

   
    public function index(){
        $dataObat=Obat::all();
        return view('obat.index', ['title'=>'obat', 'data'=>$dataObat]);
    }

    public function addObat(){
        $dataObat=Obat::all();
        return view('obat.create', ['title'=>'addObat']);
    }
}
