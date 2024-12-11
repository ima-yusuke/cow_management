<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Status;

class DashStatusController extends Controller
{
    public function ShowPage()
    {
        $dataArray = Status::all();
        return view('dash-status',compact('dataArray'));
    }

    public function AddStatus(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $ranch = new Status();
        $ranch->name = $request->name;
        $ranch->save();

        return $this->ShowPage();
    }

    public function UpdateStatus(Request $request)
    {
        $request->validate([
            'name' => 'required',
        ]);

        $ranch = Status::find($request->id);
        $ranch->name = $request->name;
        $ranch->save();

        return $this->ShowPage();
    }

    public function DeleteStatus(Request $request)
    {
        $ranch = Status::find($request->id);
        $ranch->delete();

        return $this->ShowPage();
    }
}
