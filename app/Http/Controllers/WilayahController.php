<?php

namespace App\Http\Controllers;

use App\Models\District;
use App\Models\Province;
use App\Models\Regencie;
use App\Models\Village;
use Illuminate\Http\Request;

class WilayahController extends Controller
{
    public function getProvinces () {
        $data = Province::get();
        return response()->json(['provinsi' => $data], 200);
    }

    public function getRegencies (Request $request) {
        $data = Regencie::where('id_provinsi', $request['id_provinsi'])->get();
        return response()->json(['kota_kabupaten' => $data], 200);
    }

    public function getDistricts (Request $request) {
        $data = District::where('id_kota', $request['id_kota'])->get();
        return response()->json(['kecamatan' => $data], 200);
    }

    public function getVillages (Request $request) {
        $data = Village::where('id_kecamatan', $request['id_kecamatan'])->get();
        return response()->json(['desa' => $data], 200);
    }
}
