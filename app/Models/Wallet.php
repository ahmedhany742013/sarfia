<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\PreventDemoModeChanges;

class Wallet extends Model
{

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
