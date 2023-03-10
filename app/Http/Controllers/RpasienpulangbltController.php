<?php

namespace App\Http\Controllers;
use App\Models\Rpasienpulangblt;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;

class RpasienpulangbltController extends Controller
{
    public function pas_plgblt(Request $request){

        if($request->has('search')){
            $pasplgblt = Rpasienpulangblt::where('no_rm','LIKE','%' .$request->search.'%')->Paginate(8);
        }else{
            $pasplgblt = Rpasienpulangblt::Paginate(8);
        }

        return view('pasienblt/datapasienblt',compact('pasplgblt'));
    }

    public function tambahpasienblt(){
        return view('pasienblt/tambahdatablt');
    }

    public function insertdatapasienblt(Request $request){
        // dd($request->all());
        Rpasienpulangblt::create($request->all());
        return redirect()->route('pasienblt');
    }

    public function tampildatapasienblt($id){
        $pasplgblt = Rpasienpulangblt::find($id);
        //dd($pgw);
        return view('pasienblt/tampildatablt',compact('pasplgblt'));
    }

    public function updatedatapasienblt(Request $request, $id){
        $pasplgblt = Rpasienpulangblt::find($id);
        $pasplgblt->update($request->all());
        return redirect()->route('pasienblt')->with('sukses','data berhasil diupdate');
    }
    
    public function deletedatapasienblt($id){
        $pasplgblt = Rpasienpulangblt::find($id);
        $pasplgblt->delete();
        return redirect()->route('pasienblt')->with('sukses','data berhasil dihapus');
    }

    public function exportpdfdatapasienblt($id){
        $pasplgblt = Rpasienpulangblt::find($id);

        view()->share('pasplgblt', $pasplgblt);
        $pdf = PDF::loadview('pasienblt/datapasienblt-pdf',compact('pasplgblt'));
        $pdf->set_option('isRemoteEnabled', TRUE);
        $pdf->setPaper('folio','potrait');
        return $pdf->stream('pasien pulangblt.pdf');
    }
}
