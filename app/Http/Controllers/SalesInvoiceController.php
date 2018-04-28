<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

use App\SalesInvoice;

use App\InvoiceLine;

use App\Http\Requests\SalesInvoiceRequest;

use Illuminate\Support\Facades\Session;
use PDF;
use App\Customer;

class SalesInvoiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sales_invoices = SalesInvoice::all();
        return view("admin.sales.invoice.index", compact('sales_invoices'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('admin.sales.invoice.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SalesInvoiceRequest $request)
    {
        $input = $request->all();
        $sales_invoice = new SalesInvoice();
        $invoice_line = new InvoiceLine();

        $sales_invoice->c_id = $input['c_id'];
        $sales_invoice->discount = $input['discount'];
        $sales_invoice->date = $input['date'];
        $sales_invoice->save();

        $invoice_line->qty = $input['qty'];
        $invoice_line->amount = $input['rate']*$input['qty'];
        $invoice_line->prod_id = $input['product_id'];
        $invoice_line->si_id = $sales_invoice->id;
        $invoice_line->save();
        Session::flash('added_invoice', 'An invoice has been added successfully.');
        return redirect('/admin/sales/invoice');

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
        $sales_invoice = InvoiceLine::where('si_id','=',$id)->get();
        $s=$sales_invoice->first();
        $s_id=$id;
        $sale = SalesInvoice::findOrFail($id);
        $cus_id=$sale->c_id;
        $customer=Customer::where('id','=',$cus_id)->first();
        $customer_name=$customer->name;



        $pdf = PDF::loadview('admin.sales.invoice.viewinvoice', compact('sales_invoice','customer_name',
            's_id'));
       // $pdf = PDF::loadhtml('Hello World!');
        return $pdf->download('Report.pdf');


    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sales_invoice = SalesInvoice::findOrFail($id);
        return view('admin.sales.invoice.edit', compact('sales_invoice'));
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
        $input = $request->all();
        $sales_invoice = SalesInvoice::findOrFail($id);

        $sales_invoice->c_id = $input['c_id'];
        $sales_invoice->discount = $input['discount'];
        $sales_invoice->date = $input['date'];
        $sales_invoice->save();

       
        Session::flash('updated_invoice', 'An invoice has been updated successfully.');
        return redirect('/admin/sales/invoice');
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sales_invoice = SalesInvoice::findOrFail($id);
        $sales_invoice->delete();
        Session::flash('deleted_invoice', 'The invoice has been deleted successfully.');
        return redirect('/admin/sales/invoice');
    }
}
