<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Task;
use App\Models\TaskFile;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return  view('common_pages.task-dashboard.index');
    }

    public function task_new ()
    {
        $last_task = Task::all()->last();
        $new_number = 1;
        $add_zero = "";
        if($last_task){
            $new_number = $last_task->id + 1 ;
        }
        $task_number = "TASK-".strval($new_number);
        $length= strlen((string)$new_number);
        if($length<6){
            for($i=0;$i<6-$length;$i++){
                $add_zero = "0".strval($add_zero);
            }

            $number = $add_zero .$new_number;
            $task_number = "TASK-".$number;
        }
        $users = User::all();
        $departments = Department::where('department_allowed',1)->get();

        return view('common_pages.task-dashboard.task-new',compact(['users','departments','task_number']));

    }

    public function task_list ()
    {
        $tasks = Task::where('task_allowed', 1)->get();
        $completed_tasks = Task::where('task_allowed', 1)->where('status',1)->get();
        $not_started_tasks = Task::where('task_allowed', 1)->where('status',2)->get();
        $in_progress_tasks = Task::where('task_allowed', 1)->where('status',3)->get();
        return view('common_pages.task-dashboard.task-list',compact([
            'tasks','completed_tasks','not_started_tasks','in_progress_tasks']));

    }

    public function deleted_list ()
    {
        $tasks = Task::where('task_allowed', 0)->get();

        return view('common_pages.task-dashboard.deleted-list',compact([
            'tasks']));

    }

    public function task_view ($id)
    {
        $current_task = Task::find($id);
        $t_files = TaskFile::where('task_file_allowed',1)->where('task_id',$id)->get();
        return view('common_pages.task-dashboard.task-view',compact(['current_task','t_files']));
    }

    public function task_edit ($id)
    {
        $current_task = Task::find($id);
        $users = User::all();
        $departments = Department::where('department_allowed',1)->get();

        $t_files = TaskFile::where('task_file_allowed',1)->where('task_id',$id)->get();
        return view('common_pages.task-dashboard.task-edit',compact(['users','departments','current_task']));
    }

    public function task_profile ()
    {
        return view('common_pages.task-dashboard.task-profile');
    }

    public function task_complete()
    {
        $tasks = Task::where('task_allowed', 1)->get();
        $completed_tasks = Task::where('task_allowed', 1)->where('status',1)->get();
        $not_started_tasks = Task::where('task_allowed', 1)->where('status',2)->get();
        $in_progress_tasks = Task::where('task_allowed', 1)->where('status',3)->get();
        return view('common_pages.task-dashboard.task-complete',compact([
            'tasks','completed_tasks','not_started_tasks','in_progress_tasks']));
    }

    public function task_hold()
    {
        $tasks = Task::where('task_allowed', 1)->get();
        $completed_tasks = Task::where('task_allowed', 1)->where('status',1)->get();
        $not_started_tasks = Task::where('task_allowed', 1)->where('status',2)->get();
        $in_progress_tasks = Task::where('task_allowed', 1)->where('status',3)->get();
        return view('common_pages.task-dashboard.task-hold',compact([
            'tasks','completed_tasks','not_started_tasks','in_progress_tasks']));
    }

    public function task_running()
    {
        $tasks = Task::where('task_allowed', 1)->get();
        $completed_tasks = Task::where('task_allowed', 1)->where('status',1)->get();
        $not_started_tasks = Task::where('task_allowed', 1)->where('status',2)->get();
        $in_progress_tasks = Task::where('task_allowed', 1)->where('status',3)->get();
        return view('common_pages.task-dashboard.task-running',compact([
            'tasks','completed_tasks','not_started_tasks','in_progress_tasks']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function task_create(Request $request)
    {
        //
        $created_id = Auth::user()->id;
        $current_index = 1;
        $last_task = Task::all()->last();
        if($last_task){
            $current_index = $last_task->id + 1;
        }
        $t_number= $request->t_number;
        $t_title= $request->t_title;
        $department_id = $request->department_id;
        $user_id = $request->user_id;;
        $t_priority= $request->t_priority;
        // $start_date = $request->start_date;
        // $end_date = $request->end_date;
        $start_date = Carbon::createFromFormat('d-m-Y', $request->start_date)->format('Y-m-d');
        $end_date = Carbon::createFromFormat('d-m-Y', $request->end_date)->format('Y-m-d');
        $description = $request->description;
        $attachment = "demo";
        $status = $request->task_status;

        Task::create(['created_id'=>$created_id,'t_number'=>$t_number,'t_title'=>$t_title,
            'department_id'=>$department_id,'user_id'=>$user_id,'t_priority'=>$t_priority,
            'start_date'=>$start_date,'end_date'=>$end_date,
            'description'=>$description ,'attachment'=>$attachment,'status'=>$status,'task_allowed'=>1
        ]);

        if($request->hasfile('task_files'))
        {
            // return "sdfds";
            foreach($request->file('task_files') as $key => $file)
            {
                $path = $file->store('public/task_files');
                $name = $file->getClientOriginalName();
                $insert[$key]['f_name'] = $name;
                $insert[$key]['f_path'] = $path;
                $insert[$key]['task_id'] = $current_index;
            } 
            TaskFile::insert($insert);
        }
        return redirect()->to('task/task-list');
    }


    public function task_update(Request $request)
    {
        //
        $current_task_id = $request->current_task_id;
        $created_id = Auth::user()->id;
        $t_number= $request->t_number;
        $t_title= $request->t_title;
        $department_id = $request->department_id;
        $user_id = $request->user_id;;
        $t_priority= $request->t_priority;
        // $start_date = $request->start_date;
        // $end_date = $request->end_date;
        $start_date = Carbon::createFromFormat('d-m-Y', $request->start_date)->format('Y-m-d');
        $end_date = Carbon::createFromFormat('d-m-Y', $request->end_date)->format('Y-m-d');

        $description = $request->description;
        $attachment = "demo";
        $status = $request->task_status;
        $current_task_files = TaskFile::where('task_id',$current_task_id)->get();
        
        if(sizeof($current_task_files)!=0){
            $current_task_files->update(['task_file_allowed'=>3]);
        }
        Task::find($current_task_id)->update(['created_id'=>$created_id,'t_number'=>$t_number,'t_title'=>$t_title,
            'department_id'=>$department_id,'user_id'=>$user_id,'t_priority'=>$t_priority,
            'start_date'=>$start_date,'end_date'=>$end_date,
            'description'=>$description ,'attachment'=>$attachment,'status'=>$status,'task_allowed'=>1
        ]);
    

        if($request->hasfile('task_files'))
        {
            // return "sdfds";
            foreach($request->file('task_files') as $key => $file)
            {
                $path = $file->store('public/task_files');
                $name = $file->getClientOriginalName();
                $insert[$key]['f_name'] = $name;
                $insert[$key]['f_path'] = $path;
                $insert[$key]['task_id'] = $current_task_id;
            } 
            TaskFile::insert($insert);
        }
        return redirect()->to('task/task-list');
    }


    public function task_delete($id)
    {
        $deleted_name = Auth::user()->name;
        $current_task = Task::find($id);
        $updated_log = $current_task->updated_log .'deleted by '.$deleted_name.' / ';
        $current_task->update(['task_allowed'=>0,'updated_log'=>$updated_log]);
        return redirect()->back();
    }


    public function task_restore($id)
    {
        $deleted_name = Auth::user()->name;
        $current_task = Task::find($id);
        $updated_log = $current_task->updated_log .'restored by '.$deleted_name.' / ';
        $current_task->update(['task_allowed'=>1,'updated_log'=>$updated_log]);
        return redirect()->back();
    }


    public function task_empty($id)
    {
        // $deleted_name = Auth::user()->name;
        $current_task = Task::find($id)->delete();
        // $updated_log = $current_task->updated_log .'deleted by '.$deleted_name.' / ';
        // $current_task->update(['task_allowed'=>0,'updated_log'=>$updated_log]);
        return redirect()->back();
    }


    public function task_file_download($id)
    {
        $t_file = TaskFile::find($id);
        $path = $t_file->f_path;
        $f_name = $t_file->f_name;
        return Storage::download($path, $f_name);
    }

    public function task_file_delete($id)
    {
        $t_file = TaskFile::find($id);
        $deleted_name = Auth::user()->name;
        $updated_log = $t_file->updated_log .'deleted by '.$deleted_name.' / ';
        $t_file->update(['task_file_allowed'=> 0 ,'updated_log'=>$updated_log]);
        return redirect()->back();
    }

 
}
