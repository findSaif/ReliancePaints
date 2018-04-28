<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class InvoiceLine extends Model
{
    //
    public function invoice () {
    	$this->belongsTo('App\SalesInvoice');
    }
}
