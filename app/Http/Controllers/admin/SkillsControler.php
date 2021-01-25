<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\SkillsRequest;

use App\Models\Skill;

class SkillsControler extends Controller
{
    public function addSkill(Request $request) {
        Skill::create([

            'skill_name' => $request->skill,
            'pres_level' => $request->pre_Level,

        ]);

        return redirect('/admin/skills')->with('successMasege','Skill Added Succesfuly');
    }

    public function getSkill() {

        $skills = Skill::all();
        return view('admin.skills')->with('skills',$skills);

    }

    public function deleteSkill($id) {

        $skills = Skill::find($id)->delete();
        return redirect()->back()->with('successMasege',"Row $id deleted successfuly");

    }
}
