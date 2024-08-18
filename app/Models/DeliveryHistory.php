<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\PreventDemoModeChanges;

class DeliveryHistory extends Model
{

    public function order()
    {
        return $this->belongsTo(Order::class);
    }
}
