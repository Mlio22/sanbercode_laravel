<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use DB;

class PertanyaanController extends Controller
{
    public function index(){
        $datas = DB::table('pertanyaan')->get();
        return view("index", compact('datas'));
    }

    public function create(){
        return view('create');
    }

    public function store(Request $request){
        $validatedReq = $request->validate([
            "title" => 'required|max:255',
            "body" => 'required|max: 65535'
        ]);

        $query = DB::table('pertanyaan')->insert([
            "judul" => $request['title'],
            "isi" => $request['body']
        ]);
        
        return redirect('/pertanyaan');
    }
    
    public function show($id){
        $data = DB::table('pertanyaan')
        ->where('id', $id)
        ->get()
        ->first();

        return view('show', compact('data'));
    }

    public function edit($id){
        $data = DB::table('pertanyaan')
        ->where('id', $id)
        ->get()
        ->first();

        return view('edit', compact('data'));
    }

    public function update(Request $request, $id){
        $query = DB::table('pertanyaan')
        ->where('id', $id)
        ->update([
            "judul" => $request['title'],
            "isi" => $request['body']
        ]);

        return redirect('/pertanyaan');
    }

    public function destroy($id){
        $query = DB::table('pertanyaan')
        ->where('id', $id)
        ->delete();

        return redirect('/pertanyaan');
    }
}
