<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use DataTables;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use DB;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::all();
        return view('users',['users'=>$user]);
    }
    
    public function create()
    {
        try
        {
            return view('create-user');

        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);

        }
    }
    
    public function store(Request $request)
    {
          // create user
          $request->validate([
            'first_name' => 'required|string',
            'last_name' => 'required|string',
            'mobile' => 'required|digits:10',
            'email' => 'required|email|unique:users',
            'password' => 'required|string'
        ]);

        try
        {
            // store user information
             $user = User::create([
                'first_name' => $request->first_name,
                'last_name' => $request->last_name,
                'mobile' => $request->mobile,
                'email' => $request->email,
                'DOB' => $request->DOB,
                'gender' => $request->gender,
                'annualIncome' => $request->annualIncome,
                'occupation' => $request->occupation,
                'familyType' => $request->familyType,
                'manglick' => $request->manglick,
                'partIncome' => $request->partIncome,
                'partOccupation' => json_encode($request->partOccupation),
                'partFamily' => json_encode($request->partFamily),
                'partManglick' => $request->partManglick,
                'password' => Hash::make($request->password),
                    ]);
              
            if($user){
                return redirect('users')->with('success', 'New user created!');
            }else{
                return redirect('users')->with('error', 'Failed to create new user! Try again.');
            }
        }catch (\Exception $e) {
            $bug = $e->getMessage();
            return redirect()->back()->with('error', $bug);
        }
    }
    
    public function delete($id)
    {
        $user   = User::find($id);
        if($user){
            $user->delete();
            return redirect('users')->with('success', 'User removed!');
        }else{
            return redirect('users')->with('error', 'User not found');
        }
    }
    

}