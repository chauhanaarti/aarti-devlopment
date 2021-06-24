<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

use DB;
use Validator;
use App\Models\post;
use App\Models\user;
use Hash;


class postController extends Controller
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

       $this->data['user'] = user::pluck('id','first_name');
        return view('post/create',$this->data);
    }

   public function show()   
    {       

   $this->data['data'] =$data=  post::all();
        return view('post/show',$this->data);
    }


  public function store(Request $request)
    {




      
         $validator = Validator::make($request->all(), [
            'title' => 'required',
            'defination' => 'required',
            'image' => 'mimes:jpeg,png,jpg',
            'user_fk' => 'required',

     ]);

        if ($validator->fails()) {
            return redirect("post")
                            ->withErrors($validator, 'errors')
                            ->withInput();
        } else {
            
        // $Auth = Product::create();
          $input = $request->all();
                
          if ($request->hasfile('image')) {
            $file = $request->file('image');
            
            $name = $file->getClientOriginalName();
            $name = str_replace(" ", "", date("Ymdhis")+1 . $name);
            $file->move(public_path() . '/images/', $name);
            $input['image'] = $name;
        
        }       
    
        $input['created_at'] = date('Y-m-d H:i:s');
        $input['created_by'] = $request->id;
        $input['password'] = Hash::make($request->password);
        
        $post = post::create($input);
        
         if($post){
            Session::flash('success', 'Successfully Inserted');

            return redirect('/post/show');
         }else{
             Session::flash('error', 'Sorry, something went wrong. Please try again');
             return redirect()->back();
         }

        }
    }
  
}