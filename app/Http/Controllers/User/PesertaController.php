<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\Peserta;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PesertaController extends Controller
{
    public function index(Request $request): View
    {
        $q = trim((string) $request->query('q', ''));

        $pesertas = Peserta::with('skema')
            ->when($q !== '', function ($query) use ($q) {
                $query->where(function ($w) use ($q) {
                    $w->where('nama', 'like', "%{$q}%")
                      ->orWhere('nik', 'like', "%{$q}%")
                      ->orWhere('email', 'like', "%{$q}%")
                      ->orWhereHas('skema', fn ($s) => $s->where('nama_skema', 'like', "%{$q}%"));
                });
            })
            ->latest('id')
            ->paginate(10)
            ->withQueryString();

        return view('user.peserta.index', compact('pesertas', 'q'));
    }

    public function show(Peserta $peserta): View
    {
        $peserta->load('skema');

        return view('user.peserta.show', compact('peserta'));
    }
}