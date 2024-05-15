<?php

namespace App\Http\Controllers;

use App\Models\merek;

class MerekController extends Controller
{
    public function muncul()
    {
        $mereks = Merek::all();

        return view('mereks/index', compact('mereks'));

    }
    public function show($id)
    {
        $mereks = Merek::FindOrFail($id);
        return view('mereks/show', compact('mereks'));
    }
}
