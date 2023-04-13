<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employee;

class employeesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $datas = Employee::all();
        return view('index', compact(
            'datas'
        ));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $model = new Employee;
        return view('addData', compact(
            'model'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $model = new Employee;
        $model->name = $request->name;
        $model->gender = $request->gender;
        $model->no_telphone = $request->no_telphone;
        $model->save();

        return redirect('/employee')->with('added', 'Succesfully added new data !');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Employee::find($id);
        return view('editData', compact(
            'data'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $model = Employee::find($id);
        $model->name = $request->name;
        $model->gender = $request->gender;
        $model->no_telphone = $request->no_telphone;
        $model->save();

        return redirect('/employee')->with('edited', 'The data successfully updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $data = Employee::find($id);
        $data->delete();
        return redirect('employee')->with('deleted', 'The data has been deleted !');
    }
}
