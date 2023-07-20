<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=DB::table("users")->paginate(5);
        return view("pages.erp.user.index",["users"=>$users]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.erp.user.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $username=$request->txtname;
        $mobile=$request->txtmobile;
        $email=$request->txtemail;
        $address=$request->txtaddress;
        $password=$request->txtaddress;

        DB::insert("insert into lrv_users(username,mobile,email,address,password)values('$username','$mobile','$email','$address','$password')");
        return redirect()->route("users.create")->with("success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $users=User::find($id);
        return view("pages.erp.user.show",["user"=>$users]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users=User::find($id);
        return view("pages.erp.user.edit",["user"=>$users]);
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
        $username=$request->txtname;
        $mobile=$request->txtmobile;
        $email=$request->txtemail;
        $address=$request->txtaddress;
        $password=$request->txtaddress;

        DB::table("users")
        ->where('id',$id)
        ->update(['name'=>$username,'mobile'=>$mobile,'email'=>$email,'address'=>$address,'password'=>$password]);
        return redirect()->route("users.index")->with("success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route("users.index")->with("success");
    }

    public function get_user(){
        $id=$_GET["id"];
        $request=User::find($id);
        return json_encode($request);
    }
}
