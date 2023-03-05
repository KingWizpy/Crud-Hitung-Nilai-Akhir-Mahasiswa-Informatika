<?php

namespace App\Http\Controllers;

use App\Models\Mahasiswa;
use Illuminate\Http\Request;

class MahasiswaController extends Controller{
    public function index(){
        $data = Mahasiswa::all();
        return view('index',compact('data'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        Mahasiswa::create($request->all());
        return redirect()->route('mahasiswa.index')->with('success','Data berhasil ditambahkan');;
    }

    public function edit($id){
        $data = Mahasiswa::find($id);
        return view('edit',compact('data'));
    }

    public function update(Request $request, $id){
        $data = Mahasiswa::find($id);
        $data->update($request->all());
        return redirect()->route('mahasiswa.index')->with('success','Data berhasil diubah');  
    }

    public function destroy($id){
        $data = Mahasiswa::find($id);
        $data->delete();
        return redirect()->route('mahasiswa.index')->with('success','Data berhasil dihapus');
    }
}