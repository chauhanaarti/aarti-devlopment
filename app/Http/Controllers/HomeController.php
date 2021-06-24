<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use Validator;
use App\Models\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
       return view('home');
    }
    public  function create()
    {

        return view('user/create');
    }

   public function show()   
    {       

   $this->data['data'] =$data=  User::all();
        return view('user/show',$this->data);
    }


    public function store(Request $request)
     {
        $data = $this->validate($request, [
            'first_name' => 'required',
            'last_name' => 'required',
            'email' => 'required',
            'mobile' => 'required',
            'adress' => 'required',
        ]);

        user::create([
           'first_name' => $data['first_name'],
           'last_name' => $data['last_name'],
           'email' => $data['email'],
           'mobile' => $data['mobile'],
           'adress' => $data['adress'],
       ]);

        return redirect('user/show');
    }
    
    

  
}