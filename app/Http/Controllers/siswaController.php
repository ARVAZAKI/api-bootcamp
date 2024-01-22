<?php

namespace App\Http\Controllers;

use App\Models\Score;
use App\Models\Siswa;
use Illuminate\Http\Request;

class siswaController extends Controller
{
    public function showSiswa(){
        $siswa = Siswa::all();
        if (!$siswa) {
            return response()->json(['error' => 'Siswa not found'], 404);
        }
        return response()->json(['data' => $siswa]);
    }
    public function detailSiswa($id) {
        $siswa = Siswa::find($id);
    
        if (!$siswa) {
            return response()->json(['error' => 'Siswa not found'], 404);
        }
    
        $mapel = Score::where('siswaId', $siswa->_id)->get([
            'mapel',
            'nilai_akhir',
            'latihan1',
            'latihan2',
            'latihan3',
            'latihan4',
            'UH1',
            'UH2',
            'UTS',
            'UAS'
        ]);
    
        return response()->json(['siswa' => $siswa, 'nilai' => ['mapel' => $mapel]], 200);
    }
    public function createSiswa(Request $request){
        $siswa = Siswa::create($request->all());
        return response()->json(['siswa' => $siswa], 200);
    }
    
}
