<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\Regencie;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function getProvinces () {
        $data = Province::get();
        return response()->json(['provinsi' => $data], 200);
    }

    public function getRegencies (Request $request) {
        $data = Regencie::where('province_id', $request['id_provinsi'])->get();
        return response()->json(['kota_kabupaten' => $data], 200);
    }

    public function getDistricts (Request $request) {
        $data = District::where('regency_id', $request['id_kecamatan'])->get();
        return response()->json(['kecamatan' => $data], 200);
    }
}
