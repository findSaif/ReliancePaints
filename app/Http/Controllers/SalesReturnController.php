<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\Http\Requests\SalesReturnRequest;
use App\SalesReturn;
use Illuminate\Support\Facades\Session;

class SalesReturnController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $sales_returns = SalesReturn::all();

        return view('admin.sales.returns.index', compact('sales_returns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.sales.returns.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesReturnRequest $request)
    {
        $input = $request->all();

        SalesReturn::create($input);
        Session::flash('added_salesreturn', 'SalesReturn has been added successfully.');
        return redirect('/admin/sales/returns');
        //return $input;
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
        $salesreturn = SalesReturn::findOrFail($id);
        return view('admin.sales.returns.edit', compact('salesreturn'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(SalesReturnRequest $request, $id)
    {
        $salesreturn = SalesReturn::findOrFail($id);
        $salesreturn->update($request->all());
        Session::flash('updated_salesreturn', 'SalesReturn has been updated successfully.');
        return redirect('/admin/sales/returns');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $salesreturn = SalesReturn::findOrFail($id);
        $salesreturn->delete();
        Session::flash('deleted_salesreturn', 'Sales Return has been deleted successfully.');
        return redirect('/admin/sales/returns');
    }
}
