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


    public function deleteData($id)
    {
        $user=  User::find($id);
        $user->delete();

        echo 'delete successfully';
        return redirect('home');
    }
}
