<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use App\Models\Department;
use Illuminate\Http\Request;

class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $departments = Department::where("department_allowed",1)->get();

        return view('common_pages.hrm.hr-department',compact('departments'));
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
        //
        $user = Auth::user();
        $request->validate([
            'department_name' => 'required',
        ]);
        $department_name = $request->department_name;
        Department::create([
            'department_name'=>$department_name,
            'created_id' =>$user->id
        ]);
        return redirect()->to('hrm/department/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function show(Department $department)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function edit(Department $department)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        //
        $request->validate([
            'current_department_name' => 'required',
        ]);
       
        $current_department_name = $request->current_department_name;
        $current_department_id = $request->current_department_id;
        $current_department = Department::find($current_department_id);
        $updated_name = Auth::user()->name;
        $updated_log = $current_department->updated_log .'updated by '.$updated_name.' / ';
        $current_department->update(['department_name' => $current_department_name,
                                    'updated_log'=>$updated_log]);
        return redirect()->to('hrm/department/index');
    }

    public function delete($id)
    {
        $deleted_name = Auth::user()->name;
        $current_department = Department::find($id);
        $updated_log = $current_department->updated_log .'deleted by '.$deleted_name.' / ';
        $current_department->update(['department_allowed'=>0,'updated_log'=>$updated_log]);
        return redirect()->back();
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Department  $department
     * @return \Illuminate\Http\Response
     */
    public function destroy(Department $department)
    {
        //
    }
}
