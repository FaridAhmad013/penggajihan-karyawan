<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Salary extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id',
        'transportation_allowance',
        'achievement_allowance',
        'education_allowance',
        'overtime',
        'bonus',
        'insurance_deduction',
        'college_deduction',
        'pension',
        'status'
    ];

    public function allowances()
    {
        return $this->belongsToMany(Allowance::class)->using(AllowanceSalary::class);
    }

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }


}
