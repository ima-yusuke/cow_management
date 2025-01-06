<?php

namespace App\Http\Controllers;

use App\Models\CattleBarn;
use App\Models\ParentCow;
use App\Models\Status;
use Illuminate\Http\Request;
use App\Models\Cow;
use App\Models\Ranch;

class DashCowDetailController extends Controller
{
    //
    public function ShowPage($id)
    {
        $cowDetail = Cow::find($id);
        $ranchArray = Ranch::all();
        $cattleBarnArray = CattleBarn::all();
        $parentArray = ParentCow::all();
        $statusArray = Status::all();
        return view('cow-detail',compact('cowDetail','ranchArray','statusArray','cattleBarnArray','parentArray'));
    }
}
