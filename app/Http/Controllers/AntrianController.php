<?php

namespace App\Http\Controllers;

use App\Models\kategori;
use App\Models\member;
use Illuminate\Http\Request;

class AntrianController extends Controller
{
    public function addantrian(Request $request)
    {
        $data = kategori::where('id', $request->id)->get();
        return response()->json($data);
    }

    public function member(Request $request)
    {
        $data = member::where('id', $request->id)->get();
        return response()->json($data);
    }
}
