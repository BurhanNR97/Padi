<?php

namespace App\Http\Controllers;

use App\Models\History;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HistoryController extends Controller
{
    public function index(): View
    {
        $data = History::latest()->get();

        return view('admin/history')->with([
            "data" => $data
        ]);
    }

    public function destroy($id)
    {
        History::destroy($id);
        return redirect()->route('admin.history')->withToastSuccess("Data berhasil dihapus");
    }

    public function reset()
    {
        History::truncate();
        return redirect()->route('admin.history')->withToastSuccess("Data hasil rekomendasi berhasil dibersihkan");
    }
}
