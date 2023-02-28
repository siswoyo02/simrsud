<?php

namespace App\Http\Controllers;
use App\Models\Rpasienpulang;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RpasienpulangController extends Controller
{
    public function pas_plg(Request $request){

        if($request->has('search')){
            $pasplg = Rpasienpulang::where('no_rm','LIKE','%' .$request->search.'%')->paginate(5);
        }else{
            $pasplg = Rpasienpulang::paginate(5);
        }

        return view('pasien/datapasien',compact('pasplg'));
    }

    public function tambahpasien(){
        return view('pasien/tambahdata');
    }

    public function insertdatapasien(Request $request){
        // dd($request->all());
        Rpasienpulang::create($request->all());
        return redirect()->route('pasien');
    }

    public function tampildatapasien($id){
        $pasplg = Rpasienpulang::find($id);
        //dd($pgw);
        return view('pasien/tampildata',compact('pasplg'));
    }

    public function updatedatapasien(Request $request, $id){
        $pasplg = Rpasienpulang::find($id);
        $pasplg->update($request->all());
        return redirect()->route('pasien')->with('sukses','data berhasil diupdate');
    }
    
    public function deletedatapasien($id){
        $pasplg = Rpasienpulang::find($id);
        $pasplg->delete();
        return redirect()->route('pasien')->with('sukses','data berhasil dihapus');
    }

    public function exportpdfdatapasien($id){
        $pasplg = Rpasienpulang::find($id);

        view()->share('pasplg', $pasplg);
        $pdf = PDF::loadview('pasien/datapasien-pdf',compact('pasplg'));
        $pdf->setPaper('F4','potrait');
        return $pdf->stream('pasien pulang.pdf');
    }

}
