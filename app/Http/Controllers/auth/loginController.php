<?php

namespace App\Http\Controllers\auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;


class loginController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('auth.login');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $data = $this->validate(
            $request,
            [
                'email' => 'required',
                'password' => 'required'
            ]
        );
        $curl_post_data = array(
            'username' => $data['email'],
            'pin' => $data['password'],
            'device_id' => 'ghchcj',
        );
        $url = "http://196.41.87.26/podtest/user/login";
        $res = $this->makeHttpRequest($url, $curl_post_data);
        $data = json_decode($res);
        if ($data === null) {
            return back()->with('danger', 'Invalid username or password');
        } elseif ($data->status === "403") {
            return back()->with('danger', 'Invalid username or password');
        } elseif ($data->status === "200") {
            $token = $data->message;
            $tokenParts = explode(".", $token);
            $user = $tokenParts[1];
            $tokenHeader = base64_decode($tokenParts[0]);
            $tokenPayload = base64_decode($tokenParts[1]);
            $jwtHeader = json_decode($tokenHeader);
            $jwtPayload = json_decode($tokenPayload);
           //dd($jwtPayload);
            $area = "";
            $credit_area_code = "";
             $credit_area = "";
            if(count($jwtPayload->credit_areas)){
            $area = $jwtPayload->credit_areas[0];
            $credit_area_code = $area->code;
            $credit_area = $area->area;

            }
        }
        $user_exist = User::where('email',$jwtPayload->email)->first();
        
        if ($user_exist) {
            $user_exist->update([
                'username' => $jwtPayload->username,
                'user_id' => $jwtPayload->user_id,
                'customer_no' => $jwtPayload->customer_no,
                'customer_name' => $jwtPayload->customer_name,
                'user_type' => $jwtPayload->user_type,
                'first_name' => $jwtPayload->first_name,
                'last_name' => $jwtPayload->last_name,
                'mobile_no' => $jwtPayload->mobileno,
                'user_status' => $jwtPayload->user_status,
                'email' => $jwtPayload->email,
                'token' => $token,
                'password' => Hash::make($request->password),
                'credit_area' => $credit_area,
                'credit_area_code' => $credit_area_code
            ]);
        } else {
            $user = User::create([
                'username' => $jwtPayload->username,
                'user_id' => $jwtPayload->user_id,
                'customer_no' => $jwtPayload->customer_no,
                'customer_name' => $jwtPayload->customer_name,
                'user_type' => $jwtPayload->user_type,
                'first_name' => $jwtPayload->first_name,
                'last_name' => $jwtPayload->last_name,
                'mobile_no' => $jwtPayload->mobileno,
                'user_status' => $jwtPayload->user_status,
                'email' => $jwtPayload->email,
                'token' => $token,
                'password' => Hash::make($request->password),
                'credit_area' => $credit_area,
                'credit_area_code' => $credit_area_code
            ]);

            //assign roles
            switch ($jwtPayload->email) {
                case 'marketing@unga.com':
                    $user->assignRole('marketingManager');
                    break;

                case 'dmusili@unga.com':
                    $user->assignRole('customerService');
                    break;

                case 'kadmin@unga.com':
                    $user->assignRole('superAdmin');
                    break;
            }

        }



        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->route('index');
        } else {
            return back()->with('danger', 'Invalid login credentials');
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
        //
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
        //
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

    private function makeHttpRequest($url, $body)
    {
        $curl = curl_init();
        curl_setopt_array(
            $curl,
            array(
                CURLOPT_URL => $url,
                CURLOPT_HTTPHEADER => array('Content-Type:application/json', 'Accept:application/json'),
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_POST => true,
                CURLOPT_POSTFIELDS => json_encode($body)
            )
        );
        $curl_response = curl_exec($curl);
        curl_close($curl);
        return $curl_response;
    }
}
