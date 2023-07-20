<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $employees=DB::table("employees")->get();
        return view("pages.erp.employee.index",["employees"=>$employees]);

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("pages.erp.employee.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $name=$request->txtname;
        $mobile=$request->txtmobile;
        $email=$request->txtemail;
        $address=$request->txtaddress;

        DB::insert("insert into lrv_employees (name,mobile,email,address)values('$name','$mobile','$email','$address')");
        return redirect()->route('employees.create')->with("success");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $employee=Employee::find($id);
        return view("pages.erp.employee.show",["employee"=>$employee]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $employee=Employee::find($id);
        return view("pages.erp.employee.edit",["employee"=>$employee]);
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
        $name=$request->txtname;
        $mobile=$request->txtmobile;
        $email=$request->txtemail;
        $address=$request->txtaddress;

        DB::table("employees")
        ->where('id',$id)
        ->update(['name'=>$name,'mobile'=>$mobile,'email'=>$email,'address'=>$address]);
        return redirect()->route('employees.index')->with("success");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::delete("delete from lrv_employees where id=:id",['id'=>$id]);
        return redirect()->route('employees.index')->with("success");
    }
}
