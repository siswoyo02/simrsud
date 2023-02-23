<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index(){

        $pgw=Employee::all();
        return view('pegawai/datapegawai',compact('pgw'));
    }

    public function tambahpegawai(){
        return view('pegawai/tambahdata');
    }

    public function insertdatapegawai(Request $request){
        // dd($request->all());
        Employee::create($request->all());
        return redirect()->route('pegawai')->with('sukses','data berhasil ditambahkan');
    }
    public function tampildatapegawai($id){
        $pgw = Employee::find($id);
        //dd($pgw);
        return view('pegawai/tampildata',compact('pgw'));
    }
    public function updatedatapegawai(Request $request, $id){
        $pgw = Employee::find($id);
        $pgw->update($request->all());
        return redirect()->route('pegawai')->with('sukses','data berhasil diupdate');
    }


}
