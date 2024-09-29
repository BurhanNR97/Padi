<?php

namespace App\Http\Controllers;

use App\Models\Kriteria;
use App\Models\Subkriteria;
use Illuminate\Http\Request;
use Illuminate\View\View;

class SubkriteriaController extends Controller
{
    public function index(): View
    {
        $data = Subkriteria::orderBy('updated_at','desc')->get();
        $kriteria = Kriteria::orderBy('kode','asc')->get();

        return view('admin/sub')->with([
            "data" => $data,
            "kriteria" => $kriteria
        ]);
    }

    public function store(Request $request) {
        $nama = Subkriteria::where('subkriteria', $request->addSub)->first();
        if ($nama) {
            return redirect()->back()->with('warning', 'Sub-Kriteria sudah ada');
        } else {
            $tambah = new Subkriteria();
            $tambah->kriteria = $request->addKriteria;
            $tambah->subkriteria = $request->addSub;
            $tambah->bobot = $request->addBobot;
            $tambah->save();
            return redirect()->route("admin.sub")->withToastSuccess("Data berhasil ditambah");
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
            $update->save();
            return redirect()->route('admin.sub')->withToastSuccess('Data berhasil diperbarui');
        }
    }

    public function destroy($id)
    {
        Subkriteria::destroy($id);
        return redirect()->route('admin.sub')->withToastSuccess("Data berhasil dihapus");
    }
}
