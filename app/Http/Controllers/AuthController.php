<?php
namespace App\Http\Controllers;

use App\Models\Alumni;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
 public function login()
 {
    return view('newlogin');
 }

 public function loginPost(Request $request)
 {
    $credetials = [
        'SNum' => $request->SNum,
        'Password' => $request->Password,
    ];

    $alumni = Alumni::where('SNum', $credetials['SNum'])->first();

    if ($alumni && $alumni->Password == $credetials['Password']) {
        Auth::guard('alumni')->login($alumni);
        return redirect('/jobposting')->with('success', 'Login Success');
    }

    return back()->with('error', 'Wrong Student Number or Password');
 }
}

