<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\hasMany;
use Illuminate\Database\Eloquent\Relations\belongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Konsuls extends Model
{
    use HasFactory;

    protected $fillable = [
        'pasien_id',
        'nomor_antrian',
        'keterangan_konsul',
        'saran',
        'informasi',
    ];



    public function pasien(): belongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function reseps()
    {
        return $this->hasManyThrough(
            Obats::class, 
            Reseps::class, 
            'konsul_id', 
            'id', 
            'id', 
            'obat_id',
        );        

    }

    /*    
    public function obat_resep(): hasOne
    {
        return $this->hasOne(Reseps::class,'obat_id');
    }

    public function reseps(): HasMany
    {
        return $this->HasMany(
            Reseps::class,  
            'konsul_id',
            'obat_resep,'
        );
        
    }
    */



}
