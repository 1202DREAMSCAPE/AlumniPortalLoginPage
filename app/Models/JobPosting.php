<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobPosting extends Model
{
    use HasFactory;

    protected $fillable = [
        'JTitle',
        'JLocation',
        'Salary',
        'EmailAdd',
        'Address',
        'CPerson',
        'EmpType',
        'CIndustry',
        'CName',
        'JDesc',
        'CNumCompany'
    ];
}
