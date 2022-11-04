<?php

namespace App\Http\Controllers;

use App\Models\Siswa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request){
        if($request->has('search')){
            $data = Siswa::where('nama','LIKE', '%' .$request->search. '%')->paginate(6);
        }else{
            $data = Siswa::paginate(5);
        }
        return view('Siswa.v_read', compact('data'));
    }

    public function create(){
        return view('Siswa.v_create');
    }

    public function insertdata(Request $request){
        $idSiswa = DB::table("siswas")->insertGetId([
            "nisn"=>$request->nisn,
            "nama"=>$request->nama,
            "kelas"=>$request->kelas,
            "jurusan"=>$request->jurusan,
            "jeniskelamin"=>$request->jeniskelamin,
            "telpon"=>$request->telpon,
        ]);
        $bulan = DB::table('bulans')->get();
        foreach ($bulan as $b) {
            DB::table("pemasukans")->insert([
                'id_siswa'=>$idSiswa,
                'id_bulan'=>$b->id,
                'minggu1'=>0,
                'minggu2'=>0,
                'minggu3'=>0,
                'minggu4'=>0,
            ]);
        }
        return redirect()->route('siswa')->with('succes','Data Berhasil Ditambahkan!');
    }

    public function edit($id){
        $data = Siswa::find($id);
        //dd($data);
        return view('Siswa.v_update', compact('data'));
    }

    public function update(Request $request, $id){
        $data = Siswa::find($id);
        $data->update($request->all());
        return redirect()->route('siswa')->with('succes','Data Berhasil Diupdate!');
    }

    public function delete($id){
        $data = Siswa::find($id);
        $data->delete();
        return redirect()->route('siswa')->with('succes','Data Berhasil Dihapus!');
    }
}
