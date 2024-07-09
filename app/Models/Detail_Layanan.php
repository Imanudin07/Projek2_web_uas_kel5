<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Detail_Layanan extends Model
{
    use HasFactory;

    protected $table = 'detail_layanan';

    protected $fillable = ['id',
        'pekerjaan',
        'biaya',
        'layanan_id',
        'pj_montir_id',
    ];
    
    public $timestamps = false;

    public function prodi()
    {
        return $this->belongsTo(Prodi::class, 'prodi_id');
    }
    public function rombel()
    {
        return $this->hasMany(Rombel::class, 'rombel_id');
    }
}
