<?php

namespace Modules\Attendance\Http\Controllers;

use App\User;
use Hekmatinasser\Verta\Verta;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\View\View;
use Modules\Attendance\Entities\Attendance;
use Yajra\DataTables\DataTables;

class AdminAttendanceController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {
        $attend = User::find(auth()->user()->id)->attendances()->get();

        //now
        $date = Verta::now()->format('Y-n-j');
        //pc time
        date_default_timezone_set('Asia/tehran');
        $time = date('h:i:s');

        return view('attendance::Admin_index' , compact( 'date', 'time', 'attend'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {
        return view('attendance::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        return view('attendance::show');
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     * @param int $id
     * @return Renderable
     */
    public function destroy($id)
    {
        //
    }

    /**
     * Return contents list data
     */
    public function list()
    {
        return DataTables::of(Attendance::all())
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
        return view('attendance::partials.action_column', compact('atten'));
    }


}
