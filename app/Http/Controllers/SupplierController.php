<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class SupplierController extends Controller
{
    //

    public function displaySupplier(){
        $suppliers= User::where('role', 'seller')
            ->orderBy('created_at', 'desc')
            ->get();
//        dd($suppliers);
        return view('Dashboard.supplier')->with('suppliers', $suppliers);
    }

    public function AddSupplier(){

        $credentials = request()->validate([
            'name' => ['required', 'string', 'max:255'],
            'phone' => ['required', 'string', 'max:14'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:6'],
            'store_name'=>['required','string'],
            'company_reg'=>['required','string'],
        ]);
        $user= new User;
        $user->name= $credentials['name'];
        $user->email= $credentials['email'];
        $user->phone= $credentials['phone'];
        $user->password= $credentials['password'];
        $user->store_name= $credentials['store_name'];
        $user->company_reg= $credentials['company_reg'];
        $user->role= 'seller';

        $user->save();

        return response()->json([
            'status'=>'ok'
        ]);


    }
    public function deleteSupplier(Request $request){
        try {
            User::find($request->delId)->delete();
            return response(['status' => 'success',]);

        }catch(Exception $e){
            return response(['status'=>'error']);

        }


    }
    public function editSupplier(Request $request){


        $user=User::find($request->id);
//        dd($user);
        $user->name= $request->input('name1');
        $user->email= $request->input('email1');
        $user->phone= $request->input('phone1');
        $user->password= $request->input('password1');
        $user->store_name= $request->input('store_name1');
        $user->company_reg= $request->input('company_reg1');
//        $user->role= 'seller';

        $user->save();
  
        return response()->json([
            'status'=>'ok'
        ]);




    }
}
