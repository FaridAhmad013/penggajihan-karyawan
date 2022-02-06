<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'username',
        'password',
        'photo',
        'phone_number',
        'address',
        'gender',
        'entry_date',
        'job_id',
        'education',
        'basic_salary',
        'status',
        'active'
    ];

    function job() {
        return $this->belongsTo(Job::class);
    }

    function getRouteKeyName()
    {
        return 'username';
    }
}
