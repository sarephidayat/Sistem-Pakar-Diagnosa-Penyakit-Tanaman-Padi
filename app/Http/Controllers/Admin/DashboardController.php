<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MasterGejala;
use App\Models\MasterPenyakit;
use App\Models\MasterRule;

class DashboardController extends Controller
{
    //
    public function index()
    {
        $total_gejala = MasterGejala::count();
        $total_penyakit = MasterPenyakit::count();
        $total_rule = MasterRule::count();

        return view('admin/dashboard.index', compact('total_gejala', 'total_penyakit', 'total_rule'));
    }
}
