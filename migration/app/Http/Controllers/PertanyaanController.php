<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PertanyaanController extends Controller
{
    public function index(){
        $pertanyaan = DB::table('pertanyaan')->get(); //identik dengan sql select * pertanyaan
        // dd($pertanyaan); untuk debug
        return view('pertanyaan.index', compact('pertanyaan'));
    }

    public function create()
    {
        return view('pertanyaan.create');
    }

    public function store(Request $request){
        // dd($request->all());
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);
        $query = DB::table('pertanyaan')->insert([
            "judul" => $request["judul"],
            "isi" => $request["isi"]
        ]);

        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil ditambahkan');
    }

    public function show($id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();
        // dd($pertanyaan);
        return view('pertanyaan.show', compact('pertanyaan'));
    }

    public function edit($id){
        $pertanyaan = DB::table('pertanyaan')->where('id', $id)->first();

        return view('pertanyaan.edit', compact('pertanyaan'));
    }

    public function update($id, Request $request){
        $request->validate([
            'judul' => 'required',
            'isi' => 'required'
        ]);

        $query = DB::table('pertanyaan')
                    ->where('id', $id)
                    ->update([
                        'judul' => $request['judul'],
                        'isi' => $request['isi']
                    ]);
    return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil diperbaharui');            
    }

    public function destroy($id){
        $query = DB::table('pertanyaan')->where('id', $id)->delete();
        return redirect('/pertanyaan')->with('success', 'Pertanyaan berhasil dihapus');            
    }
}
