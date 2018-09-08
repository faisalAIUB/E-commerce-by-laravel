<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\DB;
class LoginController extends Controller
{
    public function index(Request $request)
    {
    	return view('login.index');
    }
     public function verify(LoginRequest $request)
    {
        
        $user = DB::table('users')
            ->where('email', $request->email)
            ->where('password', $request->password)
            ->first();
            
        if($user)
        {

            $request->session()->put('user', $user);
            //dd(session('user')->user_name);
            if($user->user_type=='user'){
            	return redirect()->route('user.profile');	
            }
            else{return redirect()->route('admin.home');}
            
        }
        else
        {
            $request->session()->flash('message', 'Invalid username or password');
            return redirect()->route('login');
        }
    }

    public function logout(Request $request)
    {
        $request->session()->flush();
        return redirect()->route('home');
    }
}
