<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Score extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb'; 
    protected $collection = 'scores';
    protected $primaryKey = '_id'; 

    protected $fillable = [
        'siswaId',
        'mapel',
        'latihan1',
        'latihan2',
        'latihan3',
        'latihan4',
        'UH1',
        'UH2',
        'UTS',
        'UAS',
        'nilai_akhir'
    ];
   
    public function siswa()
    {
        return $this->belongsTo(Siswa::class, 'siswaId', '_id');
    }
}
