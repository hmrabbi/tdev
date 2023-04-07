<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Dev;


class AdminController extends Controller
{
    public function admin_show(){
        $data = Dev::all();
       // $data = Dev::paginate(3);
        return view('admin.admin_show',compact('data'));
    }

    
    
}
