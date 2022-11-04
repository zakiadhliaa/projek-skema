<?php

namespace App\Http\Controllers;

use App\Models\pengeluaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PengeluaranController extends Controller
{
    public function keluar(Request $request){
        if($request->has('search')){
            $pengeluaran = pengeluaran::where('nama','LIKE', '%' .$request->search. '%')->paginate(6);
        }else{
            $pengeluaran = pengeluaran::paginate(5);
        }
        return view('Pengeluaran.v_read', compact('pengeluaran'));
    }

    public function tambahpengeluaran(){
        return view('Pengeluaran.v_create');
    }

    public function simpandata(Request $request){
        // dd($request->all());
        pengeluaran::create($request->all());
        return redirect('keluar')->with('succes','Data Berhasil Ditambahkan!');
    }

    public function tampilkan($id){
        $data = pengeluaran::find($id);
        return view('Pengeluaran.v_update', compact('data'));
    }

    public function update(Request $request, $id){
        $data = pengeluaran::find($id);
        $data->update($request->all());
        return redirect('keluar')->with('succes','Data Berhasil Diupdate!');
    }

    public function hapus($id){
        $data = pengeluaran::find($id);
        $data->delete();
        return redirect('keluar')->with('succes','Data Berhasil Dihapus!');
    }
}
