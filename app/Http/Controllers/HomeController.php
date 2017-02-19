<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = User::get(); 
        return view('home', get_defined_vars());
    } 

    public function editData($id)
    {
        $user = User::find($id);
        return view('edit', get_defined_vars());
    }  

    public function updateData($id, Request $req)
    {
        $user = User::find($id); 
        $user->name = $req->input('name');
        $user->email = $req->input('email');
        $user->save();
        return redirect('home');
        // echo 'Update successfully';
    }


    public function deleteData($id)
    {
        $user =  User::find($id);
        // $user->name = 'Shakif';
        // $user->save();

        // die();
        $user->delete();

        // echo 'delete successfully';
        return redirect('home');
    }
}
