<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
// use PDF;

class EmployeeController extends Controller
{
    public function index(Request $request){

        if($request->has('search')){
            $pgw = Employee::where('nama','LIKE','%' .$request->search.'%')->paginate(10);
        }else{
            $pgw = Employee::paginate(10);
        }

        // $pgw=Employee::paginate(5);
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
    
    public function deletedatapegawai($id){
        $pgw = Employee::find($id);
        $pgw->delete();
        return redirect()->route('pegawai')->with('sukses','data berhasil dihapus');
    }

    public function exportpdfdatapegawai(){
        $pgw = Employee::all();

        view()->share('pgw', $pgw);
        $pdf = PDF::loadview('pegawai/datapegawai-pdf',compact('pgw'));
        $pdf->setPaper('F4','potrait');
        return $pdf->stream('pegawai rs.pdf');
    }

}
