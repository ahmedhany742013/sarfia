<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Traits\PreventDemoModeChanges;

class PasswordReset extends Model
{

    protected $fillable = ['email', 'token'];
}
