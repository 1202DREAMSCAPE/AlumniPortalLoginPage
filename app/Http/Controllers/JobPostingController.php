<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JobPosting;

class JobPostingController extends Controller
{
    public function create()
    {
        return view('job-posting');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'JTitle' => 'required',
            'JLocation' => 'required',
            'Salary' => 'required',
            'EmailAdd' => 'required',
            'Address' => 'required',
            'CPerson' => 'required',
            'EmpType' => 'required',
            'CIndustry' => 'required',
            'CName' => 'required',
            'JDesc' => 'required',
            'CNumCompany' => 'required'
        ]);

        $jobPosting = new JobPosting;
        $jobPosting->JTitle = $request->JTitle;
        $jobPosting->JLocation = $request->JLocation;
        $jobPosting->Salary = $request->Salary;
        $jobPosting->EmailAdd = $request->EmailAdd;
        $jobPosting->Address = $request->Address;
        $jobPosting->CPerson = $request->CPerson;
        $jobPosting->EmpType = $request->EmpType;
        $jobPosting->CIndustry = $request->CIndustry;
        $jobPosting->CName = $request->CName;
        $jobPosting->JDesc = $request->JDesc;
        $jobPosting->CNumCompany = $request->CNumCompany;
        $jobPosting->save();

        return redirect()->back()->with('success', 'Data has been successfully entered.');
    }
}
