<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cow;

class DashCowDetailController extends Controller
{
    //
    public function ShowPage($id)
    {
        $cowDetail = Cow::find($id);
        return view('dash-cow-detail',compact('cowDetail'));
    }
}
