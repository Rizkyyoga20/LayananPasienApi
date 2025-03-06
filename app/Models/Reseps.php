<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\belongsTo;



class Reseps extends Model
{
    use HasFactory;

    protected $fillable = [
        'obat_id',
        'konsul_id',
        'keterangan_resep',
    ];

    public function konsuls(): belongsTo
    {
        return $this->belongsTo(Konsuls::class, 'konsul_id');
    }


    public function obats(): belongsTo
    {
        return $this->belongsTo(Obats::class);
    }



}
