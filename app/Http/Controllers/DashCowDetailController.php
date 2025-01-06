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

    public function UpdateCow($id,Request $request)
    {

        $request->validate([
            'tag_num' => 'required',
            'name' => 'required',
            'birthday' => 'required',
            'sex'=> 'required',
            'category'=> 'required',
            'ranch_id'=> 'required',
            'cattle_barn_id'=> 'required',
            'parent_id'=> 'required',
            'status_id'=> 'required',
        ]);


        $cow = Cow::find($id);
        $cow->tag_num = $request->tag_num;
        $cow->name = $request->name;
        $cow->birthday = $request->birthday;
        $cow->sex = $request->sex;
        $cow->category = $request->category;
        $cow->ranch_id = $request->ranch_id;
        $cow->cattle_barn_id = $request->cattle_barn_id;
        $cow->parent_cows_id = $request->parent_id;
        $cow->status_id = $request->status_id;
        $cow->save();

        return $this->ShowPage($id);
    }
}
