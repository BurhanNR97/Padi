<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use Illuminate\Http\Request;
use Illuminate\View\View;

class KriteriaController extends Controller
{
    public function index(): View
    {
        $data = Kriteria::orderBy('updated_at','desc')->get();
        $cek = Kriteria::orderBy("kode","desc")->first();
        $kode = "";
        if ($data->count() > 0) {
            $ambil = substr($cek->kode, 1, 2);
            $j = (int) $ambil;
            $k = $j+ 1;
            if (strlen($k) == 1) {
                $kode = "K0" . $k; 
            } else
            if (strlen($k) == 2) {
                $kode = "K" . $k; 
            }
        } else
        if ($data->count() == 0) {
            $kode = "K01";
        }

        return view('admin/kriteria')->with([
            "data" => $data,
            "kode" => $kode
        ]);
    }

    public function store(Request $request) {
        $nama = Kriteria::where('kriteria', $request->addKriteria)->first();
        if ($nama) {
            return redirect()->back()->with('warning', 'Kriteria sudah ada');
        } else {
            $tambah = new Kriteria();
            $tambah->kode = $request->addKodeKriteria;
            $tambah->kriteria = $request->addKriteria;
            $tambah->jenis = $request->addJenis;
            $tambah->save();
            return redirect()->route("admin.kriteria")->withToastSuccess("Data berhasil ditambah");
        }
    }

    public function update(Request $request, $kode)
    {
        $cek = Kriteria::where('kriteria', $request->editKriteria)->first();
        if ($cek && $cek->kode != $kode) {
            return redirect()->back()->with('warning','Kriteria sudah ada');
        } else {
            $update = kriteria::where('kode', $kode)->first();
            $update->kriteria = $request->editKriteria;
            $update->jenis = $request->editJenis;
            $update->save();
            return redirect()->route('admin.kriteria')->withToastSuccess('Data berhasil diperbarui');
        }
    }

    public function destroy($kode)
    {
        Kriteria::where('kode', $kode)->delete();
        return redirect()->route('admin.kriteria')->withToastSuccess("Data berhasil dihapus");
    }
}
