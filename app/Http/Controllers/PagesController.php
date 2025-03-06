<?php

namespace App\Http\Controllers;
use App\Models\Reseps;
use App\Models\Obats;
use App\Models\konsuls;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Query\JoinClause;
use Validator;


class PagesController extends Controller
{

    public function home()
    {
        $daftar = User::All();
        $obats = Obats::All();
        $konsuls = Konsuls::with('reseps')
        ->join('users', 'konsuls.pasien_id', '=', 'users.id')
        ->select('konsuls.*', 
                 'users.name as nama_pasien',
                 'users.email as email_pasien',
                 'users.alamat as alamat_pasien',
                 'users.telepon as telepon_pasien',
                )
        ->get();
        $ResepObat = DB::table('reseps')
        ->join('obats', 'reseps.obat_id', '=', 'obats.id')
        ->select('reseps.*', 
                 'obats.nama_obat as nama_obat_resep',
                 'obats.stok as stok_obat_resep',
                 'obats.harga as harga_obat_resep',
                 'obats.keterangan_obat as keterangan_obat_resep',
                )
        ->get();

        return view('welcome', compact(['daftar','konsuls','obats','ResepObat']));        
    }


    



}
