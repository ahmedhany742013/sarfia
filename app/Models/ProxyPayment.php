<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\PreventDemoModeChanges;

class ProxyPayment extends Model
{

    protected $table = 'proxypay_payments';
}
