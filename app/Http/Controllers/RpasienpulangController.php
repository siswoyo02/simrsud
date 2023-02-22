<?php

namespace App\Http\Controllers;
use App\Models\Rpasienpulang;
use Illuminate\Http\Request;

class RpasienpulangController extends Controller
{
    public function pas_plg(){
        $pasplg=Rpasienpulang::all();
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


}
