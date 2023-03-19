<?php

namespace App\Http\Controllers;
use App\Models\Rpasienpulangblt;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
//use App\Helpers\Encryption;
use Illuminate\Support\Facades\DB;

class RpasienpulangbltController extends Controller
{
    public function pas_plgblt(Request $request){

        if($request->has('search')){
            $pasplgblt = Rpasienpulangblt::where('no_rm','LIKE','%' .$request->search.'%')->Paginate(8);
        }else{
            $pasplgblt = Rpasienpulangblt::Paginate(8);
        }
        // dd($pasplgblt);

        return view('pasienblt/datapasienblt',compact('pasplgblt'));
    }

    public function pasplgbalita(){
        $q = request()->get('query');
        $data1 = DB::connection('mysql2')-> select ("select rs.b_ms_pasien.no_rm, rs.b_ms_pasien.nama, rs.b_ms_pasien.tgl_lahir, rs.b_ms_pasien.sex from rs.b_ms_pasien where rs.b_ms_pasien.no_rm = ? ",[$q]);
        //dd($data1);
        return view('pasienblt/datapas',compact('data1'));
    }
    // public function pasplgbalitaagama(){
    //     $ag = request()->get('query');
    //     $data2 = DB::connection('mysql2')-> select ("select rs.b_ms_agama.id, rs.b_ms_agama.agama from rs.b_ms_agama where rs.b_ms_agama.id = ? ",[$ag]);
    //     dd($data2);

    // }
    // public function pasplgbalitaagama(){
    //     $dt = request()->get('query');
    //     $data2 = DB::connection('mysql2')->select ("select rs.b_pelayanan.kelas_id from rs.b_pelayanan where rs.b_pelayanan.pasien_id = ? ",[$dt]);
    //     dd($data2);
    // }

    public function pasdata_plgblt(Request $request){

        if($request->has('search')){
            $pasplgblt = Rpasienpulangblt::where('no_rm','LIKE','%' .$request->search.'%')->Paginate(8);
        }else{
            $pasplgblt = Rpasienpulangblt::Paginate(8);
        }

        return view('pasienblt/datapasienblt',compact('pasplgblt'));
    }
    

    public function tambahpasienblt(){
        $q = request()->get('query');
        $data1 = DB::connection('mysql2')-> select ("select rs.b_ms_pasien.no_rm, rs.b_ms_pasien.nama, rs.b_ms_pasien.tgl_lahir, rs.b_ms_pasien.sex from rs.b_ms_pasien where rs.b_ms_pasien.no_rm = ? ",[$q]);
        //dd($data1);
        return view('pasienblt/tambahdatablt',compact('data1'));
        //return view('pasienblt/tambahdatablt');
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
