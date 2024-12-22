<?php

namespace App\Http\Controllers;

use App\Models\ParentCow;
use App\Models\Ranch;
use Illuminate\Http\Request;

class DashParentController extends Controller
{
    public function ShowPage()
    {
        $dataArray = ParentCow::all();
        $ranchArray = Ranch::all();
        return view('dash-parent-cow',compact('dataArray','ranchArray'));
    }

    public function AddParentCow(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'ranch_id' => 'required',
        ]);

        $ranch = new ParentCow();
        $ranch->name = $request->name;
        $ranch->ranch_id = $request->ranch_id;
        $ranch->save();

        return $this->ShowPage();
    }

    public function UpdateParentCow(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'ranch_id' => 'required',
        ]);

        $ranch = ParentCow::find($request->id);
        $ranch->name = $request->name;
        $ranch->ranch_id = $request->ranch_id;
        $ranch->save();

        return $this->ShowPage();
    }

    public function DeleteParentCow(Request $request)
    {
        $ranch = ParentCow::find($request->id);
        $ranch->delete();

        return $this->ShowPage();
    }
}
