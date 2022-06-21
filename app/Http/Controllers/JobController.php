<?php

namespace App\Http\Controllers;


use App\Models\Department;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Job;

class JobController extends Controller
{
    
    public function job_list()
    {
   
        $jobs= Job::where('job_allowed',1)->get();
        return view('common_pages.job-dashboard.job-list',compact([
            'jobs'
        ]));
    }


    public function job_view($id)
    {
        $current_job = Job::find($id);

        return view('common_pages.job-dashboard.job-view',compact([
            'current_job'
        ]));
    }

    public function job_delete($id)
    {
        $current_job = Job::find($id);
        $user = Auth::user();
        $updated_log = $current_job->updated_log .'deleted by '.$user->id.' / ';
        $current_job->update(['job_allowed'=>0,'updated_log'=>$updated_log]);
        return redirect()->back();
    }

    public function job_new()
    {
        return view('common_pages.job-dashboard.job-new',compact([
            
        ]));
    }

    public function job_edit($id)
    {
        $current_job = Job::find($id);
        return view('common_pages.job-dashboard.job-edit',compact([
            'current_job'
        ]));
    }

    public function job_create(Request $request)
    {
        $new_number = 1;
        $add_zero = "";
        $last_job = Job::all()->last();
        if($last_job){
            $new_number = $last_job->id+1;
        }
        $job_number = "JOB-".strval($new_number);
        $length= strlen((string)$new_number);
        if($length<6){
            
            for($i=0;$i<6-$length;$i++){
                $add_zero = "0".strval($add_zero);
            }

            $number = $add_zero .$new_number;
            $job_number = "JOB-".$number;
        }


        $user = Auth::user();
        $company_name = $request->company_name;
        $job_position = $request->job_position;
        $job_category = $request->job_category;
        $job_type = $request->job_type;
        $gender = $request->gender;
        $no_of_vacancy = $request->no_of_vacancy;
        $experiences = $request->experiences;
        $posted_date = $request->posted_date;
        $last_apply_date = $request->last_apply_date;
        $close_date = $request->close_date;
        $city = $request->city;
        $state = $request->state;
        $country = $request->country;
        $education_level = $request->education_level;
        $description = $request->description;
        $salary_type = $request->salary_type;
        $salary_amount = $request->salary_amount;
        $status = $request->status;

        Job::create([
            'job_number'=>$job_number,
            'created_id'=>$user->id,
            'company_name'=>$company_name,
            'job_position'=>$job_position,
            'job_category'=>$job_category,
            'job_type'=>$job_type,
            'gender'=>$gender,
            'no_of_vacancy' =>$no_of_vacancy,
            'experiences'=>$experiences,
            'posted_date'=>$posted_date,
            'last_apply_date'=>$last_apply_date,
            'close_date'=>$close_date,
            'city'=>$city,
            'state'=>$state,
            'country'=>$country,
            'education_level'=>$education_level,
            'description'=>$description,
            'salary_type' => $salary_type,
            'salary_amount' => $salary_amount,
            'status' => $status,
            'job_allowed'=>1
        ]);

        return redirect('job/job-list');
    }


    public function job_update(Request $request)
    {
        $user = Auth::user();
        $current_job_id = $request->current_job_id;
        $current_job = Job::find($current_job_id);
        $updated_log = $current_job->updated_log .'updated by '.$user->id.' / ';
       
        $company_name = $request->company_name;
        $job_position = $request->job_position;
        $job_category = $request->job_category;
        $job_type = $request->job_type;
        $gender = $request->gender;
        $no_of_vacancy = $request->no_of_vacancy;
        $experiences = $request->experiences;
        $posted_date = $request->posted_date;
        $last_apply_date = $request->last_apply_date;
        $close_date = $request->close_date;
        $city = $request->city;
        $state = $request->state;
        $country = $request->country;
        $education_level = $request->education_level;
        $description = $request->description;
        $salary_type = $request->salary_type;
        $salary_amount = $request->salary_amount;
        $status = $request->status;

        Job::find($current_job_id)->update([
            'company_name'=>$company_name,
            'job_position'=>$job_position,
            'job_category'=>$job_category,
            'job_type'=>$job_type,
            'gender'=>$gender,
            'no_of_vacancy' =>$no_of_vacancy,
            'experiences'=>$experiences,
            'posted_date'=>$posted_date,
            'last_apply_date'=>$last_apply_date,
            'close_date'=>$close_date,
            'city'=>$city,
            'state'=>$state,
            'country'=>$country,
            'education_level'=>$education_level,
            'description'=>$description,
            'salary_type' => $salary_type,
            'salary_amount' => $salary_amount,
            'status' => $status,
            'updated_log'=>$updated_log,
        ]);

        return redirect('job/job-list');
    }


    public function job_apply()
    {
        return "success!";
    }

    public function job_user()
    {
        return view('common_pages.job-dashboard.job-user',compact([
    
        ]));
    }
}
