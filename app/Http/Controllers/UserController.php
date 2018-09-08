<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\CreateUserRequest;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        
        $products=User::find($request->session()->get('user')->user_id)->products;

         return view('user.profile')
                ->with('products',$products);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('user.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateUserRequest $request)
    {
       
       /* User::create();

        $u=new User();
        
        $u->user_name=$request->username;
        $u->email=$request->email;
        $u->phone=$request->phone;
        $u->password=$request->password;
        $u->gender=$request->gender;
        $u->dob=$request->dob;
        
        $u->save();*/

        $data=[
            'user_name'=>$request->user_name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'password'=>$request->password,
            'gender'=>$request->gender,
            'dob'=>$request->dob,
            'user_type'=>$request->user_type
        ];
        DB::table('users')
             ->insert($data);                   
        
        return redirect()->route('home');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
         $us=User::find($id);
         return view('user.show')
                ->with('user',$us);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $us=User::find($id);
        return view('user.edit')
                ->with('user',$us);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(CreateUserRequest $request, $id)
    {
        $use=User::find($request->user_id);
        $use->user_name=$request->user_name;
        $use->phone=$request->phone;
        $use->password=$request->password;
        $use->save();
        return redirect()->route('user.profile');   
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }
}
