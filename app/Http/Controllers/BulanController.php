<?php

namespace App\Http\Controllers;

use App\Models\bulan;
use App\Models\pemasukan;
use App\Models\pemasukans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class bulanController extends Controller
{
    public function bulan(){
        $bulan = DB::table("bulans")->get();
        return view('Bulan',compact("bulan"));
    }

    public function pemasukan($id){
        $pemasukan = DB::table("pemasukans")
        ->select('pemasukans.id','nama','minggu1','minggu2','minggu3','minggu4','keterangan','pemasukans.created_at')
        ->join('bulans','pemasukans.id_bulan',"bulans.id")
        ->join('siswas','pemasukans.id_siswa',"siswas.id")
        ->where("id_bulan",$id)
        ->get();
        return view('Pemasukan.v_read',compact("pemasukan"));
    }

    public function edit($id){
        $data = bulan::find($id);
        // dd($data);
        return view('Pemasukan.v_update', compact('data'));
        // $pemasukan =[
        //     'pemasukan' => $this->PemasukanModels->detailData($id),
        // ];
        // dd($pemasukan);
        // return view('Pemasukan.v_update',$pemasukan );
    }

    public function updatepemasukan(Request $request, $id){
        $data = Bulan::find($id);
        $data->update($request->all());
        return redirect()->route('bulan')->with('succes','Data Berhasil Diupdate!');
    }

}
