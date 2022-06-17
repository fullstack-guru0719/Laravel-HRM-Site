<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use App\Models\EmphotoFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class EmployeeController extends Controller
{
    
    public function employee_list()
    {
        $employees = Employee::all();

        return view('common_pages.hrm.employee.hr-emplist',compact(['employees']));
    }

    public function employee_new()
    {
        return view('common_pages.hrm.employee.hr-addemployee');
    }

    public function employee_create(Request $request)
    {
        $user = Auth::user();
       
        $last_employee = Employee::all()->last();
        $current_index = 1;
        if($last_employee!=null){
            $current_index = $last_employee->id +1;
        }

        $phone_numebr = $request->phone_number;
        $contact_number = $request->contact_number;
        $birthday = $request->birthday;
        $gender = $request->gender;
        $marital_status = $request->marital_status;
        $blood_group = $request->blood_group;
        $presend_address = $request->present_address;
        $permanet_address = $request->permanet_address;
        $em_email = $request->em_email;
        $em_password = $request->em_password;

        Employee::create([
            'user_id'=>$user->id,
            'phone_number'=>$phone_numebr,
            'contact_number'=>$contact_number,
            'birthday'=>$birthday,
            'gender'=>$gender,
            'marital_status'=>$marital_status,
            'blood_group'=>$blood_group,
            'present_address'=>$presend_address,
            'permanet_address'=>$permanet_address,
            'em_email'=>$em_email,
            'em_password'=>$em_password,
            'em_allow'=>0
        ]);

        $validatedData = $request->validate([
            // 'emphoto_files' => 'required',
            'files.*' => 'mimes:png,jpg'
        ]);

        if($request->hasfile('emphoto_files'))
        {
            foreach($request->file('emphoto_files') as $key => $file)
            {
                $path = $file->store('public/emphoto_files');
                $name = $file->getClientOriginalName();
                $insert[$key]['f_name'] = $name;
                $insert[$key]['f_path'] = $path;
                $insert[$key]['employee_id'] = $current_index;
            }

            EmphotoFile::insert($insert);
        } 
        return redirect('hrm/employee/hr-emplist');
    }
}
