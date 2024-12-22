<?php

namespace App\Http\Controllers;

use App\Models\CattleBarn;
use App\Models\Ranch;
use Illuminate\Http\Request;

class DashCattleBarnController extends Controller
{
    //
    public function ShowPage()
    {
        $dataArray = CattleBarn::all();
        $ranchArray = Ranch::all();
        return view('dash-cattle-barn',compact('dataArray','ranchArray'));
    }

    public function AddCattleBarn(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'ranch_id' => 'required',
        ]);

        $ranch = new CattleBarn();
        $ranch->name = $request->name;
        $ranch->ranch_id = $request->ranch_id;
        $ranch->save();

        return $this->ShowPage();
    }

    public function UpdateCattleBarn(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'ranch_id' => 'required',
        ]);

        $ranch = CattleBarn::find($request->id);
        $ranch->name = $request->name;
        $ranch->ranch_id = $request->ranch_id;
        $ranch->save();

        return $this->ShowPage();
    }

    public function DeleteCattleBarn(Request $request)
    {
        $ranch = CattleBarn::find($request->id);
        $ranch->delete();

        return $this->ShowPage();
    }
}
