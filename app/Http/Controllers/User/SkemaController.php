<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Skema;
use Illuminate\View\View;

class SkemaController extends Controller
{
    public function index(): View
    {
        $skemas = Skema::withCount('pesertas')->latest('id')->get();

        return view('user.skema.index', compact('skemas'));
    }
}