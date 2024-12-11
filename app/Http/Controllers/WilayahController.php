<?php

namespace App\Http\Controllers;

use App\Models\Province;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function getProvinces () {
        $data = Province::get();
        return response()->json(['provinsi' => $data], 200);
    }
}
