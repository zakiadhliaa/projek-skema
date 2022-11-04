<?php

namespace App\Http\Controllers;


use App\Models\bulan;
use App\Models\pemasukans;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pemasukanController extends Controller
{
    public function edit($id){
        $data = pemasukans::find($id);
        // dd($data);
        return view('Pemasukan.v_update', compact('data'));
    }

    public function updatepemasukan(Request $request, $id){
        $data = pemasukans::where("id",$id);
        $data->update([
            'minggu1' => $request->minggu1,
            'minggu2' => $request->minggu2,
            'minggu3' => $request->minggu3,
            'minggu4' => $request->minggu4,
            'keterangan' => $request->keterangan,
        ]);
        $data = pemasukans::find($id);
        return redirect('/bulan/'.$data->id_bulan)->with('succes','Data Berhasil Diupdate!');

    }

    public function hapus($id){
        $data = pemasukans::where("id",$id);
        $data->delete();
        return redirect('/bulan/'.$id)->with('succes','Data Berhasil Dihapus!');
    }
}
