<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;

class Siswa extends Eloquent
{
    use HasFactory;
    protected $connection = 'mongodb'; 
    protected $collection = 'siswas';
    protected $primaryKey = '_id'; 

    protected $fillable = [
        '_id',
        'kelasId',
        'nama'
    ];
    public function kelas()
    {
        return $this->belongsTo(User::class, 'kelasId', '_id');
    }

    public function nilai()
    {
        return $this->hasMany(Score::class, 'siswaId', '_id');
    }
}
