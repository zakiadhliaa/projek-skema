<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class pemasukan extends Model
{
    use HasFactory;

    protected $guarded = []; //tidak ada batasan. semua file dapat dimasukkan kedalam database

    public function index()
    {
        return view("Bulan");
    }
}
