<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Imports\DokterImport;
use app\Models\Dokter;
use Maatwebsite\Excel\Facades\Excel;
class DokerController extends Controller
{
    //
    public function index()
    {
$data = Dokter::get();
return view("home_0122",compact('data'));

    }
    public function import(Request $request)
    {
        Excel::import(new DokterImport,$request->file);
        return redirect('/');
    }
}
