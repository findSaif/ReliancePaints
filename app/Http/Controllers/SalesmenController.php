<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\SalesmenRequest;
use App\Salesmen;
use Illuminate\Support\Facades\Session;

class SalesmenController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $salesmen = Salesmen::all();

        return view('admin.sales.salesmen.index', compact('salesmen'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sales.salesmen.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesmenRequest $request)
    {
        $input = $request->all();
        Salesmen::create($input);
        Session::flash('added_salesmen', 'A Salesman has been added successfully.');
        return redirect('/admin/sales/salesmen');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $salesmen = Salesmen::findOrFail($id);
        return view('admin.sales.salesmen.edit', compact('salesmen'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $salesmen = Salesmen::findOrFail($id);
        $salesmen->update($request->all());
        Session::flash('updated_salesmen', 'The Salesman has been updated successfully.');
        return redirect('/admin/sales/salesmen');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salesmen = Customer::findOrFail($id);
        $salesmen->delete();
        Session::flash('deleted_salesmen', 'The Salesman has been deleted successfully.');
        return redirect('/admin/sales/salesmen');
    }
}
