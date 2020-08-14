<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Books;
class BooksController extends Controller
{
    public function index(){
     $data=Books::all();
        return view('index',compact('data'));
    }

    public function back(){
     return redirect ('/');
    }
    
    public function create(){
     return view('create');
    }

    public function insert(Request $request){
     $data=new Books();
        $data->kode_buku=$request->get('kode');
        $data->judul=$request->get('judul');
        $data->deskripsi=$request->get('deskripsi');
        $data->save();
     return redirect ('/');
    }

    public function delete($id){
     $data=Books::find($id);
        $data->delete();
        return back();
    }

    public function edit($id){
     $data=Books::find($id);
     return view('edit',compact('data'));
    }

    public function update(Request $request, $id){     
     $data = Books::findOrFail($id);
        $data->kode_buku=$request->get('kode');
        $data->judul=$request->get('judul');
        $data->deskripsi=$request->get('deskripsi');
        $data->save();
     return redirect ('/')->with('alert-success','Data berhasil Diubah.');
    }

    public function read($id){
     $data=Books::find($id);
     return view('read',compact('data'));
    }
}