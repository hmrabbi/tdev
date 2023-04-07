<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Dev;


class UserController extends Controller
{
    /**
     * user page
     */
    public function index(){
        return view('user.userpage');
    }
    
    /**
     * admin page
     */
    public function redirect(){
        $usertype = Auth::user()->usertype;

        if($usertype=='1'){
            return view('admin.home');
        }

        else{
            return view('user.userpage');
        }
    }

    public function user_create(Request $request){
        $data = new Dev();
        $data->name = $request->name;
        $data->position = $request->position;
        $data->office = $request->office;
        $data->age = $request->age;
        $data->date = $request->date;
        $data->save();
        return redirect()->back();
    }

    public function auth_delete($id){
        $data = Dev::find($id);
        $data->delete();
        return redirect()->back();
    }

    public function auth_update($id){
        $data = Dev::find($id);
        return view('admin.update',compact('data'));
    }

    public function update(Request $request,$id){
        $data = Dev::find($id);
        $data->name = $request->name;
        $data->position = $request->position;
        $data->office = $request->office;
        $data->age = $request->age;
        $data->date = $request->date;
        $data->save();
        return redirect()->back();
    }
}
