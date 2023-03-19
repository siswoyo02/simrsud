<?php

namespace App\Http\Controllers;
use App\Models\Rpasienpulangbltbr;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RpasienpulangbltbrController extends Controller
{
    public function pas_plgbltbr(Request $request){

        if($request->has('search')){
            $pasplgbltbr = Rpasienpulangbltbr::where('no_rm','LIKE','%' .$request->search.'%')->Paginate(8);
        }else{
            $pasplgbltbr = Rpasienpulangbltbr::Paginate(8);
        }

        return view('pasienbltbr/datapasienbltbr',compact('pasplgbltbr'));
    }

    public function tambahpasienbltbr(){
        return view('pasienblt/tambahdatablt');
    }

    public function insertdatapasienbltbr(Request $request){
        // dd($request->all());
        Rpasienpulangbltbr::create($request->all());
        return redirect()->route('pasienbltbr');
    }

    public function tampildatapasienbltbr($id){
        $pasplgbltbr = Rpasienpulangbltbr::find($id);
        //dd($pgw);
        return view('pasienbltbr/tampildatabltbr',compact('pasplgbltbr'));
    }

    public function updatedatapasienbltbr(Request $request, $id){
        $pasplgbltbr = Rpasienpulangbltbr::find($id);
        $pasplgbltbr->update($request->all());
        return redirect()->route('pasienbltbr')->with('sukses','data berhasil diupdate');
    }
    
    public function deletedatapasienbltbr($id){
        $pasplgbltbr = Rpasienpulangbltbr::find($id);
        $pasplgbltbr->delete();
        return redirect()->route('pasienbltbr')->with('sukses','data berhasil dihapus');
    }

    public function exportpdfdatapasienbltbr($id){
        $pasplgbltbr = Rpasienpulangbltbr::find($id);

        view()->share('pasplgbltbr', $pasplgbltbr);
        $pdf = PDF::loadview('pasienbltbr/datapasienbltbr-pdf',compact('pasplgbltbr'));
        $pdf->set_option('isRemoteEnabled', TRUE);
        $pdf->setPaper('folio','potrait');
        return $pdf->stream('pasien pulangblt.pdf');
    }
}
