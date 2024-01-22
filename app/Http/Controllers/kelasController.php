<?php

namespace App\Http\Controllers;

use App\Models\Kelas;
use App\Models\Siswa;
use Illuminate\Http\Request;

class kelasController extends Controller
{
    public function showKelas(){
        $kelas = Kelas::all();
        if (!$kelas) {
            return response()->json(['error' => 'Kelas not found'], 404);
        }
        return response()->json(['data' => $kelas]);
    }
    public function detailKelas($id){
        $kelas = Kelas::find($id);
        $siswa = Siswa::where('kelasId', $kelas->_id)->get(); 
        if (!$kelas) {
            return response()->json(['error' => 'Kelas not found'], 404);
        }
        return response()->json([['kelas' => $kelas], ['siswa' => $siswa]],200);
    }
    public function tambahKelas(Request $request){
        $kelas = Kelas::create($request->all());
        return response()->json(['kelas' => $kelas], 200);
    }
    public function updateKelas(Request $request, $id){
        $kelas = Kelas::find($id);
        if (!$kelas) {
            return response()->json(['error' => 'Kelas not found'], 404);
        }
        $kelas->update($request->all());
        return response()->json(['kelas' => $kelas], 200);
    }
    public function delete($id){
        $kelas = Kelas::find($id);
        if (!$kelas) {
            return response()->json(['error' => 'Kelas not found'], 404);
        }
        $kelas->delete();
        return response()->json(['message' => 'Kelas deleted'], 200);
    }
}
