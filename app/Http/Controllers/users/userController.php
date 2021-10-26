<?php

namespace App\Http\Controllers\users;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all();
        return view('users.index', compact('users'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::all();
        return view('users.create', compact('roles'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'password' => ['required','confirmed', 'max:4']
        ]);
        $token = Auth::user()->token;
        $url = 'http://196.41.87.26/podtest/user/register';
        $body = array(
            'user_type' => $request->user_type,
            'customer_no' => $request->customer_no,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'pin' => $request->password,
            'mobileno' => $request->mobileno,
        );
        $register = $this->makeHttpRequest($url,$body,$token);
        if ($register->status == "200") {
            //save user to local db
            $user = new User();
            $user->user_type = $register->message->user_type;
            $user->customer_no = $register->message->customer_no;
            $user->first_name = $register->message->first_name;
            $user->last_name = $register->message->last_name;
            $user->email = $register->message->email;
            $user->password = Hash::make($register->message->pin);
            $user->mobileno = $register->message->mobileno;
            $user->save();
            //assign role
            if ($register->message->user_type == "admin") {
                $role = "superAdmin";
            } elseif($register->message->user_type == "market") {
                $role = "marketingManager";
            }else{
                $role = "customerService";
            }
            $user->assignRole($role);

        return back()->with('message','User created successfully!');

        } else {
            return back()->with('danger','Failed to register user!');
        }




    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('users.show', compact('user','roles'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        User::findOrFail($id)->update(array_merge($request->all()));
        return back()->with('message','User edited successfully!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    private function makeHttpRequest($url, $body, $token)
    {
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url,
                CURLOPT_HTTPHEADER => array('Authorization: Bearer '.$token,'Content-Type:application/json'),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => json_encode($body)
            )
        );
        $curl_response = curl_exec($curl);
        curl_close($curl);
        return json_decode($curl_response);
    }
}
