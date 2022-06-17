<?php

namespace App\Http\Controllers;

use App\Models\WorkOrder;
use App\Models\OrderFile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;
use PDF;


class WorkOrderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meetings = [];
        $current_year = Carbon::now()->format('Y');
        $current_month = Carbon::now()->month;
        // return $current_month;
        $total_orders = WorkOrder::where('work_order_allowed',1)->get();
        $year_orders = WorkOrder::whereYear('start_date',$current_year)->where('work_order_allowed',1)->get();
        $month_orders = WorkOrder::whereYear('start_date',$current_year)->whereMonth('start_date',$current_month)->where('work_order_allowed',1)->get();

        return view('common_pages.work-order-dashboard.index',compact([
            'total_orders','year_orders','month_orders']));
    }

    public function workOrder_new()
    {

        $new_number = 1;
        $add_zero = "";
        $last_order = WorkOrder::all()->last();
        if($last_order){
            $new_number = $last_order->id+1;
        }
        $order_number = "WO-".strval($new_number);
        $length= strlen((string)$new_number);
        if($length<6){
            
            for($i=0;$i<6-$length;$i++){
                $add_zero = "0".strval($add_zero);
            }

            $number = $add_zero .$new_number;
            $order_number = "WO-".$number;
        }

        return view('common_pages.work-order-dashboard.work-order-new',compact([
            'order_number'
        ]));
    }

    public function workOrder_list()
    {
        $todayDate = Carbon::now()->format('Y-m-d');
        $total_orders = WorkOrder::all();
        $canceled_orders = WorkOrder::where('work_order_allowed', 0)->get();
        $real_orders = WorkOrder::where('work_order_allowed', 1)->get();

        $completed_orders = WorkOrder::whereDate('end_date','<',$todayDate)->where('work_order_allowed',1)->get();
        $in_progress_orders = WorkOrder::whereDate('start_date','<',$todayDate)->whereDate('end_date','>',$todayDate)->where('work_order_allowed',1)->get();
        $not_started_orders = WorkOrder::whereDate('start_date','>=',$todayDate)->where('work_order_allowed',1)->get();
       
        return view('common_pages.work-order-dashboard.work-order-list',compact([
            'total_orders','canceled_orders','real_orders','completed_orders','in_progress_orders','not_started_orders'
        ]));
    }


    public function workOrder_convert($id)
    {
        $current_order = WorkOrder::find($id);
        $path = public_path('pdf_convert_head.png');
//       return base64_encode(file_get_contents($path));
        $image = base64_encode(file_get_contents($path));
        $today = Carbon::now()->format('d-m-Y');
        $file_name = $current_order->order_number.".pdf";

        $start_date = Carbon::createFromFormat('Y-m-d', $current_order->start_date)->format('d-m-Y');
        $end_date = Carbon::createFromFormat('Y-m-d', $current_order->end_date)->format('d-m-Y');

    //    return view('workOrder-convert-pdf',compact(['current_order','image']));
        $pdf = PDF::loadView('workOrder-convert-pdf',
            ['current_order'=>$current_order,'image'=>$image,'start_date'=>$start_date, 'end_date'=>$end_date,'today'=>$today])
            ->setOptions(['defaultFont' => 'sans-serif']);

        return $pdf->download($file_name);
    }

    public function workOrder_view($id)
    {
        $current_order = WorkOrder::find($id);
        $order_files = OrderFile::where('order_file_allowed',1)->where('work_order_id',$id)->get();
        return view('common_pages.work-order-dashboard.work-order-view', compact([
            'current_order','order_files'
        ]));
    }

    public function workOrder_delete($id)
    {
        $deleted_name = Auth::user()->name;
        $current_order = WorkOrder::find($id);
        $updated_log = $current_order->updated_log .'deleted by '.$deleted_name.' / ';
        $current_order->update(['work_order_allowed'=>0,'updated_log'=>$updated_log]);
        return redirect()->back();
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function workOrder_create(Request $request)
    {
        $created_id = Auth::user()->id;

        $folderPath = public_path('storage/work_order_files/signature_files/sign');
        // return $folderPath;
        $source_image = $request->signed;
        $image = explode(";base64,", $request->signed);
              
        $image_type = explode("image/", $image[0]);
           
        $image_type_png = $image_type[1];
          
        $image_base64 = base64_decode($image[1]);
           
        $file = $folderPath . uniqid() . '.'.$image_type_png;
        file_put_contents($file, $image_base64);

        $new_number = 1;
        $add_zero = "";
        $last_order = WorkOrder::all()->last();
        if($last_order){
            $new_number = $last_order->id+1;
        }
        $order_number = "WO-".strval($new_number);
        $length= strlen((string)$new_number);
        if($length<6){
            
            for($i=0;$i<6-$length;$i++){
                $add_zero = "0".strval($add_zero);
            }

            $number = $add_zero .$new_number;
            $order_number = "WO-".$number;
        }
        $bill_to = $request->bill_to;
        $phone_number = $request->phone_number;
        $address = $request->address;
        $ref = $request->ref;
        $work_order = $request->work_order;
        $city = $request->city;
        $order_taken_by = $request->order_taken_by;
        $start_time = $request->start_time;
        $start_date = Carbon::createFromFormat('d-m-Y', $request->start_date)->format('Y-m-d');
        $end_date = Carbon::createFromFormat('d-m-Y', $request->end_date)->format('Y-m-d');
        $end_time= $request->end_time;
        $email = $request->email;
        $work_type = $request->work_type;
        $description = $request->description;
        $tech_name = $request->tech_name;
        // return $tech_name;

        WorkOrder::create(['created_id'=>$created_id,'order_number'=>$work_order,
                    'bill_to'=>$bill_to,'phone_number'=>$phone_number,'address'=>$address,
                    'ref'=>$ref,'work_order'=>$work_order,'city'=>$city,'order_taken_by'=>$order_taken_by,
                    'start_date'=>$start_date,'start_time'=>$start_time, 'end_date'=>$end_date,'end_time'=>$end_time,
                    'email'=>$email,'work_type'=>$work_type, 'signature'=>$source_image, 'description'=>$description,'tech_name'=>$tech_name
                ]);
        if($request->hasfile('work_order_files'))
        {
            foreach($request->file('work_order_files') as $key => $file)
            {
                $path = $file->store('public/work_order_files');
                $name = $file->getClientOriginalName();
                $insert[$key]['f_name'] = $name;
                $insert[$key]['f_path'] = $path;
                $insert[$key]['work_order_id'] = $new_number;

            } 
            OrderFile::insert($insert);
        } 
        return redirect('workOrder/workOrder-list')->with('status', 'Multiple File has been uploaded Successfully');

    }


    public function workOrder_update(Request $request)
    {
        $current_order_id = $request->current_order_id;
        $bill_to = $request->bill_to;
        
        $phone_number = $request->phone_number;
        $address = $request->address;
        $ref = $request->ref;
        $work_order = $request->work_order;
        $city = $request->city;
        $order_taken_by = $request->order_taken_by;
        $start_time = $request->start_time;
        $start_date = Carbon::createFromFormat('d-m-Y', $request->start_date)->format('Y-m-d');
        $end_date = Carbon::createFromFormat('d-m-Y', $request->end_date)->format('Y-m-d');
        $end_time= $request->end_time;
        $email = $request->email;
        $work_type = $request->work_type;

        $source_image = $request->signed;
        $description = $request->description;
        $tech_name = $request->tech_name;

        WorkOrder::find($current_order_id)->update([
                    'bill_to'=>$bill_to,'phone_number'=>$phone_number,'address'=>$address,
                    'ref'=>$ref,'work_order'=>$work_order,'city'=>$city,'order_taken_by'=>$order_taken_by,
                    'start_date'=>$start_date,'start_time'=>$start_time, 'end_date'=>$end_date,'end_time'=>$end_time,
                    'email'=>$email,'work_type'=>$work_type,'signature'=>$source_image, 'description'=>$description , 'tech_name'=>$tech_name
                ]);
        if($request->hasfile('work_order_files'))
        {
            foreach($request->file('work_order_files') as $key => $file)
            {
                $path = $file->store('public/work_order_files');
                $name = $file->getClientOriginalName();
                $insert[$key]['f_name'] = $name;
                $insert[$key]['f_path'] = $path;
                $insert[$key]['work_order_id'] = $current_order_id;

            } 
            OrderFile::insert($insert);
        } 
        return redirect('workOrder/workOrder-list')->with('status', 'Multiple File has been uploaded Successfully');

    }


    public function workOrder_edit($id)
    {
        $current_order = WorkOrder::find($id);
        $start_date = Carbon::createFromFormat('Y-m-d', $current_order->start_date)->format('d-m-Y');
        $end_date = Carbon::createFromFormat('Y-m-d', $current_order->end_date)->format('d-m-Y');
        return view('common_pages.work-order-dashboard.work-order-edit',compact([
            'current_order','start_date','end_date'
        ]));
    }


    public function order_file_download($id)
    {
        $t_file = OrderFile::find($id);
        $path = $t_file->f_path;
        $f_name = $t_file->f_name;
        return Storage::download($path, $f_name);
    }

    public function order_file_delete($id)
    {
        $order_file = OrderFile::find($id);
        $deleted_name = Auth::user()->name;
        $updated_log = $order_file->updated_log .'deleted by '.$deleted_name.' / ';
        $order_file->update(['order_file_allowed'=> 0 ,'updated_log'=>$updated_log]);
        return redirect()->back();
    }

}
