<?php

namespace App\Http\Controllers;

use App\Models\Applicant;
use Illuminate\Http\Request;

class ApplicantController extends Controller
{
    public function index(){
        $applicants=Applicant::orderBy('experience_years')->paginate(20);
        return view('index',compact('applicants'));
    }
    public function edit($id){
        $applicant=Applicant::find($id);
        return view('edit',compact('applicant'));
    }
    public function save_edit(Request $request, $id){
        $applicant = Applicant::find($id);
        $applicant->update($request->all());
        return redirect()->back();

    }
    public function delete($id){
        $applicant=Applicant::find($id);
        $applicant->delete();
    }
    public function hired(Applicant $applicant){

        if ($applicant->is_hired==false){
            $applicant->is_hired=true;

        }else{
            $applicant->is_hired=false;
        }
        $applicant->save();
        return redirect()->back();
    }


}
