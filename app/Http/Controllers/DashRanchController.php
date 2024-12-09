<?php

namespace App\Http\Controllers;

use App\Models\Ranch;
use Illuminate\Http\Request;

class DashRanchController extends Controller
{
    //
    public function ShowPage()
    {
        $dataArray = Ranch::all();
        return view('dash-ranch',compact('dataArray'));
    }

    public function AddRanch(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $ranch = new Ranch();
        $ranch->name = $request->name;
        $ranch->save();

        return $this->ShowPage();
    }

    public function UpdateRanch(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $ranch = Ranch::find($request->id);
        $ranch->name = $request->name;
        $ranch->save();

        return $this->ShowPage();
    }

    public function DeleteRanch(Request $request)
    {
        $ranch = Ranch::find($request->id);
        $ranch->delete();

        return $this->ShowPage();
    }
}
