<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plans extends Model
{
    use HasFactory;
    protected $fillable=[];

    public function Employees()
    {
        return $this->belongsTo('App\Models\Employee','employee_id');
    }
}
