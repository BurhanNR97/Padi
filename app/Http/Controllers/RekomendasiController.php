<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Subkriteria;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RekomendasiController extends Controller
{
    public function index(): View
    {
        $k1 = Subkriteria::where('kriteria', 'Cuaca')->get();
        $k2 = Subkriteria::where('kriteria', 'Kondisi Lahan')->get();
        $k3 = Subkriteria::where('kriteria', 'Berat/1000 butir (gr)')->get();
        $k4 = Subkriteria::where('kriteria', 'Umur Tanam (hari)')->get();
        $k5 = Subkriteria::where('kriteria', 'Potensi hasil (ton/ha)')->get();
        return view('/rekomendasi')->with([
            "k1" => $k1,
            "k2" => $k2,
            "k3" => $k3,
            "k4" => $k4,
            "k5" => $k5,
        ]);
    }

    public function hitung(Request $request) {
        $a1 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Inpara 08')->get();
        $a2 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Inpari 09')->get();
        $a3 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Ciherang')->get();
        $a4 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Mekongga')->get();
        $a5 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Bioprima')->get();
        $a6 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Malaysian Rice')->get();
        $a7 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Ketonggo')->get();
        $a8 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Cakrabuana')->get();
        $a9 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Inpago 12')->get();

        $a = Bobot::orderBy('kode', 'asc')->get();

        dd($a);

        $matrix = [];
        for ($i=0; $i<5; $i++){
            $m = [];
            $m[] = $a1[$i]->bobot; $m[] = $a2[$i]->bobot; $m[] = $a3[$i]->bobot;
            $m[] = $a4[$i]->bobot; $m[] = $a5[$i]->bobot; $m[] = $a6[$i]->bobot;
            $m[] = $a7[$i]->bobot; $m[] = $a8[$i]->bobot; $m[] = $a9[$i]->bobot;
            $matrix[] = $m;
        }



        return view('/hasil')->with([
            "k1" => $request->k1,
            "k2" => $request->k2,
            "k3" => $request->k3,
            "k4" => $request->k4,
            "k5" => $request->k5,
            "a1" => $a1,
            "a2" => $a2,
            "a3" => $a3,
            "a4" => $a4,
            "a5" => $a5,
            "a6" => $a6,
            "a7" => $a7,
            "a8" => $a8,
            "a9" => $a9,
            "matriks" => $matrix
        ]);
    }

    private function waspas() {
        $a1 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Inpara 08')->get();
        $a2 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Inpari 09')->get();
        $a3 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Ciherang')->get();
        $a4 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Mekongga')->get();
        $a5 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Bioprima')->get();
        $a6 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Malaysian Rice')->get();
        $a7 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Ketonggo')->get();
        $a8 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Cakrabuana')->get();
        $a9 = Bobot::orderBy('kode', 'asc')->where('alternatif', 'Inpago 12')->get();

        $al1 = []; $al2 = []; $al3 = []; $al4 = []; $al5 = []; $al6 = []; $al7 = []; $al8 = []; $al9 = [];
        
    }

    private function transpos($matriks) {
        $matrix = [];
        foreach($matriks as $i) {
            $m = [];
            foreach($i as $item) {
                $m[] = $item;
            }
            $matrix[] = $m;
        }
        return $matrix;
    }
}
