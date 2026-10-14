<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use App\Models\Skema;
use Illuminate\View\View;

class DashboardController extends Controller
{
    public function index(): View
    {
        return view('user.dashboard', [
            'totalPeserta' => Peserta::count(),
            'totalSkema' => Skema::count(),
            'perSkema' => Skema::withCount('pesertas')->orderBy('nama_skema')->get(),
        ]);
    }
}