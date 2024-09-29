<?php

namespace App\Http\Controllers;

use App\Models\Varietas;
use Illuminate\View\View;
use Illuminate\Http\Request;

class PadiController extends Controller
{
    public function index(): View
    {
        $data = Varietas::orderBy('updated_at','desc')->get();
        $cek = Varietas::orderBy('kode','desc')->first();
        $kode = "";
        if ($data->count() > 0) {
            $ambil = substr($cek->kode, 1, 2);
            $j = (int) $ambil;
            $k = $j + 1;
            if (strlen($k) == 1) {
                $kode = "A0" . $k; 
            } else
            if (strlen($k) == 2) {
                $kode = "A" . $k; 
            }
        } else
        if ($data->count() == 0) {
            $kode = "A01";
        }

        return view('admin/varietas')->with([
            "data" => $data,
            "kode" => $kode
        ]);
    }

    public function store(Request $request) {
        $nama = Varietas::where('nama', $request->addNamaBibit)->first();
        if ($nama) {
            return redirect()->back()->with('warning', 'Nama bibit sudah ada');
        } else {
            $tambah = new Varietas();
            $tambah->kode = $request->addKodePadi;
            $tambah->nama = $request->addNamaBibit;
            $tambah->save();
            return redirect()->route("admin.padi")->withToastSuccess("Data berhasil ditambah");
        }
    }

    public function update(Request $request, $kode)
    {
        $cek = Varietas::where('nama', $request->editNamaBibit)->first();
        if ($cek && $cek->kode != $kode) {
            return redirect()->back()->with('warning','Nama bibit padi sudah ada');
        } else {
            $update = Varietas::where('kode', $kode)->first();
            $update->nama = $request->editNamaBibit;
            $update->save();
            return redirect()->route('admin.padi')->withToastSuccess('Data berhasil diperbarui');
        }
    }

    public function destroy($kode)
    {
        Varietas::where('kode', $kode)->delete();
        return redirect()->route('admin.padi')->withToastSuccess("Data berhasil dihapus");
    }
}
