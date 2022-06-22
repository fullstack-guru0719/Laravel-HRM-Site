<?php

namespace App\Http\Controllers;


use App\Models\Employee;
use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class EmployeeController extends Controller
{
    
    public function employee_list()
    {
        $employees = Employee::where('em_allowed',1)->get();
        $male_employees = Employee::where('em_allowed',1)->where('gender','Male')->get();
        $female_employees = Employee::where('em_allowed',1)->where('gender','Female')->get();

        return view('common_pages.hrm.employee.hr-emplist',compact([
            'employees','male_employees','female_employees'
        ]));
    }


    public function employee_view($id)
    {
        $current_employee = Employee::find($id);
        $departments = Department::where("department_allowed",1)->get();
        

        return view('common_pages.hrm.employee.hr-empview',compact([
            'current_employee','departments'
        ]));
    }

    public function employee_delete($id)
    {
        $current_employee = Employee::find($id);
        $user = Auth::user();
        $updated_log = $current_employee->updated_log .'deleted by '.$user->id.' / ';
        $current_employee->update(['em_allowed'=>0,'updated_log'=>$updated_log]);
        return redirect()->back();
    }

    public function employee_new()
    {
        $users = User::all();
        $departments = Department::where("department_allowed",1)->get();

        $new_number = 1;
        $add_zero = "";
        $last_employee = Employee::all()->last();
        if($last_employee){
            $new_number = $last_employee->id+1;
        }
        $em_number = "EM-".strval($new_number);
        $length= strlen((string)$new_number);
        if($length<6){
            
            for($i=0;$i<6-$length;$i++){
                $add_zero = "0".strval($add_zero);
            }

            $number = $add_zero .$new_number;
            $em_number = "EM-".$number;
        }

        return view('common_pages.hrm.employee.hr-addemployee',compact([
            'users','em_number','departments'
        ]));
    }

    public function employee_create(Request $request)
    {
        $user = Auth::user();
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $last_employee = Employee::all()->last();
        $current_index = 1;
        if($last_employee!=null){
            $current_index = $last_employee->id +1;
        }
      
        $request->validate([
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
    
        $imageName = time().'.'.$request->image->extension();  

        // $image = base64_encode(file_get_contents($request->file('image')->path()));
        $request->image->move(public_path('images'), $imageName);

        $phone_numebr = $request->phone_number;
        $contact_number = $request->contact_number;
        $birthday = $request->birthday;
        $gender = $request->gender;
        $marital_status = $request->marital_status;
        $blood_group = $request->blood_group;
        $email = $request->email;
        $present_address = $request->present_address;
        $permanet_address = $request->permanet_address;
        $em_email = $request->em_email;
        $em_password = $request->em_password;
        $em_number = $request->em_number;
        $department_id = $request->department_id;
        $designation = $request->designation;
        $join_date = $request->join_date;
        $resignation_date = $request->resignation_date;
        $termination_date = $request->termination_date;
        $credit_leaves = $request->credit_leaves;
        $salary_type = $request->salary_type;
        $salary_amount = $request->salary_amount;
        $status = $request->status;


        Employee::create([
            'created_id'=>$user->id,
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'phone_number'=>$phone_numebr,
            'contact_number'=>$contact_number,
            'birthday'=>$birthday,
            'gender'=>$gender,
            'email' =>$email,
            'marital_status'=>$marital_status,
            'blood_group'=>$blood_group,
            'present_address'=>$present_address,
            'permanet_address'=>$permanet_address,
            'em_email'=>$em_email,
            'em_password'=>$em_password,
            'em_number'=>$em_number,
            'department_id'=>$department_id,
            'designation'=>$designation,
            'join_date'=>$join_date,
            'resignation_date' => $resignation_date,
            'termination_date' => $termination_date,
            'credit_leaves' => $credit_leaves,
            'salary_type' => $salary_type,
            'salary_amount' => $salary_amount,
            'status' => $status,
            'photo'=>$imageName,
            'em_allowed'=>1
        ]);


        return redirect('hrm/employee/hr-emplist');
    }


    public function employee_update(Request $request)
    {
        $current_employee_id = $request->current_employee_id;
        $current_employee = Employee::find($current_employee_id);
        $user = Auth::user();
        $updated_log = $current_employee->updated_log .'updated by '.$user->id.' / ';
        $first_name = $request->first_name;
        $last_name = $request->last_name;
        $phone_numebr = $request->phone_number;
        $contact_number = $request->contact_number;
        $birthday = $request->birthday;
        $gender = $request->gender;
        $marital_status = $request->marital_status;
        $blood_group = $request->blood_group;
        $email = $request->email;
        $present_address = $request->present_address;
        $permanet_address = $request->permanet_address;
        $em_email = $request->em_email;
        $em_password = $request->em_password;
        $em_number = $request->em_number;
        $department_id = $request->department_id;
        $designation = $request->designation;
        $join_date = $request->join_date;
        $resignation_date = $request->resignation_date;
        $termination_date = $request->termination_date;
        $credit_leaves = $request->credit_leaves;
        $salary_type = $request->salary_type;
        $salary_amount = $request->salary_amount;
        $status = $request->status;
        $imageName = $current_employee->photo;
        if($request->hasfile('image')){
            $imageName = time().'.'.$request->image->extension();  
            // $photo = base64_encode(file_get_contents($request->file('image')->path()));
            $request->image->move(public_path('images'), $imageName);
        }
        Employee::find($current_employee_id)->update([
            'updated_log'=>$updated_log,
            'first_name'=>$first_name,
            'last_name'=>$last_name,
            'phone_number'=>$phone_numebr,
            'contact_number'=>$contact_number,
            'birthday'=>$birthday,
            'gender'=>$gender,
            'email' =>$email,
            'marital_status'=>$marital_status,
            'blood_group'=>$blood_group,
            'present_address'=>$present_address,
            'permanet_address'=>$permanet_address,
            'em_email'=>$em_email,
            'em_password'=>$em_password,
            'em_number'=>$em_number,
            'department_id'=>$department_id,
            'designation'=>$designation,
            'join_date'=>$join_date,
            'resignation_date' => $resignation_date,
            'termination_date' => $termination_date,
            'credit_leaves' => $credit_leaves,
            'salary_type' => $salary_type,
            'salary_amount' => $salary_amount,
            'status' => $status,
            'photo'=>$imageName,
            'em_allowed'=>1
        ]);


        return redirect('hrm/employee/hr-emplist');
    }
}
