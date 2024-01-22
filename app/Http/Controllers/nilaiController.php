<?php

namespace App\Http\Controllers;

use App\Models\Score;
use Illuminate\Http\Request;

class nilaiController extends Controller
{
    public function addScore(Request $request){
        $nilai = Score::create([
            'siswaId' => $request->siswaId,
            'mapel' => $request->mapel,
            'latihan1' => $request->latihan1,
            'latihan2' => $request->latihan2,
            'latihan3' => $request->latihan3,
            'latihan4' => $request->latihan4,
            'UH1' => $request->UH1,
            'UH2' => $request->UH2,
            'UTS' => $request->UTS,
            'UAS' => $request->UAS,
            'nilai_akhir' => (0.15 * (($request->latihan1 + $request->latihan2 + $request->latihan3 + $request->latihan4) / 4)) +
            (0.20 * (($request->UH1 + $request->UH2) / 2)) +
            (0.25 * $request->UTS) +
            (0.40 * $request->UAS)
        ]);
        return response()->json([
            'siswaId' => $request->siswaId,
            'mapel' => $request->mapel,
            'latihan1' => $request->latihan1,
            'latihan2' => $request->latihan2,
            'latihan3' => $request->latihan3,
            'latihan4' => $request->latihan4,
            'UH1' => $request->UH1,
            'UH2' => $request->UH2,
            'UTS' => $request->UTS,
            'UAS' => $request->UAS,
            'nilai_akhir' => (0.15 * (($request->latihan1 + $request->latihan2 + $request->latihan3 + $request->latihan4) / 4)) +
                (0.20 * (($request->UH1 + $request->UH2) / 2)) +
                (0.25 * $request->UTS) +
                (0.40 * $request->UAS)
        ], 200);
        
    }
}
