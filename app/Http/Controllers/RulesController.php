<?php

namespace App\Http\Controllers;

use App\Models\Bobot;
use App\Models\Kriteria;
use App\Models\Varietas;
use Illuminate\Http\Request;
use Illuminate\View\View;

class RulesController extends Controller
{
    public function index(): View
    {
        $data = Bobot::orderBy('updated_at','desc')->get();
        $kriteria = Kriteria::orderBy('kode','asc')->get();
        $alternatif = Varietas::orderBy('kode','asc')->get();

        return view('admin/rules')->with([
            "data" => $data,
            "kriteria" => $kriteria,
            "alternatif" => $alternatif
        ]);
    }

    public function store(Request $request) {
        $k = explode("-", $request->addK);
        $a = explode("-", $request->addA);
        $b = $a[0].'-'.$k[0];

        $cek = Bobot::where('kode', $b)->first();
        if ($cek) {
            return redirect()->back()->with('warning', 'Nilai bobot referensi sudah ada');
        } else {
            $tambah = new Bobot();
            $tambah->kode = $b;
            $tambah->alternatif = $a[1];
            $tambah->kriteria = $k[1];
            $tambah->bobot = $request->addBobot;
            $tambah->save();
            return redirect()->route("admin.rules")->withToastSuccess("Data berhasil ditambah");
        }
    }

    public function update(Request $request, $kode)
    {
        $update = Bobot::where('kode', $kode)->first();
        $update->bobot = $request->editBobot;
        $update->save();
        return redirect()->route('admin.rules')->withToastSuccess('Data berhasil diperbarui');
    }

    public function destroy($kode)
    {
        Bobot::where('kode', $kode)->delete();
        return redirect()->route('admin.rules')->withToastSuccess("Data berhasil dihapus");
    }
}
