<?php

namespace App\Http\Controllers;

use App\Models\Department;
use App\Models\Meeting;
use App\Models\MeetingFile;
use App\Models\User;

use Illuminate\Support\Facades\Storage;

use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Response;

use PDF;


class MeetingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */


    public function testpython(Request $request)
    {


        
        $validatedData = $request->validate([
            'emphoto_file' => 'required',
        ]);

        if($request->hasfile('emphoto_file'))
        {
            $file = $request->file('emphoto_file');
            $name = $file->getClientOriginalName ();
        }
        // return $name;
        $path =  public_path('\\face-recognition\\main.py');
        $path = 'python '.$path.' '.$name;
        // return $path;
        
        $command = escapeshellcmd($path);
        $output = shell_exec($command);
        $att_results = explode('/',$output);
       
        return view('common_pages.hrm.time-attendance.face-view',compact(['att_results','name']));

    }


    public function index()
    {
        $meetings = [];
        $current_year = Carbon::now()->format('Y');
        $current_month = Carbon::now()->month;
        // return $current_month;
        $parent_ids = DB::table('meetings')->where('meeting_allowed',1)->selectRaw('parent_meeting_id')->groupBy('parent_meeting_id')->get();
        $year_meetings_ids = DB::table('meetings')->whereYear('start_date',$current_year)->where('meeting_allowed',1)->selectRaw('parent_meeting_id')->groupBy('parent_meeting_id')->get();
        $month_meetings_ids = DB::table('meetings')->whereYear('start_date',$current_year)->whereMonth('start_date',$current_month)->where('meeting_allowed',1)->selectRaw('parent_meeting_id')->groupBy('parent_meeting_id')->get();

        for($i = 0; $i<sizeof($parent_ids);$i++)
        {
//            var_dump($parent_ids[$i]->parent_meeting_id);
            $children = Meeting::where('parent_meeting_id',$parent_ids[$i]->parent_meeting_id)->get();
            for ($j =0 ;$j<sizeof($children); $j++)
            {
                $meetings[$i][$j] = $children[$j];
            }
        }

        $departments = Department::where('department_allowed',1)->get();

        return view('common_pages.meeting-dashboard.index',compact([
            'meetings','departments','year_meetings_ids','month_meetings_ids']));
    }

    public function meeting_new()
    {
        $departments = Department::where('department_allowed',1)->get();
        $users = User::all();
        return view('common_pages.meeting-dashboard.meeting-new',compact(['departments','users']));
    }

    public function meeting_edit($id)
    {

        // $children = Meeting::where('parent_meeting_id',$parent_id)->where('registered',1)->get();
        // $out_attendees = Meeting::where('parent_meeting_id',$parent_id)->where('registered',0)->first();
        // $m_files = MeetingFile::where('meeting_id',$parent_id)->where('meeting_file_allowed',1)->get();
        $parent = Meeting::find($id);
        $start_date = Carbon::createFromFormat('Y-m-d', $parent->start_date)->format('d-m-Y');
        // return $start_date;
        // $start_date = $parent->start_date->format('d-m-Y');
        $end_date = Carbon::createFromFormat('Y-m-d', $parent->end_date)->format('d-m-Y');
        $children = Meeting::where('parent_meeting_id',$id)->where('meeting_allowed',1)->get();
        $departments = Department::where('department_allowed',1)->get();
        $users = User::all();
        return view('common_pages.meeting-dashboard.meeting-edit',compact([
            'departments','users','parent','start_date','end_date','children']));

    }

    public function meeting_view($parent_id)
    {
        $children = Meeting::where('parent_meeting_id',$parent_id)->where('registered',1)->where('meeting_allowed',1)->get();
        $out_attendees = Meeting::where('parent_meeting_id',$parent_id)->where('meeting_allowed',1)->where('registered',0)->first();
        $m_files = MeetingFile::where('meeting_id',$parent_id)->where('meeting_file_allowed',1)->get();
        $out_att_name=[];
        $out_att_email=[];
        if($out_attendees!=null)
        {
            $out_att_name = explode(',',$out_attendees->out_att_name);
            $out_att_email = explode(',',$out_attendees->out_att_email);
        }
        

        $parent = Meeting::find($parent_id);
        return view('common_pages.meeting-dashboard.meeting-view',compact(['parent','children','out_att_name','out_att_email','m_files']));
    }
    public function meeting_empty($parent_id)
    {
        $empty_meetings = Meeting::where('parent_meeting_id',$parent_id)->delete(); 
        return redirect()->back();
    }

    public function meeting_restore($parent_id)
    {
        $parent = Meeting::find($parent_id);
        $deleted_name = Auth::user()->name;
        $updated_log = $parent->updated_log .'restored by '.$deleted_name.' / ';
        $children = Meeting::where('parent_meeting_id', $parent_id)->where('meeting_allowed','<>',2)
        ->update(['meeting_allowed'=>1,'updated_log'=>$updated_log]);
        return redirect()->back();
    }

    public function meeting_delete($parent_id)
    {
        $parent = Meeting::find($parent_id);
        $deleted_name = Auth::user()->name;
        $updated_log = $parent->updated_log .'deleted by '.$deleted_name.' / ';
        $children = Meeting::where('parent_meeting_id', $parent_id)
        ->update(['meeting_allowed'=>0,'updated_log'=>$updated_log]);
        return redirect()->back();
    }


    public function meeting_list()
    {
        $meetings = [];
        $out_attendees =[];
        $todayDate = Carbon::now()->format('Y-m-d');
        // $not_started_meetings_ids = DB::table('meetings')->whereDate('start_date','>',$todayDate)->get();
        
        $completed_meetings_ids = DB::table('meetings')->whereDate('end_date','<',$todayDate)->where('meeting_allowed',1)->selectRaw('parent_meeting_id')->groupBy('parent_meeting_id')->get();

        $total_meetings_ids = DB::table('meetings')->selectRaw('parent_meeting_id')->groupBy('parent_meeting_id')->get();

        $in_progress_meetings_ids = DB::table('meetings')->whereDate('start_date','<',$todayDate)->whereDate('end_date','>',$todayDate)->where('meeting_allowed',1)->selectRaw('parent_meeting_id')->groupBy('parent_meeting_id')->get();
        $not_started_meetings_ids = DB::table('meetings')->whereDate('start_date','>=',$todayDate)->where('meeting_allowed',1)->selectRaw('parent_meeting_id')->groupBy('parent_meeting_id')->get();
        $cancel_meetings_ids = DB::table('meetings')->where('meeting_allowed',0)->selectRaw('parent_meeting_id')->groupBy('parent_meeting_id')->get();
        $parent_ids = DB::table('meetings')->where('meeting_allowed',1)->selectRaw('parent_meeting_id')->groupBy('parent_meeting_id')->get();
        for($i = 0; $i<sizeof($parent_ids);$i++)
        {
//            var_dump($parent_ids[$i]->parent_meeting_id);
            $children = Meeting::where('parent_meeting_id',$parent_ids[$i]->parent_meeting_id)->where('registered',1)->where('meeting_allowed',1)->get();
            $out_attendees[$parent_ids[$i]->parent_meeting_id] = Meeting::where('parent_meeting_id',$parent_ids[$i]->parent_meeting_id)->where('registered',0)->where('meeting_allowed',1)->first();
            for ($j =0 ;$j<sizeof($children); $j++)
            {
                $meetings[$i][$j] = $children[$j];               
            }
            
        }
        // return $out_attendees;

        $departments = Department::where('department_allowed',1)->get();
//        $meetings = Meeting::all();
        return view('common_pages.meeting-dashboard.meeting-list',compact([
            'meetings','departments','cancel_meetings_ids','not_started_meetings_ids',
            'in_progress_meetings_ids','completed_meetings_ids','total_meetings_ids','out_attendees']));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function meeting_create(Request $request)
    {
        $created_id = Auth::user()->id;

        $new_number = 1;
        $add_zero = "";
        $parent_ids = DB::table('meetings')->selectRaw('parent_meeting_id')->groupBy('parent_meeting_id')->get();
        if($parent_ids){
            $new_number = sizeof($parent_ids)+1;
        }
        $meeting_number = "MOM-".strval($new_number);
        $length= strlen((string)$new_number);
        if($length<6){
            
            for($i=0;$i<6-$length;$i++){
                $add_zero = "0".strval($add_zero);
            }

            $number = $add_zero .$new_number;
            $meeting_number = "MOM-".$number;
        }
        

        $out_att_name = $request->out_att_name;
        $out_att_email = $request->out_att_email;
        $last_meeting = Meeting::all()->last();
        $current_index = 1;
        if($last_meeting!=null){
            $current_index = $last_meeting->id +1;
        }
        $start_time = $request->start_time;
        $start_date = Carbon::createFromFormat('d-m-Y', $request->start_date)->format('Y-m-d');
        $end_date = Carbon::createFromFormat('d-m-Y', $request->end_date)->format('Y-m-d');
        $end_time = $request->end_time;
        $location = $request->location;
        $department_id = $request->department_id;
        $subject= $request->subject;
        $type = $request->type;
        $user_id_array = $request->input('user_id');;

        $description = $request->description;

        $validatedData = $request->validate([
            // 'meeting_files' => 'required',
        ]);

    
        for ($i =0;$i<sizeof($user_id_array);$i++)
        {
                Meeting::create(['created_id'=>$created_id,'parent_meeting_id'=>$current_index,'start_date'=>$start_date,'start_time'=>$start_time,
                    'end_date'=>$end_date, 'end_time' => $end_time,'meeting_number'=>$meeting_number,
                    'location'=>$location, 'department_id'=>$department_id,'subject'=>$subject,
                    'type'=>$type,'user_id'=>$user_id_array[$i],'registered'=>1,'description'=>$description]);
        }

        if($out_att_email!=null && $out_att_name !=null){
            Meeting::create(['created_id'=>$created_id,'parent_meeting_id'=>$current_index,'start_date'=>$start_date,'start_time'=>$start_time,
            'end_date'=>$end_date, 'end_time' => $end_time,'meeting_number'=>$meeting_number,
                'location'=>$location, 'department_id'=>$department_id,'subject'=>$subject,
                'type'=>$type,'user_id'=>1,'out_att_name'=>$out_att_name,'out_att_email'=>$out_att_email,'registered'=>0,'description'=>$description]);    
        }
     
        if($request->hasfile('meeting_files'))
        {
            foreach($request->file('meeting_files') as $key => $file)
            {
                $path = $file->store('public/meeting_files');
                $name = $file->getClientOriginalName();
                $insert[$key]['f_name'] = $name;
                $insert[$key]['f_path'] = $path;
                $insert[$key]['meeting_id'] = $current_index;

            } 
            MeetingFile::insert($insert);
        }


        return redirect('meeting/meeting-list')->with('status', 'Multiple File has been uploaded Successfully');
    }




    public function meeting_update(Request $request)
    {
        $created_id = Auth::user()->id;
        $current_meeting_id = $request->current_meeting_id;

    
        $parent_ids = DB::table('meetings')->selectRaw('parent_meeting_id')->groupBy('parent_meeting_id')->get();
       
        
        $out_att_name = $request->out_att_name;
        $out_att_email = $request->out_att_email;
        $parent = Meeting::find($current_meeting_id);
        Meeting::where('parent_meeting_id',$current_meeting_id)->where('id','>',$current_meeting_id)->where('meeting_allowed',1)->update(['meeting_allowed'=>2]);
        $old_children =  Meeting::where('parent_meeting_id',$current_meeting_id)->where('id','>',$current_meeting_id)->where('meeting_allowed',1)->get();
        // return $old_children ;
        $start_time = $request->start_time;
        
        $start_date = Carbon::createFromFormat('m-d-Y', $request->start_date)->format('Y-m-d');
        $end_date = Carbon::createFromFormat('m-d-Y', $request->end_date)->format('Y-m-d');
        $end_time = $request->end_time;
        $location = $request->location;
        $department_id = $request->department_id;
        $subject= $request->subject;
        $type = $request->type;
        $user_id_array = $request->input('user_id');

        $description = $request->description;

        $validatedData = $request->validate([
            // 'meeting_files' => 'required',
        ]);

        Meeting::find($current_meeting_id)->update([
            'start_date'=>$start_date,'start_time'=>$start_time,
                    'end_date'=>$end_date, 'end_time' => $end_time,'meeting_number'=>$parent->meeting_number,
                    'location'=>$location, 'department_id'=>$department_id,'subject'=>$subject,
                    'type'=>$type,'user_id'=>$user_id_array[0],'registered'=>1,'description'=>$description
        ]);
        
        for ($i =1;$i<sizeof($user_id_array);$i++)
        {
                Meeting::create(['created_id'=>$created_id,'parent_meeting_id'=>$current_meeting_id,'start_date'=>$start_date,'start_time'=>$start_time,
                    'end_date'=>$end_date, 'end_time' => $end_time,'meeting_number'=>$parent->meeting_number,
                    'location'=>$location, 'department_id'=>$department_id,'subject'=>$subject,
                    'type'=>$type,'user_id'=>$user_id_array[$i],'registered'=>1,'description'=>$description]);
        }

        if($out_att_email!=null && $out_att_name !=null){
            Meeting::create(['created_id'=>$created_id,'parent_meeting_id'=>$current_meeting_id,'start_date'=>$start_date,'start_time'=>$start_time,
            'end_date'=>$end_date, 'end_time' => $end_time,$parent->meeting_number,
                'location'=>$location, 'department_id'=>$department_id,'subject'=>$subject,
                'type'=>$type,'user_id'=>1,'out_att_name'=>$out_att_name,'out_att_email'=>$out_att_email,'registered'=>0,'description'=>$description]);    
        }
     
        if($request->hasfile('meeting_files'))
        {
            foreach($request->file('meeting_files') as $key => $file)
            {
                $path = $file->store('public/meeting_files');
                $name = $file->getClientOriginalName();
                $insert[$key]['f_name'] = $name;
                $insert[$key]['f_path'] = $path;
                $insert[$key]['meeting_id'] = $current_meeting_id;

            } 
            MeetingFile::insert($insert);
        }


        return redirect('meeting/meeting-list')->with('status', 'Multiple File has been uploaded Successfully');
    }


    public function meeting_convert($parent_id)
    {
        $children = Meeting::where('parent_meeting_id',$parent_id)->where('registered',1)->get();
        $out_attendees = Meeting::where('parent_meeting_id',$parent_id)->where('registered',0)->get();

        $parent = Meeting::find($parent_id);
        $path = public_path('pdf_convert_head.png');
//       return base64_encode(file_get_contents($path));
        $image = base64_encode(file_get_contents($path));
        $time = Carbon::now();
        $file_name = $parent->meeting_number.".pdf";
//        return view('meeting-convert-pdf');
        $pdf = PDF::loadView('meeting-convert-pdf',
            ['parent'=>$parent,'children'=>$children, 'image'=>$image,'out_attendees'=>$out_attendees])
            ->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download($file_name);
    }

    public function meeting_file_download($id)
    {
        $m_file = MeetingFile::find($id);
        $path = $m_file->f_path;
        $f_name = $m_file->f_name;
        return Storage::download($path, $f_name);
    }

    public function meeting_file_delete($id)
    {
        $m_file = MeetingFile::find($id);
        $deleted_name = Auth::user()->name;
        $updated_log = $m_file->updated_log .'deleted by '.$deleted_name.' / ';
        $m_file->update(['meeting_file_allowed'=> 0 ,'updated_log'=>$updated_log]);
        return redirect()->back();
    }

    public function deleted_list()
    {
        $meetings = [];
        $out_attendees =[];
        // $not_started_meetings_ids = DB::table('meetings')->whereDate('start_date','>',$todayDate)->get();
        

      $parent_ids = DB::table('meetings')->where('meeting_allowed',0)->selectRaw('parent_meeting_id')->groupBy('parent_meeting_id')->get();

        for($i = 0; $i<sizeof($parent_ids);$i++)
        {
//            var_dump($parent_ids[$i]->parent_meeting_id);
            $children = Meeting::where('parent_meeting_id',$parent_ids[$i]->parent_meeting_id)->where('registered',1)->where('meeting_allowed','<>',2)->get();
            $out_attendees[$parent_ids[$i]->parent_meeting_id] = Meeting::where('parent_meeting_id',$parent_ids[$i]->parent_meeting_id)->where('registered',0)->where('meeting_allowed','<>',2)->first();
            for ($j =0 ;$j<sizeof($children); $j++)
            {
                $meetings[$i][$j] = $children[$j];               
            }
            
        }
        // return $out_attendees;

        $departments = Department::where('department_allowed',1)->get();
//        $meetings = Meeting::all();
        return view('common_pages.meeting-dashboard.deleted-list',compact([
            'meetings','departments','out_attendees']));
    }
}
