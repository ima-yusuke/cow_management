<?php

namespace App\Http\Controllers;

use App\Models\Cow;
use Illuminate\Http\Request;

class DashCowListController extends Controller
{
    //
    public function ShowPage()
    {
        $dataArray = Cow::all();
        return view('home',compact('dataArray'));
    }
}
