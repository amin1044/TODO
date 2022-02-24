<?php

namespace Modules\Attendance\Http\Controllers;


use App\User;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\App;
use Illuminate\View\View;
use Yajra\DataTables\DataTables;
use Hekmatinasser\Verta\Verta;
use Modules\Attendance\Http\Requests\AttendanceRequest;
use Modules\Attendance\Entities\Attendance;
use Illuminate\Support\Facades\DB;


class AttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $attend=User::find(auth()->user()->id)->attendances()->get();

        //now
        $date = Verta::now()->format('Y-n-j');
        //pc time
        date_default_timezone_set('Asia/tehran');
        $time = date('h:i:s');

       return view('attendance::index' , compact( 'date', 'time', 'attend' ));
    }

    /**
     * Show the form for creating a new resource.
     * @param Attendance $atten
     * @return Renderable
     */
    public function create()
    {
        //now
        $date = Verta::now()->format('Y-n-j');
        //pc time
        date_default_timezone_set('Asia/tehran');
        $time = date('h:i:s');
        //model
        $atten = Attendance::all();
        return view('attendance::create', compact('date', 'time', 'atten'));
    }

    public function store(AttendanceRequest $request)
    {
        $validate_data = $request->validated();

        Attendance::create([
            'today_date'=>$validate_data['today_date'],
            'attendance_time'=>$validate_data['attendance_time'],
            'status'=>$validate_data['status'],
            'name'=>  auth()->user()->name ,
            'user_id'=> auth()->user()->id ,
        ]);
        return redirect(route('admin.attendance.index'));
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        //pc time
        date_default_timezone_set('Asia/tehran');
        $time = date('h:i:s');

        $atten = Attendance::findOrFail($id);
        return view('attendance::edit', compact('atten' , 'time'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)

    {
        return view('attendance::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param Request $request
     * @param int $id
     * @return Renderable
     */
    public function update(AttendanceRequest $request, $id)
    {
        $validate_data = $request->validated();

        $data = Attendance::findOrFail($id);

        $attendance_time = \Carbon\Carbon::parse($request->input('attendance_time'));
        $logout_time = \Carbon\Carbon::parse($request->input('logout_time'));
        $result = $attendance_time->diff($logout_time)->format('%H:%I:%S');


        $data->update([
            'today_date'=>$validate_data['today_date'],
            'attendance_time'=>$validate_data['attendance_time'],
            'logout_time'=>$validate_data['logout_time'],
            'time'=> $result,
            'time_wasted'=>$validate_data['time_wasted'],
            'overtime'=>$validate_data['overtime'],
            'description'=>$validate_data['description'],
            'status'=>$validate_data['status'],
        ]);

        $data->save();

        return redirect(route('admin.attendance.index'));
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        Attendance::findOrFail($id)->delete();

        return response('Ok!Deleted Attendance successfully!', Response::HTTP_OK);
    }

    /**
     * Restored contents
     *
     * @param Request $request
     * @return Response
     */
    public function restore(Request $request)
    {
        Attendance::withTrashed()->findOrFail($request->id)->restore();

        return response('Ok!Restored FormContactUs successfully!', Response::HTTP_OK);
    }

    /**
     * Return contents list data
     */
    public function list()
    {
        return DataTables::of(User::find(auth()->user()->id)->attendances()->get())
            ->addColumn('actions', function ($atten) {
                return $this->actionColumn($atten);
            })->rawColumns(['actions'])->make(true);
    }

    /**
     * Contents list action column
     *
     * @param Attendance $atten
     * @return View
     */
    private function actionColumn($atten)
    {
        //pc time
        date_default_timezone_set('Asia/tehran');
        $time = date('h:i:s');

        return view('attendance::partials.action_column_user', compact('atten' , 'time'));
    }

}
