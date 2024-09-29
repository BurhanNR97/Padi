<?php

namespace App\Http\Controllers;

use App\Models\History;
use App\Models\Kriteria;
use App\Models\User;
use App\Models\Varietas;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdminController extends Controller
{
    function index(): View {
        $jmlAkun = User::all()->count();
        $jmlPadi  = Varietas::all()->count();
        $jmlKriteria = Kriteria::all()->count();
        $jmlRekom = History::all()->count();

        $inpara08 = History::where('bibit', 'Inpara 08')->count();
        $inpari09 = History::where('bibit', 'Inpari 09')->count();
        $ciherang = History::where('bibit', 'Ciherang')->count();
        $mekongga = History::where('bibit', 'Mekongga')->count();
        $bioprima = History::where('bibit', 'Bioprima')->count();
        $mr = History::where('bibit', 'Malaysian Rice')->count();
        $cakrabuana = History::where('bibit', 'Cakrabuana')->count();
        $ketonggo = History::where('bibit', 'Ketonggo')->count();
        $inpago12 = History::where('bibit', 'Inpago 12')->count();

        return view("admin.index")->with([
            "jmlAkun"=> $jmlAkun,
            "jmlPadi"=> $jmlPadi,
            "jmlKriteria"=> $jmlKriteria,
            "jmlRekom"=> $jmlRekom,
            "inpara08" => $inpara08,
            "inpari09" => $inpari09,
            "ciherang" => $ciherang,
            "bioprima" => $bioprima,
            "mekongga" => $mekongga,
            "mr" => $mr,
            "cakrabuana" => $cakrabuana,
            "ketonggo" => $ketonggo,
            "inpago12" => $inpago12
        ]);
    }
}
