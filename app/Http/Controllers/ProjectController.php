<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Project;
use App\Models\User;
use App\Models\ProjectFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        
        $parent_ids = DB::table('projects')->where('project_allowed',1)->selectRaw('parent_project_id')->groupBy('parent_project_id')->get();
        return view('common_pages.project-dashboard.index',compact(['parent_ids']));
    }

    public function project_new ()
    {
        $users = User::all();
        $parent_ids = DB::table('projects')->selectRaw('parent_project_id')->groupBy('parent_project_id')->get();
        $new_number = 1;
        $add_zero = "";
        if($parent_ids){
            $new_number = sizeof($parent_ids) + 1 ;
        }
        $project_number = "TASK-".strval($new_number);
        $length= strlen((string)$new_number);
        if($length<6){
            for($i=0;$i<6-$length;$i++){
                $add_zero = "0".strval($add_zero);
            }

            $number = $add_zero .$new_number;
            $project_number = "PROJECT-".$number;
        }

        $departments = Department::where('department_allowed',1)->get();
        return view('common_pages.project-dashboard.project-new', compact(['users','departments','project_number']));

    }

    public function project_list ()
    {
        $projects = [];
        $all_parent_ids = DB::table('projects')->selectRaw('parent_project_id')->groupBy('parent_project_id')->get();
        $parent_ids = DB::table('projects')->where('project_allowed',1)->selectRaw('parent_project_id')->groupBy('parent_project_id')->get();
        $canceled_parent_ids = DB::table('projects')->where('project_allowed',0)->selectRaw('parent_project_id')->groupBy('parent_project_id')->get();

        for($i = 0; $i<sizeof($parent_ids);$i++)
        {
//            var_dump($parent_ids[$i]->parent_meeting_id);
            $children = Project::where('parent_project_id',$parent_ids[$i]->parent_project_id)->get();
            for ($j =0 ;$j<sizeof($children); $j++)
            {
                $projects[$i][$j] = $children[$j];
            }
        }

        $departments = Department::where('department_allowed',1)->get();
        return view('common_pages.project-dashboard.project-list',compact([
            'projects','departments','all_parent_ids','canceled_parent_ids']));

    }

    public function deleted_list ()
    {
        $projects = [];
        $parent_ids = DB::table('projects')->where('project_allowed',0)->selectRaw('parent_project_id')->groupBy('parent_project_id')->get();

        for($i = 0; $i<sizeof($parent_ids);$i++)
        {
//            var_dump($parent_ids[$i]->parent_meeting_id);
            $children = Project::where('parent_project_id',$parent_ids[$i]->parent_project_id)->get();
            for ($j =0 ;$j<sizeof($children); $j++)
            {
                $projects[$i][$j] = $children[$j];
            }
        }

        $departments = Department::where('department_allowed',1)->get();
        return view('common_pages.project-dashboard.deleted-list',compact([
            'projects','departments']));

    }

    public function project_view ($parent_id)
    {
        $children = Project::where('parent_project_id',$parent_id)->where('meeting_allowed',1)->get();
        $parent = Project::find($parent_id);
        $p_files = ProjectFile::where('project_id',$parent_id)->where('project_file_allowed',1)->get();
        return view('common_pages.project-dashboard.project-view',compact([
            'children','parent','p_files']));
    }

    public function project_edit ($parent_id)
    {
        $users = User::all();
        $departments = Department::where('department_allowed',1)->get();
        $children = Project::where('parent_project_id',$parent_id)->where('meeting_allowed',1)->get();
        $parent = Project::find($parent_id);
        $p_files = ProjectFile::where('project_id',$parent_id)->where('project_file_allowed',1)->get();
        return view('common_pages.project-dashboard.project-edit',compact([
            'children','parent','p_files','users','departments']));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function project_create(Request $request)
    {
        //
        $created_id = Auth::user()->id;
        $last_project = Project::all()->last();
        $current_index = 1;
        if($last_project!=null){
            $current_index = $last_project->id +1;
        }

        // $start_date = $request->start_date;
        // $end_date = $request->end_date;
        $start_date = Carbon::createFromFormat('d-m-Y', $request->start_date)->format('Y-m-d');
        $end_date = Carbon::createFromFormat('d-m-Y', $request->end_date)->format('Y-m-d');

        $p_title= $request->p_title;
        $department_id = $request->department_id;
        $p_price= $request->p_price;
        $p_number= $request->p_number;
        $p_priority= $request->p_priority;
        $client = $request->client;
        $upload_file_path = "demo";
        $user_id_array = $request->input('user_id');;
        $description = $request->description;

        for ($i =0;$i<sizeof($user_id_array);$i++)
        {
            Project::create(['created_id'=>$created_id,'parent_project_id'=>$current_index,'p_number'=>$p_number,'p_title'=>$p_title,
                'department_id'=>$department_id,'p_priority'=>$p_priority,
                'client'=>$client, 'p_price'=>$p_price,
                'user_id'=>$user_id_array[$i],'start_date'=>$start_date,'end_date'=>$end_date,
                'description'=>$description ,'upload_file_path'=>$upload_file_path
                ]);
        }

        if($request->hasfile('project_files'))
        {
            foreach($request->file('project_files') as $key => $file)
            {
                $path = $file->store('public/project_files');
                $name = $file->getClientOriginalName();
                $insert[$key]['f_name'] = $name;
                $insert[$key]['f_path'] = $path;
                $insert[$key]['project_id'] = $current_index;
            } 
            ProjectFile::insert($insert);
        }

        return redirect()->to('project/project-list');
    }



    public function project_update(Request $request)
    {
        //


        return "Project Update Test!";
        $created_id = Auth::user()->id;
        $last_project = Project::all()->last();
        $current_index = 1;
        if($last_project!=null){
            $current_index = $last_project->id +1;
        }

        // $start_date = $request->start_date;
        // $end_date = $request->end_date;
        $start_date = Carbon::createFromFormat('d-m-Y', $request->start_date)->format('Y-m-d');
        $end_date = Carbon::createFromFormat('d-m-Y', $request->end_date)->format('Y-m-d');

        $p_title= $request->p_title;
        $department_id = $request->department_id;
        $p_price= $request->p_price;
        $p_number= $request->p_number;
        $p_priority= $request->p_priority;
        $client = $request->client;
        $upload_file_path = "demo";
        $user_id_array = $request->input('user_id');;
        $description = $request->description;

        for ($i =0;$i<sizeof($user_id_array);$i++)
        {
            Project::create(['created_id'=>$created_id,'parent_project_id'=>$current_index,'p_number'=>$p_number,'p_title'=>$p_title,
                'department_id'=>$department_id,'p_priority'=>$p_priority,
                'client'=>$client, 'p_price'=>$p_price,
                'user_id'=>$user_id_array[$i],'start_date'=>$start_date,'end_date'=>$end_date,
                'description'=>$description ,'upload_file_path'=>$upload_file_path
                ]);
        }

        if($request->hasfile('project_files'))
        {
            foreach($request->file('project_files') as $key => $file)
            {
                $path = $file->store('public/project_files');
                $name = $file->getClientOriginalName();
                $insert[$key]['f_name'] = $name;
                $insert[$key]['f_path'] = $path;
                $insert[$key]['project_id'] = $current_index;
            } 
            ProjectFile::insert($insert);
        }

        return redirect()->to('project/project-list');
    }

    public function project_delete($parent_id)
    {
        $parent = Project::find($parent_id);
        $deleted_name = Auth::user()->name;
        $updated_log = $parent->updated_log .'deleted by '.$deleted_name.' / ';
        $children = Project::where('parent_project_id', $parent_id)
        ->update(['project_allowed'=>0,'updated_log'=>$updated_log]);
        return redirect()->back();
    }

    public function project_restore($parent_id)
    {
        $parent = Project::find($parent_id);
        $deleted_name = Auth::user()->name;
        $updated_log = $parent->updated_log .'restored by '.$deleted_name.' / ';
        $children = Project::where('parent_project_id', $parent_id)
        ->update(['project_allowed'=>1,'updated_log'=>$updated_log]);
        return redirect()->back();
    }

    public function project_empty($parent_id)
    {
        $children = Project::where('parent_project_id', $parent_id)
        ->delete();
        return redirect()->back();
    }


    public function project_file_download($id)
    {
        $p_file = ProjectFile::find($id);
        $path = $p_file->f_path;
        $f_name = $p_file->f_name;
        return Storage::download($path, $f_name);
    }

    public function project_file_delete($id)
    {
        $p_file = ProjectFile::find($id);
        $deleted_name = Auth::user()->name;
        $updated_log = $p_file->updated_log .'deleted by '.$deleted_name.' / ';
        $p_file->update(['project_file_allowed'=> 0 ,'updated_log'=>$updated_log]);
        return redirect()->back();
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function show(Project $project)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function edit(Project $project)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Project $project)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Project  $project
     * @return \Illuminate\Http\Response
     */
    public function destroy(Project $project)
    {
        //
    }
}
