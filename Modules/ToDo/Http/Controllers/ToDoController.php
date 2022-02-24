<?php

namespace Modules\ToDo\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ToDo\Entities\ToDo;
use Modules\ToDo\Http\Requests\todoupdateRequest;
use Yajra\DataTables\DataTables;

class ToDoController extends Controller
{
    /**
     * Display a listing of the resource.
     * @return Renderable
     */
    public function index()
    {

        $data = ToDo::all();
        return view('todo::index', compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     * @return Renderable
     */
    public function create()
    {

        return view('todo::create');
    }

    /**
     * Store a newly created resource in storage.
     * @param Request $request
     * @return Renderable
     */
    public function store(ToDoRequest $request)
    {
        $data = $request->Validated();
        ToDo::create([
            'name' => $data['name'],
            'title' => $data['title'],
            'start' => $data['start'],
            'end' => $data['end'],
        ]);
        return back();
    }


    private function fillRequest($request, $model)
    {
        /**
         * @var ToDo $model
         * @var Request $request
         */
        $model->fill($request->all());
        $model->saveOrFail();

    }

    /**
     * Show the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function show($id)
    {
        //$x = ToDo::find($id);

        //return view('todo::show', compact('x'));
    }

    /**
     * Show the form for editing the specified resource.
     * @param int $id
     * @return Renderable
     */
    public function edit($id)
    {
        return view('todo::edit');
    }

    /**
     * Update the specified resource in storage.
     * @param todoupdateRequest $UpdateRequest
     * @param ToDo $toDo
     * @return Renderable
     */
    public function update(todoupdateRequest $request,$id)
    {
        $todo=ToDo::findOrFail($id);
        $todo->status=$request->input('status');
        $todo->save();

        return back();
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

//    private function actionColumn($banner)
//    {
//        return view('banner::partials.action_column', compact('banner'));
//    }


    /**
     * Return contents list data
     */
    public function list()
    {
        return DataTables::of(ToDo::all())
            ->addColumn('status', function ($banner) {
                return $banner->Status;
            })->rawColumns(['actions'])->make(true);
    }

    /**
     * Contents list action column
     *
     * @param Banner $banner
     * @return View
     */
    private function actionColumn($banner)
    {
        return view('banner::partials.action_column', compact('banner'));
    }
}
