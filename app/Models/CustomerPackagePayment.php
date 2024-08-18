<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\PreventDemoModeChanges;

class CustomerPackagePayment extends Model
{

    public function user(){
    	return $this->belongsTo(User::class);
    }

    public function customer_package(){
    	return $this->belongsTo(CustomerPackage::class);
    }
}
