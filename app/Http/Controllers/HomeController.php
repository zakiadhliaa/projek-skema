<?php

namespace App\Http\Controllers;


use App\Models\pemasukans;
use App\Models\pengeluaran;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        // $pemasukansCount = pemasukans::count();
        // $pengeluaranCount = pengeluaran::count();
        return view('Home');

        // ['pemasukansCount'=> $pemasukansCount, 'pengeluaranCount'=> $pengeluaranCount]
    }

}
