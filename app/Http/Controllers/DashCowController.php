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

    public function AddCow(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'tag_num' => 'required',
            'birthday' => 'required',
            'sex'=> 'required',
            'category'=> 'required',
            'ranch_id'=> 'required',
            'cattle_barn_id'=> 'required',
            'parent_id'=> 'required',
            'status_id'=> 'required',
        ]);

        $cow = new Cow();
        $cow->name = $request->name;
        $cow->tag_num = $request->tag_num;
        $cow->birthday = $request->birthday;
        $cow->sex = $request->sex;
        $cow->category = $request->category;
        $cow->ranch_id = $request->ranch_id;
        $cow->cattle_barn_id = $request->cattle_barn_id;
        $cow->parent_cows_id = $request->parent_id;
        $cow->status_id = $request->status_id;
        $cow->save();

        return $this->ShowPage();
    }
}
