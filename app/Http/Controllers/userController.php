<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    //
    function login(Request $req)
    {
        $user= User::where(['email'=>$req->email])->first();
        if(!$user || !Hash::check($req->password,$user->password))
        {
            return "Username or password is not matched";
        }
        else{
            $req->session()->put('user',$user);
            return redirect('/');
        }
    }

   
    function register (Request $request) {
        //if form is validated successfully then register in table 
        $user = new User;
        $user->fname = $request->fname;
        $user->lname = $request->lname;
        $user->email = $request->email;
        $user->number = $request->number;
        $user->adress = $request->adress;
        $user->city = $request->city;
        $user->type = $request->type;
        $user->photo = $request->photo;
        $user->desc = $request->desc;
        $user->password = Hash::make($request->password);
        $user ->save();

        return redirect('/login');
        
      
        }




}
    
