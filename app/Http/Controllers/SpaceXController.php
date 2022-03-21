<?php

namespace App\Http\Controllers;

use App\Models\Capsule;
use Illuminate\Http\Request;

class SpaceXController extends Controller
{
    public function getCapsules(Request $request)
    {
        $capsules = $request->has('status') ? Capsule::where('status', $request->status)->get() : Capsule::all();
        return response()->json($capsules);
    }

    public function listCapsuleDetail($serial){
        $capsule = Capsule::where('capsule_serial', $serial)->first();
        return response()->json($capsule);
    }
}
