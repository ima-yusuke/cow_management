<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use App\Models\Ranch;
use Illuminate\Http\Request;

class DashCowListController extends Controller
{
    //
    public function ShowPage()
    {
        $dataArray = Cow::all();
        return view('cow-list',compact('dataArray'));
    }

}
