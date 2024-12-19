<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use App\Models\ParentCow;
use App\Models\Ranch;
use App\Models\CattleBarn;
use App\Models\Status;
use Illuminate\Http\Request;

class DashCowController extends Controller
{
    public function ShowPage()
    {
//        $cowArray = Cow::all();
        $ranchArray = Ranch::all();
        $cattleBarnArray = CattleBarn::all();
        $statusArray = Status::all();
        $parentArray = ParentCow::all();
        return view('dash-cow',compact('ranchArray','cattleBarnArray','statusArray','parentArray'));
    }
}
