<?php

namespace App\Http\Controllers;

use App\Models\Hewan;
use App\Models\Adopsi;
use App\Models\Pengguna;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalPengguna = Pengguna::count();
        $totalHewan = Hewan::count();
        $totalAdopsi = Adopsi::count();

        return view('dashboard-admin.index', compact('totalPengguna', 'totalHewan', 'totalAdopsi'));
    }
}
