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
        $bulan = DB::table("bulans")
        ->select('bulans.bulan','bulans.id')
        ->selectRaw('sum(minggu1) as total1,sum(minggu2) as total2,sum(minggu3) as total3,sum(minggu4) as total4')
        ->join("pemasukans","bulans.id", "pemasukans.id_bulan")
        ->groupBy('bulans.id')
        ->get();
        // dd($bulan);
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

    public function bulan1(){
        $bulan = DB::table("bulans")
        ->select('bulans.bulan','bulans.id')
        ->selectRaw('sum(minggu1) as total1,sum(minggu2) as total2,sum(minggu3) as total3,sum(minggu4) as total4')
        ->join("pengeluarans","bulans.id", "pengeluarans.id")
        ->groupBy('bulans.id')
        ->get();
        dd($bulan);
        return view('Bulan',compact("bulan"));
    }

    public function pengeluaran($id){
        $pengeluaran = DB::table("pengeluarans")
        ->select('pengeluarans.id','keterangan','jbl_pengeluaran', 'pengeluarans.created_at')
        ->join('bulans','pengeluaran.id',"bulans.id")
        // ->join('siswas','pemasukans.id_siswa',"siswas.id")
        ->where("id_bulan",$id)
        ->get();
        return view('Pengeluaran.v_read',compact("pengeluaran"));
    }

}
