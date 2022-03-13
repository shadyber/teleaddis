<?php

namespace App\Http\Controllers\api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
$header=$request->header('Authorization');
if(empty($header)){

  return response(['result' => false,'message'=>'API requested without authorization header!']);
}else if(!$header='Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkV0aGlvdGVsIiwiaWF0IjoxNTE2MjM5MDIyfQ.A2m08nnDojpTPuTrAZDY3ntgBuMv6WwG3_syEEu7dDU'){

  return response(['result' => false,'message'=>'API requested  authorization header invalid!']);
}


    $data = $request->validate([
        'tel' => 'required',
       ]);


        $name=$request['name'] ? $request['name'] : $request['tel'];
        $email=$request['email'] ? $request['email'] : $request['tel'].'@teleaddis.com';
        $tel=$request['tel'];
        $password=rand(1000,9999);


  $user = new User();
try{

           $user->name =$name;
             $user->tel = $tel;
             $user->email =$email;
             $user->password =Hash::make($password);


if($user->save()){
       $accessToken = $user->createToken('authToken')->accessToken;
      return response(['result'=>true, 'message'=>'User Registerd Succusfully', 'user' => $user, 'pin'=>$password,
        'access_token' =>
        $accessToken], 201);


}else{
  return response(['result' => false,'message'=>'User Not Registerd ']);
}

 }catch (\Exception $ex){
 return response()->json([
             'message' => $ex->getMessage(),
             'result'  => false
         ]);
}



}
    public function verify(Request $request){

dd($request);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        //
    }


    public function destroy(Request $request)
    {
       $header=$request->header('Authorization');
       if(empty($header)){

         return response(['result' => false,'message'=>'API requested without authorization header!']);
       }else if(!$header='Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJzdWIiOiIxMjM0NTY3ODkwIiwibmFtZSI6IkV0aGlvdGVsIiwiaWF0IjoxNTE2MjM5MDIyfQ.A2m08nnDojpTPuTrAZDY3ntgBuMv6WwG3_syEEu7dDU'){

         return response(['result' => false,'message'=>'API requested  authorization header invalid!']);
       }


           $data = $request->validate([
               'tel' => 'required',
              ]);

                  // Get user record
                      $user = User::where('tel', $request->get('tel'))->first();



                      // Check Condition Mobile No. Found or Not
                      if(!$user) {
              // Get user record
                      $user = User::where('email', $request->get('tel'))->first();
               if(!$user) {

                          return response()->json([
                                      'message' => 'Phone Number not found in our database',
                                      'result'  => false
                                  ]); }
                      }


      $user->delete();

 return response()->json([
             'message' => 'User Removed from Our Database',
             'result'  => true
         ]);
    }
}
