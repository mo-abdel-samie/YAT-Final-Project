<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Experiance;

class ExperianceController extends Controller
{
    public function addExperiance(Request $request) {
        Experiance::create([

            'company_name' => $request->company,
            'position' => $request->position,
            'description' => $request->description,
            'year' => $request->date
        ]);

        return redirect('/admin/experiance')->with('successMasege','Experiance Added Succesfuly');
    }

    public function getExperiance() {

        $experiances = Experiance::all();
        return view('admin.experiance')->with('experiances',$experiances);

    }

    public function deleteExperiance($id) {

        $experiances = Experiance::find($id)->delete();
        return redirect()->back()->with('successMasege',"Row $id deleted successfuly");

    }
}
