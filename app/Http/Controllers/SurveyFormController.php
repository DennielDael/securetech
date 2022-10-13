<?php

namespace App\Http\Controllers;
use App\Models\SurveyForm;
use Illuminate\Http\Request;

class SurveyFormController extends Controller
{
    public function index()
    {
        return view('surveyform');
    }
    public function store(Request $request)
    {
        $surveyform = new SurveyForm;
        $surveyform->fullname = $request->fullname;
        $surveyform->company_name = $request->company_name;
        $surveyform->address = $request->address;
        $surveyform->description = $request->decription;
        $surveyform->save();
        return redirect('surveyform')->with('status', 'Request Survey Success');
    }

}
