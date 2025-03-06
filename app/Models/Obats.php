<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasOne;


class Obats extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama_obat',
        'stok',
        'harga',
        'keterangan_obat',
    ];


    public function obat_resep()
    {
        return $this->hasOne(Reseps::class);
    }

    
}
